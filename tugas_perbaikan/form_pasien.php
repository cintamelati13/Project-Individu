<?php
require_once 'dbkoneksi.php';

$id = $_GET['id'] ?? '';  // Mengambil ID dari URL jika ada
$pasien = [];

if (!empty($id)) {
    // Ambil data pasien berdasarkan ID jika ada
    $sql = "SELECT * FROM pasien WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $pasien = $stmt->fetch();
}

// Menyiapkan nilai default untuk setiap field
$kode = $pasien['kode'] ?? '';
$nama = $pasien['nama'] ?? '';
$tmp_lahir = $pasien['tmp_lahir'] ?? '';
$tgl_lahir = $pasien['tgl_lahir'] ?? '';
$gender = $pasien['gender'] ?? '';
$kelurahan = $pasien['kelurahan'] ?? '';
$email = $pasien['email'] ?? '';
$alamat = $pasien['alamat'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= empty($id) ? 'Tambah' : 'Edit' ?> Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <h1><?= empty($id) ? 'Tambah' : 'Edit' ?> Data Pasien</h1>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="proses_pasien.php">
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" name="kode" class="form-control" value="<?= $kode ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" class="form-control" value="<?= $tmp_lahir ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?= $tgl_lahir ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="L" <?= $gender == 'L' ? 'checked' : '' ?>> Laki-laki
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="P" <?= $gender == 'P' ? 'checked' : '' ?>> Perempuan
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control" value="<?= $kelurahan ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control"><?= $alamat ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $email ?>">
                        </div>

                        <input type="hidden" name="id" value="<?= $id ?>">  <!-- Menyimpan ID untuk proses update -->
                        <input type="hidden" name="proses" value="<?= empty($id) ? 'Simpan' : 'Update' ?>">

                        <button type="submit" class="btn btn-success"><?= empty($id) ? 'Simpan' : 'Update' ?></button>
                        <a href="data_pasien.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
