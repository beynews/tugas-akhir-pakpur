<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <title>Data Pasien</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white font-weight-bolder" href="dashboard.html"><i class="fas fa-hospital-alt text-white icon-rs"></i>
                <h3>RS ERLANGGA</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="profile">
                <img src="gambar/kucing.jpg" alt="profile" class="ml-auto rounded-circle" data-bs-toggle="tooltip" title="Profile Anda">
                <p class="text-white font-weight-bold name"></p><i class="fas fa-cogs icon-size text-white mr-4" data-bs-toggle="tooltip" title="Pengaturan"></i>
            </div>
        </div>
        </div>
    </nav>

    <!-- Sidebar & dashboard -->
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-4  p-2 ">
            <ul class="nav flex-column sidebar">
                <li class="nav-item">
                    <a class="nav-link text-white mt-2" aria-current="page" href="index.php"><i class="fas fa-book-medical text-white mr-4"></i> KELOLA MENU</a>
                </li>
                <hr class="bg-secondary">

                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-user-md"></i> DATA DOKTER</a>
                    <hr class="bg-secondary">
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="datapasien.php"><i class="far fa-address-card"></i> DATA PASIEN</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="formpendaftaran.php"><i class="fas fa-file-alt"></i> FORM PENDAFTARAN</a>
                    <hr class="bg-secondary">
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="data-rawat-jalan.php"><i class="fas fa-bed"></i> LAPORAN RAWAT JALAN</a>
                    <hr class="bg-secondary">
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="formlogin.php"><i class="fas fa-sign-out-alt text-white "></i> LOGOUT</a>
                    <hr class="bg-secondary">
                </li>

            </ul>
        </div>

        <div class="col-md-10">
            <div class="data-pasien bg-warning text-white mt-5 p-3 bordered">
                <h5>DATA PASIEN</h5>
            </div>
            <div class="container  bg-light border border-warning border-2 mb-5">
                <a href="tambah-data-pasien.php" class="btn btn-info mt-2"> <i class="fas fa-address-card"></i> Tambah Data</a>

                
                    <div class="row g-2">
                        <div class="col-auto">
                            <div class="row mb-3">
                                <label for="antrian" class="col-md-4 col-form-label mt-2">Show</label>
                                <div class="col-md-8">
                                    <select id="antrian" class="form-select mt-2 mr-4 form-control-sm">
                                        <option selected>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-3 form-search">
                            <form method="post" action="searchpasien.php">
                                <input class="me-2" type="text" name="keyword" placeholder="Cari" class="mt-2">
                                <button type="submit" class="btn btn-primary"></button>
                            </form>
                        </div>
                    </div>
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No <i class="fas fa-sort"></i> </th>
                            <th scope="col">No Registrasi <i class="fas fa-sort"></i> </th>
                            <th scope="col">Nama Pasien <i class="fas fa-sort"></i></th>
                            <th scope="col">Nama Ortu <i class="fas fa-sort"></i></th>
                            <th scope="col">Riwayat Penyakit <i class="fas fa-sort"></i></th>
                            <th scope="col">Umur <i class="fas fa-sort"></i></th>
                            <th scope="col">Asal <i class="fas fa-sort"></i></th>
                            <th scope="col">Jenis Bayar <i class="fas fa-sort"></i></th>
                            <th scope="col">Foto <i class="fas fa-sort"></i></th>
                            <th colspan="2" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $sql = "SELECT * FROM`datapasien`";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0)
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                if ($row["foto"] == "") {
                                    $gambar = "gambar.jpg";
                                } else {
                                    $gambar = $row["foto"];
                                }
                        ?>
                            <tr>
                                <td scope="row"><?= $row['id'] ?></td>
                                <td><?= $row["noregistrasi"] ?></td>
                                <td><?= $row["namapasien"] ?></td>
                                <td><?= $row["namaortu"] ?></td>
                                <td><?= $row["riwayatpenyakit"] ?></td>
                                <td><?= $row["umur"] ?></td>
                                <td><?= $row["asal"] ?></td>
                                <td><?= $row["jenisbayar"] ?></td>
                                <td> <img src="gambar/<?= $gambar ?>" style="width: 50px;"></td>
                                <td><a href="edit-data-pasien.php?id=<?= $row['id'] ?>"><i class="fas fa-edit text-white bg-success p-2 rounded" data-bs-toggle="tooltip" title="Edit"></i></td>
                                <td><a href="hapus-data-pasien.php?id=<?= $row['id'] ?>"><i class="fas fa-trash-alt text-white bg-danger p-2 rounded" data-bs-toggle="tooltip" title="Hapus"></i></td>
                            <?php


                            }


                            ?>

                    </tbody>


                </table>
                <div class="row">
                    <div class="col-sm-8">
                        <label for="">Tampil antrian 1 dari 7 dalam 7 antrian</label>
                    </div>
                    <div class="col-sm-4">
                        <nav aria-label="..." style="margin-left: -50px;">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>