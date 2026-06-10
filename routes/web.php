<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

// Get All Products
Route::get('/products', [ProductsController::class, 'index']);