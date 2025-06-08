<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class golongan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('golongans')->insert([
            [
                'id_golongan' => '1',
                'nama_golongan' => 'A',
                'id_semester' => '2',
            ],
            [
                'id_golongan' => '2',
                'nama_golongan' => 'B',
                'id_semester' => '2',
            ],
        ]);
    }
}
