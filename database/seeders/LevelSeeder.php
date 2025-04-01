<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('level')->insert([
            [
                'kode_jabatan' => 'ADM',
                'jabatan' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jabatan' => 'MNG',
                'jabatan' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jabatan' => 'STF',
                'jabatan' => 'Staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
