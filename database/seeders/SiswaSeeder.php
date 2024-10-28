<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            ['id' => 1, 'nama' => 'Rut', 'kelas' => '10A', 'NIS' => '12345', 'tanggal_lahir' => '2006-01-01', 'alamat' => 'Alamat 1', 'no_hp' => '081234567890', 'email' => 'siswa1@example.com'],
            ['id' => 2, 'nama' => 'Sarah', 'kelas' => '10B', 'NIS' => '12346', 'tanggal_lahir' => '2006-02-01', 'alamat' => 'Alamat 2', 'no_hp' => '081234567891', 'email' => 'siswa2@example.com'],
            ['id' => 3, 'nama' => 'Simon', 'kelas' => '11A', 'NIS' => '12347', 'tanggal_lahir' => '2005-03-01', 'alamat' => 'Alamat 3', 'no_hp' => '081234567892', 'email' => 'siswa3@example.com'],
            ['id' => 4, 'nama' => 'Petrus', 'kelas' => '11B', 'NIS' => '12348', 'tanggal_lahir' => '2005-04-01', 'alamat' => 'Alamat 4', 'no_hp' => '081234567893', 'email' => 'siswa4@example.com'],
            ['id' => 5, 'nama' => 'Andreas', 'kelas' => '12A', 'NIS' => '12349', 'tanggal_lahir' => '2004-05-01', 'alamat' => 'Alamat 5', 'no_hp' => '081234567894', 'email' => 'siswa5@example.com'],
        ]);
    }
}
