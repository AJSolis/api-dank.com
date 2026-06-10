<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;

class ProductsController extends Controller
{

    // Create New Product
    public function create(Request $request)
    {

        // Validate POST Data
        $validator = Validator::make($request->all(), [
            'product_title' => 'required|string|max:255', 
            'description' => 'required|string|max:255',
            'short_description' => 'required|string|max:150',
            'product_sku' => 'required|integer|digits:8',
            'product_name' => 'required|string|max:255',
            'price' => 'required|integer|10',
            'is_active' => 'required|boolean'
        ]);

        // Return 422 Fail on POST Data Validate
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 422);
        }

        // Begin Database Transaction
        DB::beginTransaction();

        try {

            // Get Validated Data
            $validatedData = $validator->validated();

            echo "<pre>";
            var_dump($validatedData);

        } catch (\Exception $e) {

            // If there was an issue roll back the database transactions. Prevents data from being entered
            DB::rollBack();

            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Delete Product By Id
    public function destroy()
    {
        
    }

    // Get All Products
    public function index()
    {
        return Products::all();
    }

    // Get Products By ID
    public function show($id)
    {

        // Find Product
        $product = Products::find($id);

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
