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
        Schema::create('warranty_services', function (Blueprint $table) {
            $table->bigInteger('warranty_service_id');
            $table->string('warranty_service_name');
            $table->bigInteger('warranty_id');
            $table->primary('warranty_service_id');
            $table->foreign('warranty_id')->references('id')->on('warranties')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warranty_services');
    }
};
