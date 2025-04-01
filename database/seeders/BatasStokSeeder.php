<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatasProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('batas_produk')->insert([
            [
                'restock' => 1, //setiap 1 shift dihitung tiap 6 jam
                'diskon' => 0.20, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restock' => 2, //shift 2
                'diskon' => 0.30, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restock' => 3, //shift 3
                'diskon' => 0.40, 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
