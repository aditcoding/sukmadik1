<?php

use App\Http\Controllers\DashboardJadwal;
use App\Http\Controllers\PengajuanBimbinganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LandingController;

//Route::post('/pilih-kampus', [LandingController::class, 'pilihKampus'])->name('pilih.kampus');
//Route::get('/dashboard', function () {
//    return view('dashboard.welcome');
//})->name('dashboard.welcome');
Route::get('/', [DashboardJadwal::class, 'index'])->name('dashboard.jadwal');
//Welcome

//Route::get('/dashboard', function () {
//    return view('dashboard.welcome');
//});

//Route::get('/', function () {
//    return view('dashboard.welcome');
//});

Route::get('/pengajuan-bimbingan', [PengajuanBimbinganController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan-bimbingan', [PengajuanBimbinganController::class, 'store'])->name('pengajuan.store');

//Admin
Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/admin/d', function () {
    return view('admin.dashboard');
});

Route::get('/admin/ds', function () {
    return view('admin.dosen');
});

Route::get('/admin/jd', function () {
    return view('admin.jadwal');
});

Route::get('/admin/jm', function () {
    return view('admin.jam');
});

Route::get('/admin/ju', function () {
    return view('admin.jurusan');
});

Route::get('/admin/k', function () {
    return view('admin.kampus');
});

Route::get('/admin/m', function () {
    return view('admin.matkul');
});

Route::get('/admin/pe', function () {
    return view('admin.pengguna');
});

Route::get('/admin/pr', function () {
    return view('admin.prodi');
});




//Dosen
Route::get('/dosen', function () {
    return view('dosen.login');
});

Route::get('/dosen/p', function () {
    return view('dosen.presensi');
});

Route::get('/dosen/b', function () {
    return view('dosen.bimbingan');
});

Route::get('/dosen/d', function () {
    return view('dosen.dashboard');
});


// Mahasiswa
Route::get('/mhs/', function () {
    return view('mahasiswa.pengajuanbimbingan');
});

Route::get('/mhs/s', function () {
    return view('mahasiswa.ketersediaansesi');
});

Route::get('/mhs/j', function () {
    return view('mahasiswa.jadwalbimbingan');
});








Route::get('/t', function () {
    return view('crashsite');
});
