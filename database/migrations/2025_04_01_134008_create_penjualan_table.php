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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id('penjualan_id'); // Primary key
            $table->unsignedBigInteger('stok_id'); // Foreign key 
            $table->unsignedBigInteger('batas_id'); // Foreign key 
            $table->integer('harga_jual'); 
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('stok_id')->references('stok_id')->on('stok')->onDelete('cascade');
            $table->foreign('batas_id')->references('batas_id')->on('batas_produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};