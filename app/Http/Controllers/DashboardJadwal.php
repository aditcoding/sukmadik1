<?php

namespace App\Http\Controllers;
use App\Models\DetailJadwal;


class DashboardJadwal extends Controller
{
    public function index()
    {
        $jadwals = DetailJadwal::with([
            'dosen' => function($q) {
                $q->where('level', 1); //Sesuaikno dewe sementara tak gae level 1 gae dosen
            },
            'matkul',
            'jadwal'
        ])->get();
        return view('dashboard.welcome', compact('jadwals'));
    }
}
