<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'product_title' => 'Classic Logo Tee',
                'description' => 'A premium heavyweight cotton t-shirt featuring bold front logo print.',
                'short_description' => 'Heavyweight cotton logo tee.',
                'product_sku' => 100001,
                'product_name' => 'logo-tee-classic',
                'price' => 24.99,
            ],
            [
                'product_title' => 'Essential Hoodie',
                'description' => 'Soft fleece hoodie designed for everyday comfort and streetwear styling.',
                'short_description' => 'Cozy fleece hoodie.',
                'product_sku' => 100002,
                'product_name' => 'essential-hoodie',
                'price' => 59.99,
            ],
            [
                'product_title' => 'Vintage Wash Crewneck',
                'description' => 'Washed crewneck sweatshirt with a relaxed vintage fit.',
                'short_description' => 'Vintage style crewneck.',
                'product_sku' => 100003,
                'product_name' => 'vintage-crewneck',
                'price' => 49.99,
            ],
            [
                'product_title' => 'Relaxed Fit Joggers',
                'description' => 'Tapered joggers with elastic waistband and deep pockets.',
                'short_description' => 'Everyday joggers.',
                'product_sku' => 100004,
                'product_name' => 'relaxed-joggers',
                'price' => 44.99,
            ],
            [
                'product_title' => 'Minimal Street Cap',
                'description' => 'Clean embroidered cap with adjustable strap closure.',
                'short_description' => 'Simple everyday cap.',
                'product_sku' => 100005,
                'product_name' => 'street-cap',
                'price' => 19.99,
            ],
            [
                'product_title' => 'Oversized Graphic Tee',
                'description' => 'Loose fit t-shirt with bold back graphic print.',
                'short_description' => 'Oversized graphic shirt.',
                'product_sku' => 100006,
                'product_name' => 'oversized-graphic-tee',
                'price' => 29.99,
            ],
            [
                'product_title' => 'Denim Work Jacket',
                'description' => 'Durable denim jacket with modern streetwear cut.',
                'short_description' => 'Classic denim jacket.',
                'product_sku' => 100007,
                'product_name' => 'denim-work-jacket',
                'price' => 89.99,
            ],
            [
                'product_title' => 'Everyday Shorts',
                'description' => 'Lightweight cotton shorts perfect for summer wear.',
                'short_description' => 'Casual summer shorts.',
                'product_sku' => 100008,
                'product_name' => 'everyday-shorts',
                'price' => 34.99,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'product_title' => $product['product_title'],
                'description' => $product['description'],
                'short_description' => $product['short_description'],
                'product_sku' => $product['product_sku'],
                'product_name' => Str::slug($product['product_name']),
                'price' => $product['price'],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}