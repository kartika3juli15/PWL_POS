<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            [
                'level_id' => 1, 
                'username' => 'Mongmong',
                'nama' => 'Kim Seungmin',
                'no_ktp' => '0012345678901234',
                'telpon' => '081234567890',
                'alamat' => 'Jl. Seoul No. 123',
                'jenis_kelamin' => 'L',
                'password' => Hash::make('ADM123'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2, 
                'username' => 'Foive',
                'nama' => 'BangChan',
                'no_ktp' => '0098765432109876',
                'telpon' => '082345678901',
                'alamat' => 'Jl. JYP No. 45',
                'jenis_kelamin' => 'L',
                'password' => Hash::make('MNG123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
