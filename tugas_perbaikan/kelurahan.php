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
    <title>Data Kelurahan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Kelurahan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelurahan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, nama_kelurahan FROM kelurahan";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row["nama_kelurahan"]. "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Tidak ada data kelurahan.</td></tr>";
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