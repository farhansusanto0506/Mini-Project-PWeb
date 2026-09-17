<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Menghubungkan URL /produk ke method 'index' di ProductController
Route::get('/', [ProductController::class, 'index']);