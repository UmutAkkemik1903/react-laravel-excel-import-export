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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_id')->nullable();
            $table->string('group_code')->nullable();
            $table->string('products_code')->nullable();
            $table->string('shop_products_code')->nullable();
            $table->string('shop_stock_code')->nullable();
            $table->string('catalog_id')->nullable();
            $table->string('barkode')->nullable();
            $table->string('products_title')->nullable();
            $table->string('products_properties')->nullable();
            $table->string('products_status')->nullable();
            $table->string('shop_note')->nullable();
            $table->string('ready_timer')->nullable();
            $table->string('stock')->nullable();
            $table->string('money_type')->nullable();
            $table->string('market_selling_price')->nullable();
            $table->string('n_selling_price')->nullable();
            $table->text('commission')->nullable();
            $table->string('delivery_template_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
