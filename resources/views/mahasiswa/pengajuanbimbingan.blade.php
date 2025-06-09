@extends('dashboard.layout')

@section('dashboardsection')
<form action="{{ route('pengajuan.store') }}" method="POST">
    @csrf

    <!-- NIM -->
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM">
    </div>

    <!-- Nama -->
    <div class="mb-3">
        <label for="nama_pengajuan" class="form-label">Nama Pengajuan</label>
        <input type="text" name="nama_pengajuan" class="form-control" id="nama_pengajuan" placeholder="Masukkan Nama Pengajuan">
    </div>

    <div class="mb-3">
        <label for="id_semester" class="form-label">Semester</label>
        <select class="form-select" name="id_semester" id="id_semester">
            <option selected disabled>Pilih Semester</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="3">Semester 4</option>
            <option value="3">Semester 5</option>
            <option value="3">Semester 6</option>
            <option value="3">Semester 7</option>
            <option value="3">Semester 8</option>
        </select>
    </div>

    <!-- Kampus -->
    <div class="mb-3">
        <label for="kampus" class="form-label">Kampus</label>
        <input type="text" name="kampus" class="form-control" id="kampus" placeholder="Masukkan Lokasi Kampus">
    </div>

    <!-- Jurusan -->
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <select class="form-select" name="jurusan" id="jurusan">
            <option selected disabled>Pilih Jurusan</option>
            @foreach($jurusan as $j)
                <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
            @endforeach
        </select>
    </div>

    <!-- Prodi -->
    <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <select class="form-select" name="prodi" id="prodi">
            <option selected disabled>Pilih Prodi</option>
            @foreach($prodi as $item)
                <option value="{{ $item->id }}">{{ $item->nama_prodi }}</option>
            @endforeach
        </select>
    </div>

    <!-- Dosen -->
    <div class="mb-3">
        <label for="dosen" class="form-label">Dosen</label>
        <select class="form-select" id="dosen" name="id_user" required>
            <option selected disabled>Pilih Dosen</option>
            @foreach ($dosen as $dsn)
                <option value="{{ $dsn->id }}">{{ $dsn->nama }}</option>
            @endforeach
        </select>
    </div>

    <!-- Tanggal -->
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" id="tanggal">
    </div>

    <!-- Keperluan -->
    <div class="mb-3">
        <label for="keperluan" class="form-label">Keperluan</label>
        <textarea name="keperluan" class="form-control" id="keperluan" rows="3" placeholder="Tulis Keperluan"></textarea>
    </div>

    <!-- Slot Tersedia -->
    <div class="mb-3">
        <label for="slot" class="form-label">Pilih Slot Tersedia</label>
        <select class="form-select" name="slot" id="slot">
            <option selected disabled>Pilih</option>
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
@endsection
