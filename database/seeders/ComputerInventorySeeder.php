<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;

class ComputerInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Clear existing data
        Product::truncate();
        Category::truncate();
        Supplier::truncate();
        
        // Re-enable foreign key checks
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create Computer-specific Categories
        $laptops = Category::create([
            'name' => 'Laptops',
            'description' => 'Notebook computers and ultrabooks',
            'is_active' => true
        ]);

        $desktops = Category::create([
            'name' => 'Desktop Computers',
            'description' => 'Desktop PCs and workstations',
            'is_active' => true
        ]);

        $components = Category::create([
            'name' => 'PC Components',
            'description' => 'CPUs, GPUs, RAM, storage devices',
            'is_active' => true
        ]);

        $peripherals = Category::create([
            'name' => 'Peripherals',
            'description' => 'Keyboards, mice, monitors, speakers',
            'is_active' => true
        ]);

        $accessories = Category::create([
            'name' => 'Accessories',
            'description' => 'Cables, cases, cooling, power supplies',
            'is_active' => true
        ]);

        $gaming = Category::create([
            'name' => 'Gaming Equipment',
            'description' => 'Gaming laptops, chairs, headsets',
            'is_active' => true
        ]);

        // Create Computer Hardware Suppliers
        $dell = Supplier::create([
            'company_name' => 'Dell Technologies',
            'contact_person' => 'Michael Chen',
            'email' => 'sales@dell.com',
            'phone' => '+1-800-999-3355',
            'address' => 'One Dell Way, Round Rock, TX 78682',
            'is_active' => true
        ]);

        $hp = Supplier::create([
            'company_name' => 'HP Inc.',
            'contact_person' => 'Sarah Williams',
            'email' => 'partner@hp.com',
            'phone' => '+1-650-857-1501',
            'address' => '1501 Page Mill Road, Palo Alto, CA 94304',
            'is_active' => true
        ]);

        $asus = Supplier::create([
            'company_name' => 'ASUS Computer International',
            'contact_person' => 'David Liu',
            'email' => 'sales@asus.com',
            'phone' => '+1-812-282-2787',
            'address' => '800 Corporate Way, Fremont, CA 94539',
            'is_active' => true
        ]);

        $logitech = Supplier::create([
            'company_name' => 'Logitech International',
            'contact_person' => 'Jennifer Martinez',
            'email' => 'sales@logitech.com',
            'phone' => '+1-510-795-8500',
            'address' => '7700 Gateway Blvd, Newark, CA 94560',
            'is_active' => true
        ]);

        $corsair = Supplier::create([
            'company_name' => 'Corsair Components',
            'contact_person' => 'Robert Kim',
            'email' => 'sales@corsair.com',
            'phone' => '+1-888-222-4346',
            'address' => '47100 Bayside Pkwy, Fremont, CA 94538',
            'is_active' => true
        ]);

        // Create Computer Products
        
        // Laptops
        Product::create([
            'sku' => 'LAP-DEL-001',
            'name' => 'Dell XPS 13 Laptop',
            'description' => '13.3" Intel Core i7, 16GB RAM, 512GB SSD',
            'price' => 1299.99,
            'quantity' => 12,
            'min_stock_level' => 5,
            'category_id' => $laptops->id,
            'supplier_id' => $dell->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'LAP-HP-001',
            'name' => 'HP Pavilion 15',
            'description' => '15.6" AMD Ryzen 5, 8GB RAM, 256GB SSD',
            'price' => 679.99,
            'quantity' => 8,
            'min_stock_level' => 10,
            'category_id' => $laptops->id,
            'supplier_id' => $hp->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'GAM-ASU-001',
            'name' => 'ASUS ROG Gaming Laptop',
            'description' => '17.3" Intel i9, RTX 4070, 32GB RAM, 1TB SSD',
            'price' => 2499.99,
            'quantity' => 6,
            'min_stock_level' => 3,
            'category_id' => $gaming->id,
            'supplier_id' => $asus->id,
            'is_active' => true
        ]);

        // Desktop Computers
        Product::create([
            'sku' => 'DTP-DEL-001',
            'name' => 'Dell OptiPlex 7090',
            'description' => 'Business desktop with Intel i5, 8GB RAM, 256GB SSD',
            'price' => 899.99,
            'quantity' => 15,
            'min_stock_level' => 8,
            'category_id' => $desktops->id,
            'supplier_id' => $dell->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'DTP-HP-001',
            'name' => 'HP EliteDesk 800',
            'description' => 'Compact desktop PC with Intel i7, 16GB RAM, 512GB SSD',
            'price' => 1199.99,
            'quantity' => 10,
            'min_stock_level' => 5,
            'category_id' => $desktops->id,
            'supplier_id' => $hp->id,
            'is_active' => true
        ]);

        // PC Components
        Product::create([
            'sku' => 'RAM-COR-001',
            'name' => 'Corsair Vengeance 16GB DDR4',
            'description' => '16GB (2x8GB) DDR4-3200 Desktop Memory',
            'price' => 89.99,
            'quantity' => 25,
            'min_stock_level' => 15,
            'category_id' => $components->id,
            'supplier_id' => $corsair->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'SSD-COR-001',
            'name' => 'Corsair MP600 1TB NVMe SSD',
            'description' => '1TB NVMe PCIe Gen4 M.2 SSD',
            'price' => 159.99,
            'quantity' => 18,
            'min_stock_level' => 12,
            'category_id' => $components->id,
            'supplier_id' => $corsair->id,
            'is_active' => true
        ]);

        // Peripherals
        Product::create([
            'sku' => 'KEY-LOG-001',
            'name' => 'Logitech MX Keys Keyboard',
            'description' => 'Wireless illuminated keyboard',
            'price' => 99.99,
            'quantity' => 30,
            'min_stock_level' => 20,
            'category_id' => $peripherals->id,
            'supplier_id' => $logitech->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'MOU-LOG-001',
            'name' => 'Logitech MX Master 3',
            'description' => 'Wireless ergonomic mouse',
            'price' => 79.99,
            'quantity' => 7, // Low stock
            'min_stock_level' => 15,
            'category_id' => $peripherals->id,
            'supplier_id' => $logitech->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'MON-ASU-001',
            'name' => 'ASUS 24" Gaming Monitor',
            'description' => '24" 1080p 144Hz gaming monitor',
            'price' => 199.99,
            'quantity' => 12,
            'min_stock_level' => 8,
            'category_id' => $peripherals->id,
            'supplier_id' => $asus->id,
            'is_active' => true
        ]);

        // Accessories
        Product::create([
            'sku' => 'CAB-USB-001',
            'name' => 'USB-C to USB-A Cable',
            'description' => '6ft USB-C to USB-A cable',
            'price' => 12.99,
            'quantity' => 50,
            'min_stock_level' => 30,
            'category_id' => $accessories->id,
            'supplier_id' => $logitech->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'PSU-COR-001',
            'name' => 'Corsair 750W Power Supply',
            'description' => '750W 80+ Gold modular power supply',
            'price' => 129.99,
            'quantity' => 8, // Low stock
            'min_stock_level' => 12,
            'category_id' => $accessories->id,
            'supplier_id' => $corsair->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'COOL-COR-001',
            'name' => 'Corsair CPU Cooler',
            'description' => 'AIO liquid CPU cooler 240mm',
            'price' => 89.99,
            'quantity' => 5, // Low stock
            'min_stock_level' => 8,
            'category_id' => $accessories->id,
            'supplier_id' => $corsair->id,
            'is_active' => true
        ]);

        // Gaming Equipment
        Product::create([
            'sku' => 'HEAD-LOG-001',
            'name' => 'Logitech G Pro X Headset',
            'description' => 'Professional gaming headset with mic',
            'price' => 129.99,
            'quantity' => 15,
            'min_stock_level' => 10,
            'category_id' => $gaming->id,
            'supplier_id' => $logitech->id,
            'is_active' => true
        ]);

        Product::create([
            'sku' => 'CHAIR-COR-001',
            'name' => 'Corsair Gaming Chair',
            'description' => 'Ergonomic gaming chair with lumbar support',
            'price' => 299.99,
            'quantity' => 4, // Low stock
            'min_stock_level' => 6,
            'category_id' => $gaming->id,
            'supplier_id' => $corsair->id,
            'is_active' => true
        ]);
    }
}
