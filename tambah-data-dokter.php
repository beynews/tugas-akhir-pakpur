<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

        }

        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 24px;
            color: #333;
        }

        form {
            width: 500px;
            margin: 0 auto;
            background-color: #fafafa;
            border: 1px solid #ddd;
            padding: 40px;
            box-sizing: border-box;

        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #666;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="radio"],
        input[type="submit"] {
            cursor: pointer;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #333;
            color: #fff;
            border: 0;
            border-radius: 4px;
            padding: 12px;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>Form Tambah Data</h1>
    <form action="postdata-dokter.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <br>
        <label for="nama">Spesialis:</label><br>
        <input type="text" id="spesialis" name="spesialis"><br>
        <br>
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>
        <br>
        <label for="alumni">Alumni:</label><br>
        <input type="text" id="alumni" name="alumni"><br>
        <br>
        <label for="foto">Masukan Foto:</label><br>
        <input type="file" id="foto" name="foto"><br>
        <br>
        <input type="submit" value="Daftar">
    </form>
</body>

</html>