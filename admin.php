<?php
require 'fungsi.php'; // include fungsi.php

$produk = query("SELECT * FROM produkhp"); // query data produk
$aksesoris = query("SELECT * FROM aksesoris"); // query data produk

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Font -->
    <link href="https://fonts.cdnfonts.com/css/samsung-sharp-sans?styles=24555,24554,24553" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Samsung</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar Ends -->
    <!-- Produk -->
    <section class="admin mt-5" id="admin">
        <div class="container mb-3">
            <div class="judul text-center">
                <h1>INI ADALAH HALAMAN ADMIN</h1>
                <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data HP</a>
                <a href="tambahacc.php" class="btn btn-primary mb-3">Tambah Data Aksesoris</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th colspan="11" class="text-center">DAFTAR DATA SMARTPHONE</th>
                            <!-- Memperluas sel untuk judul -->
                        </tr>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">MERK</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">TIPE</th>
                            <th scope="col">WARNA</th>
                            <th scope="col">RAM</th>
                            <th scope="col">ROM</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">DESKRIPSI</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1; // Inisialisasi nomor diluar loop
                        foreach ($produk as $row): ?>
                            <tr>
                                <th scope="row">
                                    <?= $nomor; ?>
                                </th>
                                <td>
                                    <?= $row["merk"]; ?>
                                </td>
                                <td>
                                    <?= $row["nama"]; ?>
                                </td>
                                <td>
                                    <?= $row["tipe"]; ?>
                                </td>
                                <td>
                                    <?= $row["warna"]; ?>
                                </td>
                                <td>
                                    <?= $row["ram"]; ?>
                                </td>
                                <td>
                                    <?= $row["rom"]; ?>
                                </td>
                                <td>
                                    <?= "Rp " . number_format($row["harga"], 0, ',', '.'); ?>
                                </td>
                                <td>
                                    <img src="dimg/<?= $row["gambar"] ?>" width="200px" alt="">
                                </td>
                                <td>
                                    <?= $row["deskripsi"]; ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-warning mb-1">Edit</a>
                                    <a href="hapus.php?id=<?= $row["id"]; ?>"
                                        onclick="return confirm('Anda yakin ingin menghapus data?');"
                                        class="btn btn-danger mb-3">Delete</a>
                                </td>
                            </tr>
                            <?php $nomor++; // Increment nomor di dalam loop                                                                                                                                                                 ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Data Aksesoris -->
            <div class="table-responsive">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th colspan="11" class="text-center">DAFTAR DATA AKSESORIS</th>
                            <!-- Memperluas sel untuk judul -->
                        </tr>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">JENIS</th>
                            <th scope="col">WARNA</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">DESKRIPSI</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1; // Inisialisasi nomor diluar loop
                        foreach ($aksesoris as $row): ?>
                            <tr>
                                <th scope="row">
                                    <?= $nomor; ?>
                                </th>
                                <td>
                                    <?= $row["nama"]; ?>
                                </td>
                                <td>
                                    <?= $row["jenis"]; ?>
                                </td>
                                <td>
                                    <?= $row["warna"]; ?>
                                </td>
                                <td>
                                    <?= "Rp " . number_format($row["harga"], 0, ',', '.'); ?>
                                </td>
                                <td>
                                    <img src="dimg/<?= $row["gambar"] ?>" width="200px" alt="">
                                </td>
                                <td>
                                    <?= $row["deskripsi"]; ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-warning">Edit</a>
                                    <a href="hapusacc.php?id=<?= $row["id"]; ?>"
                                        onclick="return confirm('Anda yakin ingin menghapus data?');"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php $nomor++; // Increment nomor di dalam loop                                                                                                                                                                 ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>