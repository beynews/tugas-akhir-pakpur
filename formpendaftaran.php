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

    <title>Form Pendaftaran</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white font-weight-bolder" href="#"><i class="fas fa-hospital-alt text-white icon-rs"></i>
                <h3>RS ERLANGGA </h3>
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
        <div class="col-md-2 bg-dark mt-4 sidebar p-4 ">
            <input class="form-control me-2 mt-3 bg-dark" type="search" placeholder="Search" aria-label="Search" class="text-white bg-secondary"> <i class="fas fa-search text-white search"></i>
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
                    <a class="nav-link text-white" href="login.html"><i class="fas fa-sign-out-alt text-white "></i> LOGOUT</a>
                    <hr class="bg-secondary">
                </li>

            </ul>
        </div>



        <div class="col-md-10">
            <!-- Data Pendaftaran -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="data-pendaftaran bg-warning text-white mt-5 p-3 bordered">
                        <h5>FORM PENDAFTARAN</h5>
                    </div>
                    <div class="container  bg-light border border-success border-2 mb-5">
                        <div class="row">
                            <label for="inputTindakan" class="col-sm-4 col-form-label">No Registrasi</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Masukkan No Registrasi Anda">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="caraMasuk" class="col-sm-4 col-form-label">Nama Pasien</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Masukkan Pasien">
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <label for="caraMasuk" class="col-sm-4 col-form-label">Nama Ortu</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Masukkan Nama Ortu">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="caraMasuk" class="col-sm-4 col-form-label">Nama Penyakit</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Masukkan Nama Penyakit">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="jenisBayar" class="col-sm-4 col-form-label">Jenis Bayar</label>
                            <div class="col-md-8">
                                <select class="form-select" aria-label="JenisBayar">
                                    <option selected>BPJS</option>
                                    <option value="1">ASURANSI</option>
                                    <option value="2">SENDIRI</option>
                                    <option value="2">Rujukan</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="asalRujukan" class="col-sm-4 col-form-label">Asal Rujukan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Asal Rujukan">
                            </div>
                        </div>
                        <hr>

                        <a href="datapasien.php"><button class="btn btn-danger" type="submit" style="margin-left: 150px;"><i class="fas fa-save"></i> Buat</button></a>
                        <a href="#"><button class="btn btn-info text-white" style="margin-left: 5px;"><i class="fas fa-sign-out-alt text-white "></i> Batal</button></a>
                    </div>
                </div>

                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

                <script>
                    // Tooltip
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl)
                    })

                    // Modals
                    var myModal = document.getElementById('myModal')
                    var myInput = document.getElementById('myInput')

                    myModal.addEventListener('shown.bs.modal', function() {
                        myInput.focus()
                    })
                </script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>