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
    <form action="postdata-rawatjalan.php" method="POST">
        <label for="norawat">No Rawat:</label><br>
        <input type="text" id="norawat" name="norawat"><br>
        <br>
        <label for="namapasien">Nama Pasien:</label><br>
        <input type="text" id="namapasien" name="namapasien"><br>
        <br>
        <label for="caramasuk">Cara Masuk :</label><br>
        <input type="text" id="caramasuk" name="caramasuk"><br>
        <br>
        <label for="dokterpenanggungjawab">Dokter Penanggung Jawab:</label><br>
        <input type="text" id="dokterpenanggungjawab" name="dokterpenanggungjawab"><br>
        <br>
        <label for="polikklinik">Polikklinik:</label><br>
        <input type="text" id="polikklinik" name="polikklinik"><br>
        <br>
        <label for="jenisbayar">Masukan Jenis Bayar:</label><br>
        <select id="jenisbayar" name="jenisbayar">
            <option value="bpjs">BPJS</option>
            <option value="asuransi">Asuransi</option>
            <option value="mandiri">Mandiri</option>
        </select>
        <label for="foto">Masukan Foto:</label><br>
        <input type="file" id="foto" name="foto"><br>
        <br>
        <input type="submit" value="Daftar">
    </form>
</body>

</html>