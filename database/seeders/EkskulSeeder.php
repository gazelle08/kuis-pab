<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ekskuls')->insert([
            ['nama_ekskul' => 'Ekskul 1', 'pembina' => 'Pembina 1', 'jadwal' => 'Senin 14:00 - 16:00', 'ruangan' => 'Ruang 1', 'kuota' => 30, 'deskripsi' => 'Deskripsi Ekskul 1'],
            ['nama_ekskul' => 'Ekskul 2', 'pembina' => 'Pembina 2', 'jadwal' => 'Rabu 14:00 - 16:00', 'ruangan' => 'Ruang 2', 'kuota' => 25, 'deskripsi' => 'Deskripsi Ekskul 2'],
            ['nama_ekskul' => 'Ekskul 3', 'pembina' => 'Pembina 3', 'jadwal' => 'Jumat 14:00 - 16:00', 'ruangan' => 'Ruang 3', 'kuota' => 20, 'deskripsi' => 'Deskripsi Ekskul 3'],
        ]);
    }
}
