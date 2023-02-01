<?php
include 'koneksi.php';

// echo var_dump($_POST);
$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];
$alumni = $_POST['alumni'];
$foto = $_POST['foto'];


$sql = "INSERT INTO  `datadokter-spesialis` (`id`, `nama`, `spesialis`, `alamat`, `alumni`, `foto`)
        VALUES (NULL,'$nama','$spesialis','$alamat','$alumni','$foto')";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();