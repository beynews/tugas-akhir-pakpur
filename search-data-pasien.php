<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "rumahsakit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$keyword = $_POST["keyword"];
$sql = "SELECT id, noregistrasi, namapasien FROM datapasien WHERE noregistrasi LIKE '%$keyword%' OR namapasien LIKE  '%$keyword%'";
$result = $conn->query($sql);
// $keyword = "%" . $keyword . "%";
// $stmt->bind_param("ss", $keyword, $keyword);
// $stmt->execute();
// $result = $stmt->get_result();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Noregistrasi: " . $row["noregistrasi"] . " - Namapasien: " . $row["namapasien"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
