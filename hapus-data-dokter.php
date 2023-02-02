<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rumahsakit";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perintah SQL DELETE
    $sql = "DELETE FROM `datadokter_spesialis` WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Data tidak ditemukan";
}

// Tutup koneksi
mysqli_close($conn);

// redirect ke halaman index
header('location: index.php');
