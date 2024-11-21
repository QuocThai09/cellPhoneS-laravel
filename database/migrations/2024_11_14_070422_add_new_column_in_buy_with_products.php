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
        Schema::table('buy_with_products', function (Blueprint $table) {
            $table->string('buy_with_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buy_with_products', function (Blueprint $table) {
            $table->dropColumn('buy_with_info');
        });
    }
};
