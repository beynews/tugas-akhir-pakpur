<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rumahsakit";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$noregistrasi = $_POST['noregistrasi'];
$namapasien = $_POST['namapasien'];
$namaortu = $_POST['namaortu'];
$riwayatpenyakit = $_POST['riwayatpenyakit'];
$umur = $_POST['umur'];
$asal = $_POST['asal'];
$jenisbayar = $_POST['jenisbayar'];
$foto = $_POST['foto'];


$sql = "UPDATE `datapasien` SET 
 noregistrasi = '$noregistrasi',
 namapasien = '$namapasien',
 namaortu = '$namaortu',
 riwayatpenyakit = '$riwayatpenyakit',
 umur = '$umur',
 asal = '$asal',
 jenisbayar = '$jenisbayar' 
 WHERE id =$id";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

// redirect ke halaman index
header('location: datapasien.php');
