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
        Schema::create('batas_produk', function (Blueprint $table) {
            $table->id('batas_id'); // Primary key
            $table->integer('restock'); // waktu shift restock perusahaan 
            $table->decimal('diskon', 5, 2); // Diskon tiap shift restock
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batas_produk');
    }
};
