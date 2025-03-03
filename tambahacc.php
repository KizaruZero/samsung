<?php

require 'fungsi.php';


// Tambah data
$sukses = "";
$error = "";

if (isset($_POST["tambah"])) {
    if (tambahacc($_POST) == true) {
        $sukses = "Data berhasil ditambahkan";
    } else {
        $error = "Data gagal ditambahkan, Data tidak boleh kosong dan harus lengkap";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar Ends -->

    <!-- Jumbotron -->
    <section>
        <div class="jumbotron jumbotron-fluid text-center mt-5">
            <div class="container">
                <h1 class="display-4">Selamat Datang Admin</h1>
                <p class="lead">Ini adalah halaman Tambah Data</p>
                <!-- Button Tambah Data -->
                <a href="admin.php" class="btn btn-primary mb-3">Kembali</a>
            </div>
        </div>
    </section>
    <!-- Jumbotron Ends -->

    <!-- Form Tambah Data -->
    <section class="data">
        <div class="container">
            <h2 class="text-center">Membuat Form di dalam tabel</h2>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <tr>
                                <td>Nama Produk</td>
                                <td>
                                    <input type="text" class="form-control" id="nama" name="nama" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td>
                                    <input type="text" class="form-control" id="jenis" name="jenis" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td>
                                    <input type="text" class="form-control" id="warna" name="warna" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Rp</td>
                                <td>
                                    <input type="number" class="form-control" id="harga" name="harga" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Gambar</td>
                                <td>
                                    <input type="file" class="form-control" id="gambar" name="gambar" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>
                                    <textarea class="form-control" id="desc" name="desc" rows="2" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="submit" class="btn btn-primary" name="tambah">
                                        Kirim!
                                    </button>
                                </td>
                            </tr>
                        </form>
                        <?php
                        if ($sukses) {
                            echo "<div class='alert alert-success mt-3'>$sukses</div>";
                        } else if ($error) {
                            echo "<div class='alert alert-danger mt-3'>$error</div>";
                        }
                        ?>
                    </table>
                    <a href="admin.php" type="button"
                        class="btn btn-primary d-flex justify-content-center align-items-center">Lihat Hasil
                        Data</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>