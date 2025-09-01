<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Categories
        $electronics = Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic devices and components',
            'is_active' => true
        ]);

        $furniture = Category::create([
            'name' => 'Furniture',
            'description' => 'Office and home furniture',
            'is_active' => true
        ]);

        $office = Category::create([
            'name' => 'Office Supplies',
            'description' => 'Stationery and office equipment',
            'is_active' => true
        ]);

        // Create Suppliers
        $techSupplier = Supplier::create([
            'company_name' => 'TechCorp Solutions',
            'contact_person' => 'John Smith',
            'email' => 'john@techcorp.com',
            'phone' => '+1-555-0123',
            'address' => '123 Tech Street, Silicon Valley, CA',
            'is_active' => true
        ]);

        $furnitureSupplier = Supplier::create([
            'company_name' => 'Modern Furniture Co.',
            'contact_person' => 'Sarah Johnson',
            'email' => 'sarah@modernfurniture.com',
            'phone' => '+1-555-0456',
            'address' => '456 Design Ave, New York, NY',
            'is_active' => true
        ]);

        $officeSupplier = Supplier::create([
            'company_name' => 'Office Plus',
            'contact_person' => 'Mike Wilson',
            'email' => 'mike@officeplus.com',
            'phone' => '+1-555-0789',
            'address' => '789 Business Blvd, Chicago, IL',
            'is_active' => true
        ]);

        // Create Products
        Product::create([
            'sku' => 'LAP001',
            'name' => 'Dell Laptop XPS 13',
            'description' => 'High-performance ultrabook for professionals',
            'price' => 1299.99,
            'quantity' => 25,
            'min_stock_level' => 10,
            'category_id' => $electronics->id,
            'supplier_id' => $techSupplier->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'MON001',
            'name' => 'Samsung 24" Monitor',
            'description' => '1080p LED monitor with USB-C connectivity',
            'price' => 299.99,
            'quantity' => 15,
            'min_stock_level' => 5,
            'category_id' => $electronics->id,
            'supplier_id' => $techSupplier->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'KEY001',
            'name' => 'Wireless Keyboard',
            'description' => 'Ergonomic wireless keyboard with backlight',
            'price' => 79.99,
            'quantity' => 8, // Low stock
            'min_stock_level' => 10,
            'category_id' => $electronics->id,
            'supplier_id' => $techSupplier->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'DSK001',
            'name' => 'Standing Desk',
            'description' => 'Height-adjustable electric standing desk',
            'price' => 599.99,
            'quantity' => 12,
            'min_stock_level' => 3,
            'category_id' => $furniture->id,
            'supplier_id' => $furnitureSupplier->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'CHR001',
            'name' => 'Ergonomic Office Chair',
            'description' => 'Mesh back office chair with lumbar support',
            'price' => 349.99,
            'quantity' => 6, // Low stock
            'min_stock_level' => 8,
            'category_id' => $furniture->id,
            'supplier_id' => $furnitureSupplier->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'PEN001',
            'name' => 'Premium Pen Set',
            'description' => 'Set of 12 premium ballpoint pens',
            'price' => 24.99,
            'quantity' => 50,
            'min_stock_level' => 20,
            'category_id' => $office->id,
            'supplier_id' => $officeSupplier->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'PAP001',
            'name' => 'A4 Paper Ream',
            'description' => '500 sheets of premium A4 copy paper',
            'price' => 12.99,
            'quantity' => 3, // Low stock
            'min_stock_level' => 10,
            'category_id' => $office->id,
            'supplier_id' => $officeSupplier->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'STA001',
            'name' => 'Stapler Heavy Duty',
            'description' => 'Industrial grade stapler for thick documents',
            'price' => 45.99,
            'quantity' => 18,
            'min_stock_level' => 5,
            'category_id' => $office->id,
            'supplier_id' => $officeSupplier->id,
            'is_active' => true
        ]);
    }
}
