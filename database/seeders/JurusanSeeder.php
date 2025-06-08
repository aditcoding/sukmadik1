<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('jurusans')->insert([        
            ['nama_jurusan' => 'Teknologi Informasi', 'id_kampus' => 4],
            ['nama_jurusan' => 'Manajemen Agribisnis', 'id_kampus' => 4],
        ]);
        
    }
}
