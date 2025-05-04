<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Aplikasi Puskesmas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
      <span class="brand-text font-weight-light">Web Puskesmas</span>
    </a>
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
          <!-- Dashboard -->
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Data Pasien -->
          <li class="nav-item">
            <a href="data_pasien.php" class="nav-link">
              <i class="nav-icon fas fa-user-injured"></i>
              <p>Data Pasien</p>
            </a>
          </li>

          <!-- Pemeriksaan Pasien -->
          <li class="nav-item">
            <a href="pemeriksaan_pasien.php" class="nav-link">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>Pemeriksaan Pasien</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="paramedis.php" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>Paramedis</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="kelurahan.php" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>Kelurahan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="unit_kerja.php" class="nav-link">
              <i class="nav-icon fas fa-hospital"></i>
              <p>Unit Kerja</p>
            </a>
          </li>


        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <h1>Dashboard</h1>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Selamat datang di sistem informasi Puskesmas.</p>
        <p>Silakan pilih menu di sebelah kiri untuk mengelola data pasien dan lainnya.</p>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer">
    <strong>&copy; 2025 Puskesmas Digital</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

</div>

<!-- JS AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
