<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DSesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              DB::table('detail_sesis')->insert([
            [
                'id_sesi' => '46',
                'id_pengajuan' => null,
                'id_matkul' => '2',
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '47',
                'id_pengajuan' => null,
                'id_matkul' => '2',
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '48',
                'id_pengajuan' => null,
                'id_matkul' => '2',
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '49',
                'id_pengajuan' => null,
                'id_matkul' => '2',
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '50',
                'id_pengajuan' => null,
                'id_matkul' => null,
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '51',
                'id_pengajuan' => null,
                'id_matkul' => '1',
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '52',
                'id_pengajuan' => null,
                'id_matkul' => '1',
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '53',
                'id_pengajuan' => null,
                'id_matkul' => '1',
                'id_golongan' => '2',
            ],
            [
                'id_sesi' => '54',
                'id_pengajuan' => null,
                'id_matkul' => '1',
                'id_golongan' => '2',
            ],
        ]);
 
    }
}
