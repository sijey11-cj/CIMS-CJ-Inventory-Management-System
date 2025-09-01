<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('CIMS: CJ Inventory Management System - Dashboard') }}
            </h2>
            <div class="flex items-center mr-12 gap-4">
                <span class="text-sm text-gray-600 ml-2">Last updated: {{ now()->format('M d, Y H:i') }}</span>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded-md text-xs font-medium transition-colors flex items-center mr-2">
                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12a8 8 0 0115.735-2.235l-3.47 3.47m0 0h3m-3 0v-3m-9.735 9.735A8 8 0 714.265 14.5l3.47-3.47m0 0h-3m3 0v3"/>
                    </svg>
                    Refresh Data
                </button>
            </div>
        </div>
    </x-slot>

    <div class="space-y-8">
        <!-- Enhanced Key Metrics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Total Products -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 overflow-hidden shadow-sm sm:rounded-lg border border-blue-200 transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <p class="text-base font-medium text-blue-700">Total Products</p>
                            <p class="text-4xl font-bold text-blue-900">{{ $totalProducts ?? 0 }}</p>
                            <p class="text-sm text-blue-600 mt-2">Avg. Price: {{ App\Helpers\CurrencyHelper::format($averageProductPrice ?? 0) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Inventory Value -->
            <div class="bg-gradient-to-r from-green-50 to-green-100 overflow-hidden shadow-sm sm:rounded-lg border border-green-200 transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <p class="text-base font-medium text-green-700">Inventory Value</p>
                            <p class="text-4xl font-bold text-green-900">{{ App\Helpers\CurrencyHelper::format($totalInventoryValue ?? 0) }}</p>
                            <p class="text-sm text-green-600 mt-2">Total stock worth</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories & Suppliers -->
            <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 overflow-hidden shadow-sm sm:rounded-lg border border-yellow-200 transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-yellow-600 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <p class="text-base font-medium text-yellow-700">Categories</p>
                            <p class="text-4xl font-bold text-yellow-900">{{ $totalCategories ?? 0 }}</p>
                            <p class="text-sm text-yellow-600 mt-2">{{ $totalSuppliers ?? 0 }} suppliers</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock Alerts -->
            <div class="bg-gradient-to-r from-red-50 to-red-100 overflow-hidden shadow-sm sm:rounded-lg border border-red-200 transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-red-600 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.664-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <p class="text-base font-medium text-red-700">Stock Alerts</p>
                            <p class="text-4xl font-bold text-red-900">{{ $lowStockProducts ?? 0 }}</p>
                            <p class="text-sm text-red-600 mt-2">Items need restock</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advanced Analytics Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- Stock Status Chart -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <h3 class="text-xl font-medium text-gray-900 mb-6">Stock Status Distribution</h3>
                    <div class="relative">
                        <div class="flex items-center justify-center">
                            <div class="relative w-40 h-40">
                                <!-- Donut Chart Simulation -->
                                <div class="absolute inset-0 rounded-full border-8 border-gray-200"></div>
                                <div class="absolute inset-0 rounded-full border-8 border-green-500 border-t-transparent border-r-transparent transform rotate-45"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-3xl font-bold text-gray-900">{{ number_format((($inStockCount ?? 0) / max($totalProducts, 1)) * 100, 1) }}%</div>
                                        <div class="text-sm text-gray-600">In Stock</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 space-y-3">
                            <div class="flex justify-between text-base">
                                <span class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>In Stock</span>
                                <span class="font-medium">{{ $inStockCount ?? 0 }}</span>
                            </div>
                            <div class="flex justify-between text-base">
                                <span class="flex items-center"><span class="w-4 h-4 bg-red-500 rounded-full mr-3"></span>Low Stock</span>
                                <span class="font-medium">{{ $lowStockProducts ?? 0 }}</span>
                            </div>
                            <div class="flex justify-between text-base">
                                <span class="flex items-center"><span class="w-4 h-4 bg-gray-300 rounded-full mr-3"></span>Out of Stock</span>
                                <span class="font-medium">{{ $outOfStockCount ?? 0 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Products by Value -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <h3 class="text-xl font-medium text-gray-900 mb-6">Top Products by Value</h3>
                    <div class="space-y-4">
                        @if(isset($topProductsByValue) && $topProductsByValue->count() > 0)
                            @foreach($topProductsByValue as $product)
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div class="flex-1">
                                    <div class="font-medium text-base text-gray-900">{{ Str::limit($product->name, 25) }}</div>
                                    <div class="text-sm text-gray-500">{{ $product->category->name ?? 'N/A' }}</div>
                                </div>
                                <div class="text-right">
                                    <div class="text-base font-medium text-gray-900">{{ App\Helpers\CurrencyHelper::format($product->total_value) }}</div>
                                    <div class="text-sm text-gray-500">{{ $product->quantity }} units</div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p class="text-gray-500 text-center py-4">No product data available</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Recent Activity Feed -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <h3 class="text-xl font-medium text-gray-900 mb-6">Recent Activity</h3>
                    <div class="space-y-4">
                        @if(isset($recentActivity))
                            @foreach($recentActivity as $activity)
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    @if($activity['type'] === 'sale')
                                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                            </svg>
                                        </div>
                                    @elseif($activity['type'] === 'purchase')
                                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                            </svg>
                                        </div>
                                    @else
                                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.664-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base text-gray-900">{{ $activity['description'] }}</p>
                                    <p class="text-sm text-gray-500">{{ $activity['time'] }}</p>
                                </div>
                                <div class="text-base font-medium text-gray-900">
                                    @if($activity['type'] === 'sale')
                                        {{ App\Helpers\CurrencyHelper::format($activity['amount']) }}
                                    @else
                                        {{ $activity['amount'] }}
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Enhanced Recent Products -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-medium text-gray-900">Recent Products</h3>
                        <a href="#" class="text-base text-blue-600 hover:text-blue-500 font-medium">View all →</a>
                    </div>
                    
                    @if(isset($recentProducts) && $recentProducts->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="text-left py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                        <th class="text-left py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                        <th class="text-left py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                        <th class="text-left py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Value</th>
                                        <th class="text-left py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach($recentProducts as $product)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4">
                                            <div class="text-sm font-medium text-gray-900">{{ Str::limit($product->name, 30) }}</div>
                                            <div class="text-sm text-gray-500">{{ $product->sku }}</div>
                                        </td>
                                        <td class="py-4 text-sm text-gray-500">
                                            {{ $product->category->name ?? 'N/A' }}
                                        </td>
                                        <td class="py-4 text-sm text-gray-900">
                                            {{ $product->quantity }}
                                        </td>
                                        <td class="py-4 text-sm text-gray-900">
                                            {{ App\Helpers\CurrencyHelper::format($product->price * $product->quantity) }}
                                        </td>
                                        <td class="py-4">
                                            @php
                                                $quantity = $product->quantity ?? 0;
                                                $minStock = $product->min_stock_level ?? 10;
                                                $status = $quantity < $minStock ? 'Low Stock' : 'In Stock';
                                                $statusColor = $quantity < $minStock ? 'red' : 'green';
                                            @endphp
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-{{ $statusColor }}-100 text-{{ $statusColor }}-800">
                                                {{ $status }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No products</h3>
                            <p class="mt-1 text-sm text-gray-500">Get started by creating your first product.</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Stock Alerts & Quick Actions -->
            <div class="space-y-6">
                <!-- Stock Alerts -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition-all duration-300 hover:bg-gray-100 cursor-pointer">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-medium text-gray-900">Stock Alerts</h3>
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $lowStockProducts ?? 0 }} alerts</span>
                        </div>
                        
                        @if(isset($lowStockItems) && $lowStockItems->count() > 0)
                            <div class="space-y-3">
                                @foreach($lowStockItems as $item)
                                <div class="flex items-center justify-between p-3 bg-red-50 border border-red-200 rounded-lg">
                                    <div class="flex-1">
                                        <div class="font-medium text-sm text-gray-900">{{ Str::limit($item->name, 25) }}</div>
                                        <div class="text-xs text-gray-500">{{ $item->category->name ?? 'N/A' }}</div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-sm font-medium text-red-600">{{ $item->quantity }} left</div>
                                        <div class="text-xs text-gray-500">Min: {{ $item->min_stock_level }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-4">
                                <div class="text-green-600 mb-2">
                                    <svg class="mx-auto h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <p class="text-sm text-gray-500">All products are well stocked!</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Category Breakdown -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transition-all duration-300 hover:bg-gray-100 cursor-pointer">
            <div class="p-8">
                <h3 class="text-xl font-medium text-gray-900 mb-8">Category Performance</h3>
                @if(isset($categoryStats) && $categoryStats->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($categoryStats as $category)
                        <div class="bg-gray-50 rounded-lg p-6 transition-all duration-300 hover:bg-gray-200 cursor-pointer">
                            <h4 class="font-medium text-lg text-gray-900 mb-4">{{ $category['name'] }}</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Products:</span>
                                    <span class="font-medium">{{ $category['products_count'] }}</span>
                                </div>
                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Total Quantity:</span>
                                    <span class="font-medium">{{ number_format($category['total_quantity']) }}</span>
                                </div>
                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Total Value:</span>
                                    <span class="font-medium text-green-600">{{ App\Helpers\CurrencyHelper::format($category['total_value']) }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-gray-500 py-8">No category data available</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
