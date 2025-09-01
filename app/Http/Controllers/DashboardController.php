<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        // Get key inventory metrics
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalSuppliers = Supplier::count();
        $lowStockProducts = Product::whereRaw('quantity < min_stock_level')->count();
        
        // Calculate inventory value
        $totalInventoryValue = Product::selectRaw('SUM(price * quantity) as total_value')->first()->total_value ?? 0;
        $averageProductPrice = Product::avg('price') ?? 0;
        
        // Get recent products
        $recentProducts = Product::with(['category', 'supplier'])
            ->latest()
            ->take(5)
            ->get();
            
        // Get low stock products for alerts
        $lowStockItems = Product::with('category')
            ->whereRaw('quantity < min_stock_level')
            ->orderBy('quantity', 'asc')
            ->take(5)
            ->get();
            
        // Get top products by value
        $topProductsByValue = Product::with('category')
            ->selectRaw('*, (price * quantity) as total_value')
            ->orderByDesc('total_value')
            ->take(5)
            ->get();
            
        // Category breakdown
        $categoryStats = Category::all()->map(function($category) {
            $products = Product::where('category_id', $category->id)->get();
            $totalQuantity = $products->sum('quantity');
            $totalValue = $products->sum(function($product) {
                return $product->price * $product->quantity;
            });
            
            return [
                'name' => $category->name,
                'products_count' => $products->count(),
                'total_quantity' => $totalQuantity,
                'total_value' => $totalValue,
            ];
        });
            
        // Stock status distribution
        $inStockCount = Product::whereRaw('quantity >= min_stock_level')->count();
        $outOfStockCount = Product::where('quantity', 0)->count();
        
        // Recent activity simulation (you can replace this with actual order data later)
        $recentActivity = collect([
            ['type' => 'sale', 'description' => 'Dell XPS 13 Laptop sold', 'amount' => 1299.99, 'time' => '2 hours ago'],
            ['type' => 'purchase', 'description' => 'Corsair RAM restocked', 'amount' => 25, 'time' => '4 hours ago'],
            ['type' => 'alert', 'description' => 'Low stock: Logitech MX Master 3', 'amount' => 7, 'time' => '6 hours ago'],
            ['type' => 'sale', 'description' => 'ASUS Gaming Monitor sold', 'amount' => 199.99, 'time' => '1 day ago'],
        ]);
            
        return view('dashboard', compact(
            'totalProducts',
            'totalCategories', 
            'totalSuppliers',
            'lowStockProducts',
            'totalInventoryValue',
            'averageProductPrice',
            'recentProducts',
            'lowStockItems',
            'topProductsByValue',
            'categoryStats',
            'inStockCount',
            'outOfStockCount',
            'recentActivity'
        ));
    }
}
