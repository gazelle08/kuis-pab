<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaEkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa_ekskuls')->insert([
            ['siswa_id' => 1, 'ekskul_id' => 1, 'tanggal_daftar' => '2024-01-01', 'status' => 'aktif'],
            ['siswa_id' => 2, 'ekskul_id' => 2, 'tanggal_daftar' => '2024-01-02', 'status' => 'aktif'],
            ['siswa_id' => 3, 'ekskul_id' => 3, 'tanggal_daftar' => '2024-01-03', 'status' => 'aktif'],
            ['siswa_id' => 4, 'ekskul_id' => 1, 'tanggal_daftar' => '2024-01-04', 'status' => 'aktif'],
            ['siswa_id' => 5, 'ekskul_id' => 2, 'tanggal_daftar' => '2024-01-05', 'status' => 'aktif'],
        ]);
    }
}
