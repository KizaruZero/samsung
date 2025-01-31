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
  <!-- Landing Page -->
  <section class="hero">
    <div class="container">
      <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="img/samsung.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="img/s224.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block text-dark">
              <h2>Galaxy S24 Series</h2>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="img/s24ultra.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <a href="#" class="btn btn-primary">Learn More</a>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <!-- Landing Page Ends -->
  <!-- Products -->
  <section class="product mt-4">
    <div class="produk">
      <div class="container">
        <div class="judul text-center">
          <h2 class="fw-bold">Promo Produk Terbaru</h2>
          <p>
            Dapatkan info promo terbaru disini dan jangan lupa claim cashback
            untuk setiap pembelian anda!
          </p>
        </div>
        <!-- Card Produk -->
        <div class="row row-cols-2 mb-2">
          <!-- Kiri -->
          <div class="col-6">
            <div class="card rounded-4">
              <img src="img/produk1.jpg" class="card-img-top img-fluid rounded-4" alt="..." />
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
              <div class="card rounded-4 border-0">
                <img src="img/s24black.png" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombol card-img-overlay text-center d-none d-lg-block">
                  <p class="m-1 p-0 fw-semibold">Galaxy S24 | S24+</p>
                  <p class="m-1 p-0">Titanium Black Edition</p>
                  <a href="#" class="btn btn-primary py-0">More..</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card rounded-4 border-0">
                <img src="img/s24gray.png" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombol card-img-overlay text-center d-none d-lg-block">
                  <p class="m-1 p-0 fw-semibold">Galaxy S24 | S24+</p>
                  <p class="m-1 p-0">Titanium Gray Edition</p>
                  <a href="#" class="btn btn-primary py-0">More..</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card rounded-4 mt-5 border-0">
                <img src="img/s24yellow.png" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombol card-img-overlay text-center d-none d-lg-block">
                  <p class="m-1 p-0 fw-semibold">Galaxy S24 | S24+</p>
                  <p class="m-1 p-0">Titanium Yellow Edition</p>
                  <a href="#" class="btn btn-primary py-0">More..</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card rounded-4 mt-5 border-0">
                <img src="img/s24violet.png" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombol card-img-overlay text-center d-none d-lg-block">
                  <p class="m-1 p-0 fw-semibold">Galaxy S24 | S24+</p>
                  <p class="m-1 p-0">Titanium Violet Edition</p>
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


  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>