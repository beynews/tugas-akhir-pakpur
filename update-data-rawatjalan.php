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
$norawat = $_POST['norawat'];
$namapasien = $_POST['namapasien'];
$caramasuk = $_POST['caramasuk'];
$dokterpenanggungjawab = $_POST['dokterpenanggungjawab'];
$polikklinik = $_POST['polikklinik'];
$jenisbayar = $_POST['jenisbayar'];
$foto = $_POST['foto'];


$sql = "UPDATE `laporan_rawatjalan` SET 
 norawat = '$norawat',
 namapasien = '$namapasien',
 caramasuk = '$caramasuk',
 dokterpenanggungjawab = '$dokterpenanggungjawab',
 polikklinik = '$polikklinik',
 jenisbayar = '$jenisbayar' 
 WHERE id =$id";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

// redirect ke halaman index
header('location: data-rawat-jalan.php');
