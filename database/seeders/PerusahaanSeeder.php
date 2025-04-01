<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perusahaan')->insert([
            [
                'Nama_PT' => 'PT. JCO',
                'produk' => 'Donat',
                'harga_awal' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_PT' => 'PT. Harvest',
                'produk' => 'Cake',
                'harga_awal' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_PT' => 'PT. Harvest',
                'produk' => 'Croissant',
                'harga_awal' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}