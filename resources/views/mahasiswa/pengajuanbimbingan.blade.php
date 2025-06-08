@extends('mahasiswa.layout')

@section('mhssection')

  <!-- Konten utama -->
<div class="container mt-5">
<h3 class="mb-4">Pengajuan Jadwal Bimbingan</h3>
<form>
  <!-- NIM -->
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
  </div>
  <!-- Nama -->
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
  </div>
  <!-- Kampus -->
  <div class="mb-3">
    <label for="kampus" class="form-label">Kampus</label>
    <input type="text" class="form-control" id="kampus" placeholder="Masukkan Lokasi Kampus">
  </div>
  <!-- Jurusan -->
  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select class="form-select" id="jurusan">
      <option selected>Pilih Jurusan</option>
      <option value="1">Teknik Informatika</option>
      <option value="2">Sistem Informasi</option>
      <option value="3">Manajemen Informatika</option>
    </select>
  </div>
  <!-- Prodi -->
  <div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <select class="form-select" id="prodi">
      <option selected>Pilih Prodi</option>
      <option value="1">D3</option>
      <option value="2">S1</option>
      <option value="3">S2</option>
    </select>
  </div>
  <!-- Dosen -->
  <div class="mb-3">
    <label for="dosen" class="form-label">Dosen</label>
    <select class="form-select" id="dosen">
      <option selected>Pilih Dosen</option>
      <option value="1">Dosen 1</option>
      <option value="2">Dosen 2</option>
      <option value="3">Dosen 3</option>
    </select>
  </div>
  <!-- Tanggal -->
  <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="tanggal">
  </div>
  <!-- Keperluan -->
  <div class="mb-3">
    <label for="keperluan" class="form-label">Keperluan</label>
    <textarea class="form-control" id="keperluan" rows="3" placeholder="Tulis Keperluan"></textarea>
  </div>
  <!-- Slot Tersedia -->
  <div class="mb-3">
    <label for="slot" class="form-label">Pilih Slot Tersedia</label>
    <select class="form-select" id="slot">
      <option selected>Pilih</option>
      <option value="1">Pagi</option>
      <option value="2">Siang</option>
      <option value="3">Sore</option>
    </select>
  </div>
  <!-- Tombol Tambahkan -->
  <div class="d-grid">
    <button type="submit" class="btn btn-primary">Tambahkan</button>
  </div>
</form>
</div>

</div>
</div>

@endsection