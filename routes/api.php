<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

// Create new products
Route::post('/products', [ProductsController::class, 'create']);

// Get All Products
Route::get('/products', [ProductsController::class, 'index']);

// Get Product By ID
Route::get('/products/{id}', [ProductsController::class, 'show']);