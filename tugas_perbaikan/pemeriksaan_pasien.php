<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dbpuskesmas"; 

$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "<h2>Data Pemeriksaan Pasien</h2>";
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Tanggal Periksa</th>";
echo "<th>Berat (kg)</th>";
echo "<th>Tinggi (cm)</th>";
echo "<th>Tensi</th>";
echo "<th>Keterangan</th>";
echo "<th>ID Pasien</th>";
echo "<th>ID Dokter</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$sql = "SELECT id, tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id FROM periksa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $no = 1;
    // Output data setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row["tanggal"]. "</td>";
        echo "<td>" . $row["berat"]. "</td>";
        echo "<td>" . $row["tinggi"]. "</td>";
        echo "<td>" . $row["tensi"]. "</td>";
        echo "<td>" . $row["keterangan"]. "</td>";
        echo "<td>" . $row["pasien_id"]. "</td>";
        echo "<td>" . $row["dokter_id"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>Tidak ada data pemeriksaan.</td></tr>";
}

echo "</tbody>";
echo "</table>";

mysqli_close($conn);
?>