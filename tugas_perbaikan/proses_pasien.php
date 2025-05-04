<?php
require_once 'dbkoneksi.php';
echo "Koneksi berhasil!";

// Tangkap proses
$proses = $_POST['proses'] ?? $_GET['proses'] ?? '';
$id = $_POST['id'] ?? $_GET['id'] ?? null;

if ($proses == "Simpan" || $proses == "Update") {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    if ($proses == "Simpan") {
        $sql = "INSERT INTO pasien (kode, nama, alamat, email) VALUES (?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$kode, $nama, $alamat, $email]);
    } else {
        $sql = "UPDATE pasien SET kode=?, nama=?, alamat=?, email=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$kode, $nama, $alamat, $email, $id]);
    }

    header('Location: data_pasien.php');
    exit;
} elseif ($proses == "Hapus" && $id) {
    $sql = "DELETE FROM pasien WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header('Location: data_pasien.php');
    exit;
} else {
    echo "Permintaan tidak valid.";
}
