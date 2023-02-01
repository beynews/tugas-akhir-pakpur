<?php
include 'koneksi.php';

// echo var_dump($_POST);
$noregistrasi = $_POST['noregistrasi'];
$namapasien = $_POST['namapasien'];
$namaortu = $_POST['namaortu'];
$riwayatpenyakit = $_POST['riwayatpenyakit'];
$umur = $_POST['umur'];
$asal = $_POST['asal'];
$jenisbayar = $_POST['jenisbayar'];
$foto = $_POST['foto'];


$sql = "INSERT INTO  `datapasien` (`id`, `noregistrasi`, `namapasien`, `namaortu`, `riwayatpenyakit`, `umur`,`asal`,`jenisbayar`,`foto`)
        VALUES (NULL,'$noregistrasi','$namapasien','$namaortu','$riwayatpenyakit','$umur','$asal','$jenisbayar','$foto')";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
