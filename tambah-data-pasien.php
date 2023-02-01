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
    <form action="postdata-pasien.php" method="POST">
        <label for="noregistrasi">No Registrasi:</label><br>
        <input type="text" id="noregistrasi" name="noregistrasi"><br>
        <br>
        <label for="namapasien">Nama Pasien:</label><br>
        <input type="text" id="namapasien" name="namapasien"><br>
        <br>
        <label for="namaortu">Nama Ortu:</label><br>
        <textarea id="namaortu" name="namaortu"></textarea><br>
        <br>
        <label for="riwayatpenyakit">Riwayat Penyakit:</label><br>
        <input type="text" id="riwayatpenyakit" name="riwayatpenyakit"><br>
        <br>
        <label for="umur"> Umur:</label><br>
        <input type="text" id="umur" name="umur"><br>
        <br>
        <label for="asal"> Asal:</label><br>
        <input type="text" id="asal" name="asal"><br>
        <br>
        <label for="jenisbayar">Jenis Bayar:</label><br>
        <input type="text" id="jenisbayar" name="jenisbayar"><br>
        <br>
        <label for="foto">Masukan Foto:</label><br>
        <input type="file" id="foto" name="foto"><br>
        <br>
        <input type="submit" value="Daftar">
    </form>
</body>

</html>