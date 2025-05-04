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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Unit Kerja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Unit Kerja</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Unit</th>
                    <th>Nama Unit</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, kode_unit, nama_unit, keterangan FROM unit_kerja";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row["kode_unit"]. "</td>";
                        echo "<td>" . $row["nama_unit"]. "</td>";
                        echo "<td>" . $row["keterangan"]. "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data unit kerja.</td></tr>";
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