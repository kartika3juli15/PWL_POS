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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('pegawai_id'); // Primary key 
            $table->unsignedBigInteger('level_id'); // foreign key
            $table->string('username')->unique();
            $table->string('nama'); 
            $table->string('no_ktp', 16)->unique(); // Mengubah tipe data KTP menjadi VARCHAR(16)
            $table->string('telpon'); 
            $table->text('alamat'); 
            $table->enum('jenis_kelamin', ['L', 'P']); 
            $table->string('password'); 
            $table->timestamps(); // Kolom created_at dan updated_at

            // Foreign key constraint untuk menghubungkan id_level dengan tabel levels
            $table->foreign('level_id')->references('level_id')->on('level')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
