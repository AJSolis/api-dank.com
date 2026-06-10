<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('media_type');
            $table->string('media_path');
        });

        Schema::create('product_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->string('description');
            $table->string('short_description');
            $table->integer('product_sku');
            $table->string('product_name');
            $table->decimal('price', 3, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('upsell_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('status', ['processing', 'in-progress', 'completed', 'declined', 'cancelled']);
            $table->decimal('tax_amount');
            $table->decimal('total_amount');
            $table->timestamps();
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->unsignedInteger('product_sku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_details');
    }
};  
