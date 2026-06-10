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

    // Get Products By ID
    public function show($id)
    {

        // Find Product
        $product = Product::find($id);

        if (empty($product)) {
            return response()->json([
                'message' => 'Product Not Found'
            ], 404);
        }

        return response()->json([
            'product' => $product
        ], 404);
    }
}
