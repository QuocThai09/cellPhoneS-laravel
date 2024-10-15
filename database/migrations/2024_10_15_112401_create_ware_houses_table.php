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
        Schema::create('ware_houses', function (Blueprint $table) {
            $table->bigInteger('warehouse_store_id');
            $table->bigInteger('warehouse_product_id');
            $table->bigInteger('warehouse_product_quantity');
            $table->primary(['warehouse_store_id','warehouse_product_id']);
            $table->foreign('warehouse_store_id')->references('store_id')->on('stores')->onDelete('cascade');
            $table->foreign('warehouse_product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ware_houses');
    }
};
