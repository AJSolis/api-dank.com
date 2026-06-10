<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{

    // Get All Products
    public function index()
    {
        return Products::all();
    }
}
