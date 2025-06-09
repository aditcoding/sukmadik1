<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sidebar Polije</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid #dee2e6;
    }

    .sidebar .nav-link {
      color: #333;
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 0;
    }

    .sidebar .nav-link:hover {
      background-color: #f8f9fa;
    }

    .sidebar img.logo {
      width: 60px;
      height: 60px;
      object-fit: contain;
      border-radius: 0; /* Hapus frame/bulat */
    }

    .sidebar img.icon {
      width: 20px;
      height: 20px;
    }

    .sidebar .branding {
      margin-bottom: 30px; /* Jarak logo ke daftar menu */
    }

    .sidebar ul.nav > li + li {
      margin-top: 5px; /* Jarak antar item menu */
    }


  </style>
</head>
<body>

<div class="d-flex">
  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3">
    <div class="d-flex align-items-center mb-4">
      <img src="../img/logopolije.png" alt="Logo" class="logo me-2">
      <span class="fw-semibold small">Politeknik Negeri Jember</span>
    </div>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <img src="../img/home.svg" alt="Beranda" class="icon"> Dashboard
            </a>
          </li>
      <li class="nav-item">
        <a href="/pengajuan-bimbingan" class="nav-link">
          <img src="../img/mhstab.svg" alt="Beranda" class="icon"> Mahasiswa
        </a>
      </li>
      <li>
        <a href="/dosen" class="nav-link">
          <img src="../img/dosentab.svg" alt="Dosen" class="icon"> Dosen
        </a>
      </li>
      <li>
        <a href="/admin" class="nav-link">
          <img src="../img/admintab.svg" alt="Kampus" class="icon"> Admin
        </a>
      </li>

    </ul>
  </div>

<div class="flex-grow-1 p-3">

    <!-- Konten utama -->
    <!-- Isi konten untuk halaman Dosen bisa ditambahkan di sini -->
    @yield('dashboardsection')

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
