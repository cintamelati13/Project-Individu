<?php
// Koneksi ke database (ganti dengan informasi koneksi Anda)
$host = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = "";     // Ganti dengan password database Anda
$database = "dbpuskesmas"; // Ganti dengan nama database Anda

$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paramedis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    </head>
<body>
    <div class="container mt-5">
        <h2>Data Paramedis</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Kategori</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>ID Unit Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unitkerja_id FROM paramedik";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row["nama"]. "</td>";
                        echo "<td>" . $row["gender"]. "</td>";
                        echo "<td>" . $row["tmp_lahir"]. "</td>";
                        echo "<td>" . $row["tgl_lahir"]. "</td>";
                        echo "<td>" . $row["kategori"]. "</td>";
                        echo "<td>" . $row["telpon"]. "</td>";
                        echo "<td>" . $row["alamat"]. "</td>";
                        echo "<td>" . $row["unitkerja_id"]. "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>Tidak ada data paramedis.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    mysqli_close($conn);
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>
</html>