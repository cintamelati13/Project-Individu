<?php
$host = 'localhost';
$db   = 'dbpuskesmas'; 
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// DSN (Data Source Name) untuk koneksi ke MySQL
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Opsi koneksi PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Membuat koneksi ke database
    $dbh = new PDO($dsn, $user, $pass, $options);
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    // Jika koneksi gagal
    die("Koneksi gagal: " . $e->getMessage());
}
?>
