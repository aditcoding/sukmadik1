<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Kampus;

class DashboardController extends Controller
{
    public function index(){
    $kampusId = session('kampus_id');

    if (!$kampusId) {
        return redirect('/')->with('error', 'Silakan pilih kampus terlebih dahulu.');
    }

    $kampus = Kampus::findOrFail($kampusId);

    // Ambil data berdasarkan kampus_id, misalnya daftar dosen bimbingan
    $dosen = $kampus->dosen ?? []; // contoh, kalau relasi dosen sudah ada

    return view('crashsite', compact('kampus', 'dosen'));
}}
