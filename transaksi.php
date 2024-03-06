<?php
require 'fungsi.php';

$id = $_GET["id"];

$beli = query("SELECT * FROM produkhp WHERE id = '$id'")[0];

$totalharga = $beli["harga"];
$headset = 1000000;
$softcase = 1200000;

if (isset($_POST['tambah'])) {
    $totalharga += $headset;
}
;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar Ends -->

    <section id="barang" class="barang mt-5 mb-3">
        <div class="container">
            <div class="judul">
                <h1>Barang Yang Anda Beli :</h1>
            </div>
            <div class="data">
                <h1 class="text-center">SPESIFIKASI HANDPHONE</h1>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img src="dimg/<?= $beli["gambar"] ?>" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Merk Produk</th>
                                            <td>
                                                <?= $beli["merk"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nama Produk</th>
                                            <td>
                                                <?= $beli["nama"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tipe Produk</th>
                                            <td>
                                                <?= $beli["tipe"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Warna Produk</th>
                                            <td>
                                                <?= $beli["warna"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">RAM</th>
                                            <td>
                                                <?= $beli["ram"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ROM</th>
                                            <td>
                                                <?= $beli["rom"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Harga</th>
                                            <td>
                                                <?= "Rp " . number_format($beli["harga"], 0, ',', '.'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Deskripsi</th>
                                            <td>
                                                <?= $beli["deskripsi"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Headset</th>
                                            <td>
                                                <?= "Rp " . number_format($headset, 0, ',', '.'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Harga</th>
                                            <td>
                                                <?= "Rp " . number_format($totalharga, 0, ',', '.'); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="" method="POST"> <button type="submit" name="tambah"
                                        class="btn btn-primary">Tambah</button>
                                </form>
                                <!-- Hidden input untuk menyimpan total harga -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Merk Produk</th>
                                        <td>
                                            <?= $beli["merk"]; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>