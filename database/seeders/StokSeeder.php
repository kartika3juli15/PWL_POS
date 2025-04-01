<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stok')->insert([
            [
                'Pt_id' => 1, 
                'tgl_stok' => now(), 
                'jumlah' => 100, 
            ],
            [
                'Pt_id' => 2, 
                'tgl_stok' => now(), 
                'jumlah' => 150, 
            ],
            [
                'Pt_id' => 1,
                'tgl_stok' => now(), 
                'jumlah' => 200, 
            ],
        ]);
    }
}
