<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('products/', [ProductController::class, 'index'])->name('products.index');
