<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengajuan_bimbingans')->insert([
            ['Nama_Pengajuan' => 'Hafizh','NIM' => 'E41231975','Catatan' => 'Bimbingan TA','Tanggal' => '2025-05-30','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Dinda','NIM' => 'E41231346','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-02','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Ferdi','NIM' => 'E41231827','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-05','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '1'],
['Nama_Pengajuan' => 'Naufal','NIM' => 'E341231423','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-08','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Alil','NIM' => 'E41231469','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-11','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Nabila','NIM' => 'E41231835','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-14','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Reva','NIM' => 'E41232446','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-17','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Rino','NIM' => 'E41231844','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-20','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Rizky','NIM' => 'E41231055','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-23','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Ratih','NIM' => 'E41232082','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-26','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Surya','NIM' => 'E41231074','Catatan' => 'Bimbingan TA','Tanggal' => '2025-06-29','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Dimas','NIM' => 'E41231637','Catatan' => 'Bimbingan TA','Tanggal' => '2025-07-02','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Dhani','NIM' => 'E41231701','Catatan' => 'Bimbingan TA','Tanggal' => '2025-07-05','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],
['Nama_Pengajuan' => 'Muzaka','NIM' => 'E41232040','Catatan' => 'Bimbingan TA','Tanggal' => '2025-07-08','Status' => 'Ajukan','id_user' => '8','id_kampus' => '4','id_jurusan' => '1','id_prodi' => '1','id_semester' => '4'],

       ]);

    }
}
