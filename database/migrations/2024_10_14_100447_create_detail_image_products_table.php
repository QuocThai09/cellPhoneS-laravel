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
        Schema::create('detail_image_products', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('detail_img', length:100);
            $table->bigInteger('product_id');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_image_products');
    }
};
