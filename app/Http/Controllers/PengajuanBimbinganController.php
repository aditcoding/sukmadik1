<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengajuanBimbingan;
use App\Models\jurusan;
use App\Models\prodi;
use App\Models\user;

class PengajuanBimbinganController extends Controller
{
    // Method untuk menampilkan form
    public function create()
    {
        $jurusan = jurusan::all();
        $prodi = prodi::all();
        $dosen = user::where('level', 1)->get();

        return view('mahasiswa.pengajuanbimbingan', compact('jurusan', 'prodi', 'dosen'));
    }
    // Method untuk menyimpan data
    public function store(Request $request)
    {
        // Validasi data kalau perlu
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'tanggal' => 'required|date',
            'id_user' => 'required|integer', // id dosen
            'id_kampus' => 'required|integer',
            'id_jurusan' => 'required|integer',
            'id_prodi' => 'required|integer',
            'id_semester' => 'required|integer',
            'catatan' => 'nullable|string',
            'status' => 'nullable|string',
            'nama_pengajuan' => 'nullable|string',
        ]);

        // Simpan ke database
        $pengajuan = new PengajuanBimbingan(); // pastikan model ini sudah ada dan terkait tabel pengajuan_bimbingans

        $pengajuan->nama_pengajuan = $request->input('nama_pengajuan', 'Pengajuan Bimbingan');
        $pengajuan->nama = $request->nama;
        $pengajuan->nim = $request->nim;
        $pengajuan->catatan = $request->catatan;
        $pengajuan->tanggal = $request->tanggal;
        $pengajuan->status = $request->status ?? 'pending'; // misal default pending
        $pengajuan->id_user = $request->id_user;
        $pengajuan->id_kampus = $request->id_kampus;
        $pengajuan->id_jurusan = $request->id_jurusan;
        $pengajuan->id_prodi = $request->id_prodi;
        $pengajuan->id_semester = $request->id_semester;

        $pengajuan->save();

        // Redirect ke halaman lain misal list pengajuan dengan pesan sukses
        return redirect()->route('mahasiswa.pengajuanbimbingan')->with('success', 'Pengajuan berhasil disimpan!');
    }
}
