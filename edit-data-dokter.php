<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            margin-top: 20px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid #ddd;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

</head>

<body>
    <h1>Data</h1>


    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rumahsakit";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM `datadokter_spesialis` WHERE id = $id;";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

    ?>


        <?php

        echo "<form action=\"http://localhost/tugas-akhir-pakpur/update-data-dokter.php?id=$id\" method=\"POST\">";
        $row = $result->fetch_assoc();
        ?>



        <label>Masukan Data Id:</label><br>
        <input type="text" name="id" value="<?php echo $row["id"] ?>"><br>

        <label>Masukan Nama Anda:</label><br>
        <input type="text" name="nama" value="<?php echo $row["nama"] ?>"><br>

        <label>Masukan Spesialis Anda:</label><br>
        <input type="text" name="spesialis" value="<?php echo $row["spesialis"] ?>"><br>

        <label>Masukan Alamat Anda:</label><br>
        <input type="text" name="alamat" value="<?php echo $row["alamat"] ?>"><br>

        <label>Masukan Data Alumni:</label><br>
        <input type="text" name="alumni" value="<?php echo $row["alumni"] ?>"><br>

        <label>Masukan Foto Anda:</label><br>
        <input type="text" name="foto" value="<?php echo $row["foto"] ?>"><br>

        <label></label><br>
        <input type="submit" name="submit" value="Submit">







        </form>

    <?php




    } else {
        echo "0 result";
    }
    $conn->close();
    ?>


    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>