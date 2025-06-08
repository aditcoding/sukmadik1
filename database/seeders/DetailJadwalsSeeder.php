<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailJadwalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('detail_jadwals')->insert([
            [
                'Start' => '08:00:00',
                'End' => '12:00:00',
                'SKS' => 4,
                'id_user' => 2, // Pastikan user dengan ID 1 ada di tabel 'users'
                'id_matkul' => 2, // Pastikan matkul dengan ID 1 ada di tabel 'matkuls'
                'id_jadwal' => 1, // Pastikan jadwal dengan ID 1 ada di tabel 'jadwals'
            ],
            [
                'Start' => '13:00:00',
                'End' => '17:00:00',
                'SKS' => 4,
                'id_user' => 2, // Pastikan user dengan ID 2 ada
                'id_matkul' => 1, // Pastikan matkul dengan ID 2 ada
                'id_jadwal' => 1, // Menggunakan jadwal yang sama
            ],
        ]);
    }
}
