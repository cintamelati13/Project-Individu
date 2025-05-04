<?php
require_once 'dbkoneksi.php';

// Ambil semua data dari tabel pasien
$sql = "SELECT * FROM pasien";
$rs = $dbh->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data_pasien.php" class="nav-link active">
                            <i class="nav-icon fas fa-user-injured"></i>
                            <p>Data Pasien</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pemeriksaan_pasien.php" class="nav-link">
                            <i class="nav-icon fas fa-notes-medical"></i>
                            <p>Pemeriksaan Pasien</p>
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
                <h1>Data Pasien</h1>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <a href="form_pasien.php" class="btn btn-primary mb-3">Tambah Pasien</a>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Pasien</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($rs as $row) {
                                    echo "<tr>
                                        <td>$no</td>
                                        <td>{$row['kode']}</td>
                                        <td>{$row['nama']}</td>
                                        <td>{$row['alamat']}</td>
                                        <td>{$row['email']}</td>
                                        <td>
                                            <a href='form_pasien.php?id={$row['id']}' class='btn btn-sm btn-warning'><i class='fas fa-edit'></i> Edit</a>
                                            <a href='proses_pasien.php?hapus_id={$row['id']}' 
                                               onclick=\"return confirm('Yakin ingin menghapus data ini?')\" 
                                               class='btn btn-sm btn-danger'><i class='fas fa-trash'></i> Hapus</a>
                                        </td>
                                    </tr>";
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
