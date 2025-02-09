<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', [ProductController::class, 'index'])->name('home');
//Route::get('products/', [ProductController::class, 'index'])->name('products.index');

Route::resource('products', ProductController::class);

Route::post('/purchase', [OrderController::class, 'purchase'])->name('purchase');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
