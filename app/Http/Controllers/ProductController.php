<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(Request $request)
    {
        $query = Product::with(['category', 'supplier']);

        // Apply search filter
        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('sku', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Apply category filter
        if ($request->filled('category')) {
            $query->where('category_id', $request->get('category'));
        }

        // Apply supplier filter
        if ($request->filled('supplier')) {
            $query->where('supplier_id', $request->get('supplier'));
        }

        // Apply stock status filter
        if ($request->filled('stock_status')) {
            $status = $request->get('stock_status');
            switch($status) {
                case 'in_stock':
                    $query->whereRaw('quantity >= min_stock_level');
                    break;
                case 'low_stock':
                    $query->whereRaw('quantity < min_stock_level AND quantity > 0');
                    break;
                case 'out_of_stock':
                    $query->where('quantity', 0);
                    break;
            }
        }

        $products = $query->orderBy('created_at', 'desc')->paginate(15);

        // Append query parameters to pagination links
        $products->appends($request->query());

        $categories = Category::where('is_active', true)->orderBy('name')->get();
        $suppliers = Supplier::where('is_active', true)->orderBy('company_name')->get();

        // Calculate stats based on filtered results if filters are applied
        $statsQuery = Product::query();
        if ($request->anyFilled(['search', 'category', 'supplier', 'stock_status'])) {
            // Apply the same filters to stats
            if ($request->filled('search')) {
                $search = $request->get('search');
                $statsQuery->where(function($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                      ->orWhere('sku', 'like', "%{$search}%")
                      ->orWhere('description', 'like', "%{$search}%");
                });
            }
            if ($request->filled('category')) {
                $statsQuery->where('category_id', $request->get('category'));
            }
            if ($request->filled('supplier')) {
                $statsQuery->where('supplier_id', $request->get('supplier'));
            }
                         if ($request->filled('stock_status')) {
                 $status = $request->get('stock_status');
                 switch($status) {
                     case 'in_stock':
                         $statsQuery->whereRaw('quantity >= min_stock_level');
                         break;
                     case 'low_stock':
                         $statsQuery->whereRaw('quantity < min_stock_level AND quantity > 0');
                         break;
                     case 'out_of_stock':
                         $statsQuery->where('quantity', 0);
                         break;
                 }
             }
         }

         // Calculate some stats
         $totalProducts = $statsQuery->count();
         $totalValue = $statsQuery->get()->sum(function($product) {
             return $product->price * $product->quantity;
         });
         $lowStockCount = $statsQuery->whereRaw('quantity < min_stock_level AND quantity > 0')->count();
         $outOfStockCount = $statsQuery->where('quantity', 0)->count();

        return view('products.index', compact(
            'products',
            'categories', 
            'suppliers',
            'totalProducts',
            'totalValue',
            'lowStockCount',
            'outOfStockCount'
        ));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::where('is_active', true)->orderBy('company_name')->get();
        
        return view('products.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products,sku',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'min_stock_level' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $suppliers = Supplier::where('is_active', true)->orderBy('company_name')->get();
        
        return view('products.edit', compact('product', 'categories', 'suppliers'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products,sku,' . $product->id,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'min_stock_level' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
} 