<?php

namespace App\Http\Controllers;
use App\Models\DetailJadwal;


class DashboardJadwal extends Controller
{
    public function index()
    {
        // Ambil data dari tabel detailJadwal beserta relasi ke matkul dan dosen
        $jadwals = DetailJadwal::with(['matkul', 'dosen'])->get();
        return view('dashboard.welcome', compact('jadwals'));
    }
}
