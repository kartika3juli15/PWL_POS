<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_penjualan')->insert([
            [
                'penjualan_id' => 1, 
                'pegawai_id' => 1, 
                'pembeli_id' => 1, 
                'tanggal_transaksi' => now(),
                'jumlah' => 3,
                'total_harga' => 63000, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
