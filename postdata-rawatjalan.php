<?php
include 'koneksi.php';

// echo var_dump($_POST);
$norawat = $_POST['norawat'];
$namapasien = $_POST['namapasien'];
$caramasuk = $_POST['caramasuk'];
$dokterpenanggungjawab = $_POST['dokterpenanggungjawab'];
$polikklinik = $_POST['polikklinik'];
$jenisbayar = $_POST['jenisbayar'];
$foto = $_POST['foto'];

$sql = "INSERT INTO  `laporan_rawatjalan` (`id`, `norawat`, `namapasien`, `caramasuk`, `dokterpenanggungjawab`, `polikklinik`,`jenisbayar`,`foto`)
        VALUES (NULL,'$norawat','$namapasien','$caramasuk','$dokterpenanggungjawab','$polikklinik','$jenisbayar','$foto')";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
