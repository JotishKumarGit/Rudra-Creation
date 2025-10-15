<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>SadGuru Arts And Craft</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link
    href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
    rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />

  <style>
    .card-img-top {
      height: 250px;
      /* Set desired height */
      width: 100%;
      /* Full width of the card */
      object-fit: cover;
    }

    .card-img-top {
      height: 250px;
      /* uniform image height */
      width: 100%;
      /* full card width */
      object-fit: cover;
      /* crop without distortion */
    }

    /* Crop and fill image without distortion */
    .team-item img {
      height: 250px;
      /* set uniform height */
      width: 100%;
      /* full width of the container */
      object-fit: cover;
      /* crop image to fill without stretching */
    }

    /* Responsive text sizes */
    .custom-heading {
      font-size: 1.2rem;
      /* mobile default */
    }

    .custom-subheading {
      font-size: 1.6rem;
    }

    @media (min-width: 768px) {
      .custom-heading {
        font-size: 1.5rem;
        /* tablet */
      }

      .custom-subheading {
        font-size: 2rem;
      }
    }

    @media (min-width: 992px) {
      .custom-heading {
        font-size: 1.8rem;
        /* desktop */
      }

      .custom-subheading {
        font-size: 2.5rem;
      }
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-body .btn {
      margin-top: auto;
    }
  </style>
</head>

<body>



  <!-- Spinner Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-secondary"
      style="width: 3rem; height: 3rem"
      role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Header -->
  <?php include('header.php') ?>

  <!-- page-header -->
  <div
    class="container-fluid page-header mb-5 py-5"
    style="
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
      url(img/fridgemagnetsproducts.jpg) center center no-repeat;
    background-size: cover;
  ">
    <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">
        Customized Fridge Magnets
      </h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Customized Fridge Magnets
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- product details -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Fridge Magnet Image -->
        <div class="col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
          <img
            src="img/fridgemagnetsproducts.jpg"
            alt="Customized Fridge Magnet"
            class="img-fluid rounded shadow-sm"
            style="width: 100%; height: 500px; object-fit: contain" />
        </div>

        <!-- Fridge Magnet Details -->
        <div class="col-md-6 mt-4 mt-md-0 wow fadeInUp" data-wow-delay="0.5s">
          <h1 class="fw-bold text-dark mb-3">
            Customized Fridge Magnets –
            <span class="text-primary">Stick Your Style</span>
          </h1>
          <h5 class="text-muted mb-3">
            Fun, functional, and fully personalized — decorate your fridge or workspace with a magnetic touch of creativity.
          </h5>

          <p class="text-secondary">
            Our customized fridge magnets are the perfect blend of form and function.
            Whether you're promoting a brand, gifting a keepsake, or just adding personality to your space, these magnets do it with charm.
            Customize with vibrant images, logos, names, or quotes — and make every surface a statement.
          </p>

          <h6 class="fw-bold mt-4">Key Features:</h6>
          <ul class="list-unstyled">
            <li>✔ Strong Magnetic Hold</li>
            <li>✔ High-Quality, Glossy Finish</li>
            <li>✔ Custom Shapes & Sizes Available</li>
            <li>✔ Ideal for Promotions, Gifts, or Home Décor</li>
            <li>✔ Print with Photos, Logos, or Quotes</li>
          </ul>

          <a
            href="#"
            class="btn btn-primary text-light fw-bold px-4 mt-3 shadow-sm"
            data-bs-toggle="modal"
            data-bs-target="#enquiryModal"
            data-product="Customized Fridge Magnet">
            Enquiry Now
          </a>
        </div>
      </div>
    </div>
  </div>


  <!-- footer -->
  <?php include('footer.php') ?>