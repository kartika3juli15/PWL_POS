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
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->id('detail_id'); //Primary key
            $table->unsignedBigInteger('penjualan_id'); // Foreign key
            $table->unsignedBigInteger('pegawai_id'); // Foreign key 
            $table->unsignedBigInteger('pembeli_id'); // Foreign key 
            $table->dateTime('tanggal_transaksi'); 
            $table->integer('jumlah'); 
            $table->integer('total_harga'); 
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('penjualan_id')->references('penjualan_id')->on('penjualan')->onDelete('cascade');
            $table->foreign('pegawai_id')->references('pegawai_id')->on('pegawai')->onDelete('cascade');
            $table->foreign('pembeli_id')->references('pembeli_id')->on('pembeli')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penjualan');
    }
};