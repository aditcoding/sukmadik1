<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\detail_jadwal_absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JadwalAbsensiController extends Controller
{
    // Ambil semua data absensi
    public function index()
{
    $data = detail_jadwal_absensi::all();

    if ($data->isEmpty()) {
        return response()->json([
            'message' => 'Data absensi kosong',
            'data' => [],
            'status' => true
        ], 200);
    }

    // Modifikasi data untuk tambahkan URL lengkap gambar
    $data->transform(function ($item) {
        $item->image = $item->image ? asset('storage/' . $item->image) : null;
        return $item;
    });

    return response()->json([
        'message' => 'Data absensi ditemukan',
        'data' => $data,
        'status' => true
    ], 200);
}

    // Simpan data absensi baru
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:10248',
            'status' => 'required|in:hadir,pulang',
            'id_user' => 'required|exists:users,id_user', 
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'jam_dan_tanggal' => 'nullable|date',
        ]);

        // Simpan file ke storage/app/public/absensi
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('absensi', $filename, 'public');
            $validated['image'] = $path;
        }

        // Set waktu absensi
        $validated['jam_dan_tanggal'] = now();

        // Simpan ke database
        $absensi = detail_jadwal_absensi::create($validated);

        return response()->json([
            'message' => 'Data absensi berhasil ditambahkan',
            'data' => $absensi,
            'status' => true
        ], 201);
    }

    // Tampilkan data absensi berdasarkan ID
    public function show($id)
{
    $absensi = detail_jadwal_absensi::find($id);

    if (!$absensi) {
        return response()->json([
            'message' => 'Data absensi tidak ditemukan',
            'data' => null,
            'status' => false
        ], 404);
    }

    $absensi->image = $absensi->image ? asset('storage/' . $absensi->image) : null;

    return response()->json([
        'message' => 'Data absensi ditemukan',
        'data' => $absensi,
        'status' => true
    ], 200);
}


    // Update data absensi
    public function update(Request $request, $id)
    {
        $absensi = detail_jadwal_absensi::find($id);

        if (!$absensi) {
            return response()->json([
                'message' => 'Data absensi tidak ditemukan',
                'status' => false
            ], 404);
        }

        $validated = $request->validate([
            'status' => 'sometimes|in:hadir,pulang',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($absensi->image && Storage::disk('public')->exists($absensi->image)) {
                Storage::disk('public')->delete($absensi->image);
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('absensi', $filename, 'public');
            $validated['image'] = $path;
        }

        $absensi->update($validated);

        return response()->json([
            'message' => 'Data absensi berhasil diupdate',
            'data' => $absensi,
            'status' => true
        ], 200);
    }

    // Hapus data absensi
    public function destroy($id)
    {
        $absensi = detail_jadwal_absensi::find($id);

        if (!$absensi) {
            return response()->json([
                'message' => 'Data absensi tidak ditemukan',
                'status' => false
            ], 404);
        }

        // Hapus file gambar jika ada
        if ($absensi->image && Storage::disk('public')->exists($absensi->image)) {
            Storage::disk('public')->delete($absensi->image);
        }

        $absensi->delete();

        return response()->json([
            'message' => 'Data absensi berhasil dihapus',
            'status' => true
        ], 200);
    }
}
