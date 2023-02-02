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
$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];
$alumni = $_POST['alumni'];
$foto = $_POST['foto'];


$sql = "UPDATE `datadokter_spesialis` SET 
 nama = '$nama',
 spesialis = '$spesialis',
 alamat = '$alamat',
 alumni = '$alumni',
 foto = '$foto' 
 WHERE id =$id";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

// redirect ke halaman index
header('location: index.php');
