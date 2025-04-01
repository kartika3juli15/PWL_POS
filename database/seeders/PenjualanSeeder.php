<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        DB::table('penjualan')->insert([
            [
                'penjualan_id' => 1,
                'stok_id' => 2, 
                'batas_id' => 2, 
                'harga_jual' => 21000, 
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
