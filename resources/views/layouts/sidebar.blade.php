<!-- Sidebar -->
<div class="bg-gray-900 flex-shrink-0 transform transition-all duration-300 ease-in-out lg:static lg:h-screen fixed inset-y-0 left-0 z-40 w-64" 
     :class="{ 
         'translate-x-0': sidebarOpen || window.innerWidth >= 1024,
         '-translate-x-full lg:translate-x-0': !(sidebarOpen || window.innerWidth >= 1024),
         'lg:w-64': !sidebarCollapsed,
         'lg:w-16': sidebarCollapsed
     }" 
     x-show="sidebarOpen || window.innerWidth >= 1024" 
     @click.away="if (window.innerWidth < 1024) sidebarOpen = false">
     
    <!-- Sidebar Header -->
    <div class="flex items-center justify-between px-4 py-6 border-b border-gray-700">
        <div class="flex items-center space-x-3" :class="{ 'justify-center': sidebarCollapsed }">
            <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <div x-show="!sidebarCollapsed" class="transition-opacity duration-300">
                <h2 class="text-white font-semibold text-lg">CIMS</h2>
                <p class="text-gray-400 text-xs">Inventory Management System</p>
            </div>
        </div>
        <!-- Toggle button for desktop collapse and close button for mobile -->
        <div class="flex items-center space-x-2">
            <!-- Desktop collapse button -->
            <button @click="sidebarCollapsed = !sidebarCollapsed" 
                    class="hidden lg:block text-gray-400 hover:text-white transition-colors"
                    x-show="!sidebarCollapsed || sidebarCollapsed">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          :d="sidebarCollapsed ? 'M13 5l7 7-7 7M5 5l7 7-7 7' : 'M11 19l-7-7 7-7M19 19l-7-7 7-7'"/>
                </svg>
            </button>
            <!-- Close button for mobile -->
            <button @click="sidebarOpen = false" class="lg:hidden text-gray-400 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Navigation -->
    <div class="flex flex-col h-full">
        <nav class="flex-1 px-4 pb-4 overflow-y-auto">
            <!-- Dashboard -->
            <div class="relative group">
                <a href="{{ route('dashboard') }}" 
                   class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-2 {{ request()->routeIs('dashboard') ? 'bg-gray-800 text-white' : '' }}"
                   :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                    <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4m4-4v4m4-4v4"/>
                    </svg>
                    <span class="font-medium transition-opacity duration-300" x-show="!sidebarCollapsed">Dashboard</span>
                </a>
                <!-- Tooltip for collapsed state -->
                <div x-show="sidebarCollapsed" 
                     class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                    Dashboard
                </div>
            </div>

        <!-- Inventory Control Section -->
        <div class="mt-8">
            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 transition-opacity duration-300"
                :class="sidebarCollapsed ? 'opacity-0 h-0 mb-0 overflow-hidden' : 'opacity-100'"
                x-show="!sidebarCollapsed">Computer Inventory</h3>
            
            <!-- Products -->
            <div class="relative group">
                <a href="{{ route('products.index') }}" 
                   class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1 {{ request()->routeIs('products.*') ? 'bg-gray-800 text-white' : '' }}"
                   :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                    <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Products</span>
                    <span class="ml-auto bg-blue-600 text-white text-xs px-2 py-1 rounded-full transition-opacity duration-300" x-show="!sidebarCollapsed">15</span>
                </a>
                <!-- Tooltip for collapsed state -->
                <div x-show="sidebarCollapsed" 
                     class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                    Products (15)
                </div>
            </div>

            <!-- Categories -->
            <div class="relative group">
                <a href="{{ route('categories.index') }}" 
                   class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1 {{ request()->routeIs('categories.*') ? 'bg-gray-800 text-white' : '' }}"
                   :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                    <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Categories</span>
                    <span class="ml-auto bg-green-600 text-white text-xs px-2 py-1 rounded-full transition-opacity duration-300" x-show="!sidebarCollapsed">6</span>
                </a>
                <!-- Tooltip for collapsed state -->
                <div x-show="sidebarCollapsed" 
                     class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                    Categories (6)
                </div>
            </div>

            <!-- Suppliers -->
            <div class="relative group">
                <a href="{{ route('suppliers.index') }}" 
                   class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1 {{ request()->routeIs('suppliers.*') ? 'bg-gray-800 text-white' : '' }}"
                   :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                    <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Suppliers</span>
                    <span class="ml-auto bg-yellow-600 text-white text-xs px-2 py-1 rounded-full transition-opacity duration-300" x-show="!sidebarCollapsed">5</span>
                </a>
                <!-- Tooltip for collapsed state -->
                <div x-show="sidebarCollapsed" 
                     class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                    Suppliers (5)
                </div>
            </div>
        </div>

            <!-- Sales & Orders Section -->
            <div class="mt-8">
                <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 transition-opacity duration-300"
                    :class="sidebarCollapsed ? 'opacity-0 h-0 mb-0 overflow-hidden' : 'opacity-100'"
                    x-show="!sidebarCollapsed">Sales & Orders</h3>
                
                <!-- Stock Management -->
                <div class="relative group">
                    <a href="#" class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1"
                       :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                        <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                        </svg>
                        <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Stock Management</span>
                    </a>
                    <!-- Tooltip for collapsed state -->
                    <div x-show="sidebarCollapsed" 
                         class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                        Stock Management
                    </div>
                </div>

                <!-- Purchase Orders -->
                <div class="relative group">
                    <a href="#" class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1"
                       :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                        <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Purchase Orders</span>
                    </a>
                    <!-- Tooltip for collapsed state -->
                    <div x-show="sidebarCollapsed" 
                         class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                        Purchase Orders
                    </div>
                </div>

                <!-- Customer Orders -->
                <div class="relative group">
                    <a href="#" class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1"
                       :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                        <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 3H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6"/>
                        </svg>
                        <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Customer Orders</span>
                    </a>
                    <!-- Tooltip for collapsed state -->
                    <div x-show="sidebarCollapsed" 
                         class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                        Customer Orders
                    </div>
                </div>
            </div>

            <!-- Reports & Analytics Section -->
            <div class="mt-8">
                <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 transition-opacity duration-300"
                    :class="sidebarCollapsed ? 'opacity-0 h-0 mb-0 overflow-hidden' : 'opacity-100'"
                    x-show="!sidebarCollapsed">Reports & Analytics</h3>
                
                <!-- Low Stock Alerts -->
                <div class="relative group">
                    <a href="#" class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1"
                       :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                        <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.664-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                        <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Low Stock Alerts</span>
                        <span class="ml-auto bg-red-600 text-white text-xs px-2 py-1 rounded-full transition-opacity duration-300" x-show="!sidebarCollapsed">6</span>
                    </a>
                    <!-- Tooltip for collapsed state -->
                    <div x-show="sidebarCollapsed" 
                         class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                        Low Stock Alerts (6)
                    </div>
                </div>

                <!-- Sales Reports -->
                <div class="relative group">
                    <a href="#" class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1"
                       :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                        <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Sales Reports</span>
                    </a>
                    <!-- Tooltip for collapsed state -->
                    <div x-show="sidebarCollapsed" 
                         class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                        Sales Reports
                    </div>
                </div>

                <!-- Analytics -->
                <div class="relative group">
                    <a href="#" class="flex items-center py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1"
                       :class="sidebarCollapsed ? 'px-2 justify-center' : 'px-4'">
                        <svg class="w-5 h-5" :class="sidebarCollapsed ? '' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="transition-opacity duration-300" x-show="!sidebarCollapsed">Analytics</span>
                    </a>
                    <!-- Tooltip for collapsed state -->
                    <div x-show="sidebarCollapsed" 
                         class="absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-sm rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 whitespace-nowrap">
                        Analytics
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Overlay for mobile -->
<div x-show="sidebarOpen" 
     class="fixed inset-0 z-30 bg-black bg-opacity-50 lg:hidden" 
     @click="sidebarOpen = false">
</div> 