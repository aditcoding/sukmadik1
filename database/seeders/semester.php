<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class semester extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('semesters')->insert([        
            ['semester' => '2','ajaran' => '2024',],
            ['semester' => '4','ajaran' => '2023',],
            ['semester' => '6','ajaran' => '2022',],
            ['semester' => '8','ajaran' => '2021',],
        ]);
    }
}
