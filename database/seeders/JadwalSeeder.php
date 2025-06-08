<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwals')->insert([
            ['hari' => 'Senin', 'id_semester' => '1' ],
            ['hari' => 'Selasa', 'id_semester' => '1' ],
            ['hari' => 'Rabu', 'id_semester' => '1' ],
            ['hari' => 'Kamis', 'id_semester' => '1' ],
            ['hari' => 'Jumat', 'id_semester' => '1' ],

            ['hari' => 'Senin', 'id_semester' => '2' ],
            ['hari' => 'Selasa', 'id_semester' => '2' ],
            ['hari' => 'Rabu', 'id_semester' => '2' ],
            ['hari' => 'Kamis', 'id_semester' => '2' ],
            ['hari' => 'Jumat', 'id_semester' => '2' ],

            ['hari' => 'Senin', 'id_semester' => '3' ],
            ['hari' => 'Selasa', 'id_semester' => '3' ],
            ['hari' => 'Rabu', 'id_semester' => '3' ],
            ['hari' => 'Kamis', 'id_semester' => '3' ],
            ['hari' => 'Jumat', 'id_semester' => '3' ],

            ['hari' => 'Senin', 'id_semester' => '4' ],
            ['hari' => 'Selasa', 'id_semester' => '4' ],
            ['hari' => 'Rabu', 'id_semester' => '4' ],
            ['hari' => 'Kamis', 'id_semester' => '4' ],
            ['hari' => 'Jumat', 'id_semester' => '4' ],

        ]);
    }
}
