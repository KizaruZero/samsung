<?php
require 'fungsi.php';

$case = "case";
$casehp = query("SELECT * FROM aksesoris WHERE jenis = '$case' ");

$ear = "earphone";
$earphone = query("SELECT * FROM aksesoris WHERE jenis = '$ear' ");

$jam = "jam";
$watch = query("SELECT * FROM aksesoris WHERE jenis = '$jam' ");


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
    <title>Document</title>
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
                <div class="row my-2">
                    <div class="col">
                        <div class="card rounded-4  border-0">
                            <img src="assetAcc/Case/casehitam.png" class="card-img-top img-fluid rounded-4" alt="..." />
                            <div class="text-center d-none d-lg-block mt-2">
                                <h5 class="card-title fw-bold">Galaxy S24 Ultra Smart View Wallet Case</h5>
                                <a href="#case" class="btn btn-dark text-white rounded-5 my-2">Beli sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-4  border-0">
                            <img src="assetAcc/Buds/bud2.png" class="card-img-top img-fluid rounded-4" alt="..." />
                            <div class="text-center d-none d-lg-block mt-2">
                                <h5 class="card-title fw-bold">Galaxy Buds2 Pro</h5>
                                <a href="#ear" class="btn btn-dark text-white rounded-5 my-2">Beli sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-4  border-0">
                            <img src="assetAcc/Case/flipsuit.png" class="card-img-top img-fluid rounded-4" alt="..." />
                            <div class="text-center d-none d-lg-block mt-2">
                                <h5 class="card-title fw-bold">Galaxy S24 Ultra Flipsuit Case</h5>
                                <a href="#case" class="btn btn-dark text-white rounded-5 my-2">Beli sekarang</a>
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

    <!-- Produk Case-->
    <section id="case" class="case">
        <div class="container">
            <div class="cover my-3 position-relative">
                <img src="assetAcc/coverhp.jpg" alt="" class="d-block w-100 img-fluid" />
                <div class="judul position-absolute d-none d-lg-block">
                    <h1 class="fw-bold">Smartphone Accessories</h1>
                    <p>10% off all-new Galaxy S24 | S24+ and Galaxy S24 Ultra essentials only at Shop App
                    </p>
                    <a href="#" class="btn btn-dark fw-bold rounded-5 py-2 px-4 mt-1">See All</a>
                </div>
            </div>
            <div class="row text-center">
                <?php
                foreach ($casehp as $case): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card rounded-5 border-0">
                            <img src="dimg/<?= $case["gambar"]; ?>" class=" card-img-top rounded-5 " alt="..." />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $case["nama"]; ?>
                                </h5>
                                <h6>
                                    <?= $case["warna"]; ?>
                                </h6>
                                <p class="card-text fw-semibold">
                                    <?= "Rp " . number_format($case["harga"], 0, ',', '.'); ?>
                                </p>
                                <a href="transaksiacc.php?id=<?= $case["id"]; ?>" class="btn btn-dark rounded-5">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- S24 Ends -->

    <!-- Earphone -->
    <section id="ear" class="ear">
        <div class="container">
            <div class="cover my-3 position-relative">
                <img src="assetAcc/coverear.png" alt="" class="d-block w-100 img-fluid" />
            </div>
            <div class="row text-center my-3">
                <?php foreach ($earphone as $ear): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card rounded-5 border-0">
                            <img src="dimg/<?= $ear["gambar"]; ?>" class=" card-img-top rounded-5" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $ear["nama"]; ?>
                                </h5>
                                <h6>
                                    <?= $ear["warna"]; ?>
                                </h6>
                                <p class="card-text fw-semibold">
                                    <?= "Rp " . number_format($ear["harga"], 0, ',', '.'); ?>
                                </p>
                                <a href="transaksiacc.php?id=<?= $ear["id"]; ?>" class="btn btn-dark rounded-5">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Earphone Ends -->

    <!-- Watch -->
    <section id="ear" class="ear">
        <div class="container">
            <div class="cover my-3 position-relative">
                <img src="assetAcc/coverJam.jpg" alt="" class="d-block w-100 img-fluid" />
                <div class="judul position-absolute d-none d-lg-block">
                    <h1 class="fw-bold">Galaxy Watch Series</h1>
                    <p>Customize to suit your personality
                    </p>
                    <a href="#" class="btn btn-dark fw-bold rounded-5 py-2 px-4 mt-1">See All</a>
                </div>
            </div>
            <div class="row text-center my-3">
                <?php foreach ($watch as $jam): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card rounded-5 border-0">
                            <img src="dimg/<?= $jam["gambar"]; ?>" class=" card-img-top rounded-5" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $jam["nama"]; ?>
                                </h5>
                                <h6>
                                    <?= $jam["warna"]; ?>
                                </h6>
                                <p class="card-text fw-semibold">
                                    <?= "Rp " . number_format($jam["harga"], 0, ',', '.'); ?>
                                </p>
                                <a href="transaksiacc.php?id=<?= $jam["id"]; ?>" class="btn btn-dark rounded-5">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Watch Ends -->
    <!-- Produk Ends -->

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>s