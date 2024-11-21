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
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->string('screen_size');
            $table->string('screen_tech');
            $table->string('screen_resolution');
            $table->string('chipset');
            $table->string('gpu');
            $table->string('nfc');
            $table->string('sim');
            $table->string('internet');
            $table->string('ram');
            $table->string('memory');
            $table->string('weight');
            $table->string('wifi');
            $table->string('cpu');
            $table->string('bluetooth');
            $table->bigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications');
    }
};
