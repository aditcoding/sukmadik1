<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('prodis')->insert([        
            ['nama_prodi' => 'Teknik Informatika', 'id_jurusan' => 1],
            ['nama_prodi' => 'Manajemen Agroindustri', 'id_jurusan' => 2],
        ]);
    }
}
