<?php
require 'fungsi.php';

$tipes = "Galaxy S";
$galaxys = query("SELECT * FROM produkhp WHERE tipe = '$tipes' ");

$tipez = "Galaxy Z";
$galaxyz = query("SELECT * FROM produkhp WHERE tipe = '$tipez' ");

$tipea = "Galaxy A";
$galaxya = query("SELECT * FROM produkhp WHERE tipe = '$tipea' ");

$tipetab = "Galaxy Tab";
$galaxytab = query("SELECT * FROM produkhp WHERE tipe = '$tipetab' ");


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
    <title>Produk</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar Ends -->
    <!-- Landing Page -->
    <section class="hero">
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <video src="img/s24vid.mp4" class="object-fit-contain" autoplay loop></video>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>
                                Some representative placeholder content for the first slide.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <video src="img/zflip.mp4" class="object-fit-contain" autoplay loop></video>
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h2 class="fw-bold">Galaxy S24 Series</h2>
                            <p>
                                Some representative placeholder content for the second slide.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Landing Page Ends -->
    <!-- Produk Baru -->
    <section class="product">
        <div class="produk">
            <div class="container">
                <div class="judul text-center my-5">
                    <h1 class="fw-bold">Produk Terbaru</h1>
                </div>
                <!-- Card Produk -->
                <div class="row row-cols-2 mb-2">
                    <!-- Kiri -->
                    <div class="col-6">
                        <div class="card rounded-4">
                            <img src="img/s24c.jpg" class="card-img-top img-fluid rounded-4" alt="..." />
                            <div class="deskripsi card-img-overlay text-center d-none d-lg-block">
                                <h5 class="card-title">Boost Your Aspiration</h5>
                                <p class="card-text">Achieve Your Goals With Samsung.</p>
                                <a href="#" class="btn btn-primary">More Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Kanan -->
                    <div class="row">
                        <div class="col-6">
                            <div class="card rounded-4">
                                <img src="img/s24plus.jpg" class="card-img-top img-fluid rounded-4" alt="..." />
                                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                                    <h5 class="m-1 p-0 ">Galaxy S24 | S24+</h5>
                                    <p class="m-1 p-0">Online Exclusive</p>
                                    <a href="#" class="btn btn-primary py-0">More..</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card rounded-4">
                                <img src="img/flip5.png" class="card-img-top img-fluid rounded-4" alt="..." />
                                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                                    <h5 class="m-1 p-0 ">Galaxy Z Flip5</h5>
                                    <p class="m-1 p-0">Online Exclusive</p>
                                    <a href="#" class="btn btn-primary py-0">More..</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card rounded-4 mt-5">
                                <img src="img/sfold.png" class="card-img-top img-fluid rounded-4" alt="..." />
                                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                                    <h5 class="m-1 p-0 ">Galaxy Z Fold5</h5>
                                    <p class="m-1 p-0">Online Exclusive</p>
                                    <a href="#" class="btn btn-primary py-0">More..</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card rounded-4 mt-5">
                                <img src="img/s23fe.png" class="card-img-top img-fluid rounded-4" alt="..." />
                                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                                    <h5 class="m-1 p-0 ">Galaxy S23 FE</h5>
                                    <p class="m-1 p-0">Online Exclusive</p>
                                    <a href="#" class="btn btn-primary py-0">More..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Produk Ends -->
            </div>
        </div>
    </section>
    <!-- Produk Baru Ends -->

    <!-- Produk Samsung S24-->
    <section id="s24" class="s24">
        <div class="container">
            <div class="cover my-3 position-relative">
                <img src="img/covers24.jpg" alt="" class="d-block w-100 img-fluid" />
                <div class="judul position-absolute d-none d-lg-block">
                    <h1 class="fw-bold">Galaxy S</h1>
                    <a href="#" class="btn btn-primary fw-bold rounded-5 py-2 px-4 mt-3">See All</a>
                </div>
            </div>
            <div class="row text-center">
                <?php
                foreach ($galaxys as $types): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card rounded-5 border-0">
                            <img src="dimg/<?= $types["gambar"]; ?>" class=" card-img-top rounded-5" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $types["nama"]; ?>
                                </h5>
                                <p>
                                    <?= $types["warna"]; ?>
                                </p>
                                <p class="card-text fw-semibold">
                                    <?= "Rp " . number_format($types["harga"], 0, ',', '.'); ?>
                                </p>
                                <a href="transaksi.php?id=<?= $types["id"]; ?>" class="btn btn-primary rounded-4">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- S24 Ends -->

    <!-- Galaxy Z -->
    <section id="flip" class="flip">
        <div class="container">
            <div class="cover my-3 position-relative">
                <img src="img/galaxyzc.jpg" alt="" class="d-block w-100 img-fluid" />
                <div class="judul position-absolute d-none d-lg-block">
                    <h1 class="fw-bold">Galaxy Z</h1>
                    <p class="pt-2 fs-5">Join the flip side</p>
                    <a href="#" class="btn btn-primary fw-bold rounded-5 py-2 px-4 mt-2">See All</a>
                </div>
            </div>
            <div class="row text-center my-3">
                <?php foreach ($galaxyz as $typez): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card rounded-5 border-0">
                            <img src="dimg/<?= $typez["gambar"]; ?>" class=" card-img-top rounded-5" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $typez["nama"]; ?>
                                </h5>
                                <h6>
                                    <?= $typez["warna"]; ?>
                                </h6>
                                <p class="card-text fw-semibold">
                                    <?= "Rp " . number_format($typez["harga"], 0, ',', '.'); ?>
                                </p>
                                <a href="transaksi.php?id=<?= $typez["id"]; ?>" class="btn btn-primary rounded-4">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Galaxy Z Ends -->

    <!-- Galaxy A -->
    <section id="flip" class="flip">
        <div class="container">
            <div class="cover my-3 position-relative">
                <img src="assetHp/galaxyA.jpg" alt="" class="d-block w-100 img-fluid" />
                <div class="judul position-absolute d-none d-lg-block">
                    <h1 class="fw-bold">Galaxy A Series</h1>
                    <p class="pt-2 fs-5">Awesome is for everyone</p>
                    <a href="#" class="btn btn-primary fw-bold rounded-5 py-2 px-4 mt-2">See All</a>
                </div>
            </div>
            <div class="row text-center my-3">
                <?php foreach ($galaxya as $typea): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card rounded-5 border-0">
                            <img src="dimg/<?= $typea["gambar"]; ?>" class=" card-img-top rounded-5" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $typea["nama"]; ?>
                                </h5>
                                <p>
                                    <?= $typea["warna"]; ?>
                                </p>
                                <p class="card-text fw-semibold     ">
                                    <?= "Rp " . number_format($typea["harga"], 0, ',', '.'); ?>
                                </p>
                                <a href="transaksi.php?id=<?= $typea["id"]; ?>" class="btn btn-primary rounded-4">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Galaxy A Ends -->

    <!-- Galaxy Tab-->
    <section id="flip" class="flip">
        <div class="container">
            <div class="cover my-3 position-relative">
                <img src="assetHp/covertab.jpg" alt="" class="d-block w-100 img-fluid" />
                <div class="judul position-absolute d-none d-lg-block">
                    <h1 class="fw-bold">Galaxy Tab Series</h1>
                    <p class="pt-2 fs-5">The connected power of Samsung Galaxy</p>
                    <a href="#" class="btn btn-primary fw-bold rounded-5 py-2 px-4 mt-2">See All</a>
                </div>
            </div>
            <div class="row text-center my-3">
                <?php foreach ($galaxytab as $typetab): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card rounded-5 border-0">
                            <img src="dimg/<?= $typetab["gambar"]; ?>" class=" card-img-top rounded-5" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $typetab["nama"]; ?>
                                </h5>
                                <p>
                                    <?= $typetab["warna"]; ?>
                                </p>
                                <p class="card-text fw-semibold     ">
                                    <?= "Rp " . number_format($typetab["harga"], 0, ',', '.'); ?>
                                </p>
                                <a href="transaksi.php?id=<?= $typetab["id"]; ?>" class="btn btn-primary rounded-4">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Galaxy Tab Ends -->
    <!-- Produk Ends -->

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>