@extends('dosen.layout')

@section('dsnsection')
    <!-- Konten utama -->
    <h1>Beranda</h1>
    <!-- Isi konten untuk halaman Dosen bisa ditambahkan di sini -->

    <div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Jadwal</h4>
    <div>
      <label for="date" class="form-label me-2">Default Date (Today)</label>
      <input type="date" class="form-control" id="date" style="width: auto; display: inline-block;">
    </div>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>Hari</th>
          <th>Jam</th>
          <th>Jadwal Kuliah</th>
          <th>Jadwal Bimbingan</th>
          <th>Mahasiswa</th>
          <th>Presensi</th>
          <th>Aproval</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Senin</td>
          <td>08.00-09.00</td>
          <td>-</td>
          <td>-</td>
          <td>Akbar</td>
          <td>-</td>
          <td>Tidak</td>
        </tr>
        <tr>
          <td>Senin</td>
          <td>09.00-10.00</td>
          <td>-</td>
          <td>Ada</td>
          <td>Fadli</td>
          <td>-</td>
          <td>Ya</td>
        </tr>
        <tr>
          <td>Senin</td>
          <td>10.00-11.00</td>
          <td>Jaringan Komputer</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Senin</td>
          <td>11.00-12.00</td>
          <td>Jaringan Komputer</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


  </div>
</div>

<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLogoutLabel">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <a href="logout.php" class="btn btn-danger">Iya</a>
      </div>
    </div>
  </div>
</div>

@endsection