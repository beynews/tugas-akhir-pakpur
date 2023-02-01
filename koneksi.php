<?php
  // Koneksi ke database
  $host = "localhost"; 
  $user = "root";
  $password = ""; 
  $database = "rumahsakit"; 

  $conn = new mysqli($host, $user, $password, $database);
  
  // Cek koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }
