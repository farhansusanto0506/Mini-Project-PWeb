<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route Home
Route::get('/', [ProductController::class, 'home'])->name('home');

// Route Daftar Produk
Route::get('/produk', [ProductController::class, 'produk'])->name('produk.index');

// Route Detail Produk
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.show');