<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <div class="min-h-screen flex" x-data="{ sidebarOpen: false, sidebarCollapsed: false }" x-init="console.log('Alpine initialized')">
            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col min-w-0 transition-all duration-300 ease-in-out"
                 :class="{ 'lg:ml-0': sidebarCollapsed, 'lg:ml-0': !sidebarCollapsed }">
                <!-- Top Header Bar -->
                <header class="bg-white shadow-sm border-b border-gray-200">
                    <div class="w-full px-6">
                        <div class="flex justify-between items-center py-4">
                            <div class="flex items-center space-x-4">
                                <!-- Mobile menu button -->
                                <button @click="sidebarOpen = !sidebarOpen" 
                                        class="lg:hidden text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                    </svg>
                                </button>

                                <!-- Page Title -->
                                @isset($header)
                                    <div class="flex-1">
                                        {{ $header }}
                                    </div>
                                @endisset
                            </div>

                                                <!-- Top Right Actions -->
                <div class="flex items-center space-x-8 ml-8">
                    <!-- Currency Switcher -->
                    <x-currency-switcher />
                    
                    <!-- Notifications -->
                    <button class="text-gray-500 hover:text-gray-700 relative focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-full p-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-3.5-3.5a1.414 1.414 0 010-2L20 8l-3.5-3.5a1.414 1.414 0 010-2L20 1M4 7l3-3 3 3M7.5 20L4 17l3-3"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">4</span>
                    </button>

                                    <!-- User Menu -->
                                    <div class="relative" x-data="{ open: false }">
                                        <button @click="open = !open" class="flex items-center text-sm text-gray-700 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg p-2">
                                            <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center mr-2">
                                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                </svg>
                                            </div>
                                            <span class="hidden sm:block font-medium">{{ Auth::user()->name }}</span>
                                            <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>

                                        <!-- Dropdown Menu -->
                                        <div x-show="open" @click.away="open = false" 
                                             class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 ring-1 ring-black ring-opacity-5">
                                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                Profile Settings
                                            </a>
                                            <hr class="my-1">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                    Sign Out
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="flex-1 py-8">
                    <div class="px-6">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
