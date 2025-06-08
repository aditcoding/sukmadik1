<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        DB::table('matkuls')->insert([
            ['nama_matkul' => 'Workshop Mobile Framework B',
             'id_user' => '5',], //1
            ['nama_matkul' => 'Workshop Web Framework B',
             'id_user' => '4',], //2
             ['nama_matkul' => 'Workshop Mobile Framework A',
             'id_user' => '7',], //3
            ['nama_matkul' => 'Workshop Web Framework A',
             'id_user' => '4',], //4
             ['nama_matkul' => 'Manajemen Kualitas Perangkat Lunak',
             'id_user' => '10',], //5
            ['nama_matkul' => 'Perawatan Perangkat Lunak',
             'id_user' => '8',], //6
             ['nama_matkul' => 'Pengujian Perangkat Lunak',
             'id_user' => '4',], //7
             ['nama_matkul' => 'Literasi Digital',
             'id_user' => '7',], //8
             ['nama_matkul' => 'Kewirausahaan',
             'id_user' => '9',], //9

        ]);
    }
}