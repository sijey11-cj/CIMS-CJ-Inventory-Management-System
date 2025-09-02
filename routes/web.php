<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Products routes
    Route::resource('products', ProductController::class);
    
    // Categories routes
    Route::resource('categories', CategoryController::class);
    
    // Suppliers routes
    Route::resource('suppliers', SupplierController::class);
    
    // Currency routes
    Route::post('/currency/switch', [CurrencyController::class, 'switch'])->name('currency.switch');
    Route::get('/currency/current', [CurrencyController::class, 'current'])->name('currency.current');
});

require __DIR__.'/auth.php';
