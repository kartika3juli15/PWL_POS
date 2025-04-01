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
        Schema::create('stok', function (Blueprint $table) {
            $table->id('stok_id'); // Primary key
            $table->unsignedBigInteger('Pt_id'); // Foreign key ke tabel Perusahaan
            $table->date('tgl_stok'); // Tanggal stok masuk
            $table->integer('jumlah'); // Jumlah stok
            $table->timestamps();

            //definisi foreign key
            $table->foreign('Pt_id')->references('Pt_id')->on('perusahaan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok');
    }
};
