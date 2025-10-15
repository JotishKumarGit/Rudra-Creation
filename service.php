<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SadGuru Arts And Craft</title>
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
    .team-item img {
      height: 250px;
      /* set uniform height */
      width: 100%;
      /* full width of the container */
      object-fit: cover;
      /* crop image to fill without stretching */
    }
  </style>
</head>

<body>
  <!-- Spinner Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-primary"
      style="width: 3rem; height: 3rem"
      role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- page-header -->
  <div
    class="container-fluid page-header mb-5 py-5"
    style="
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
          url(img/keychainproduct.jpg) center center no-repeat;
        background-size: cover;
      ">
    <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Services
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Service Start -->
  <div class="container-xxl service py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">// Our Services //</h6>
        <h1 class="mb-5">What We Offer</h1>
      </div>
      <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-lg-4">
          <div class="nav w-100 nav-pills me-4">
            <!-- Tab 1 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
              data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
              <i class="fa fa-mug-hot fa-2x me-3"></i>
              <h4 class="m-0">Customized Coffee Mugs</h4>
            </button>
            <!-- Tab 2 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
              data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
              <i class="fa fa-key fa-2x me-3"></i>
              <h4 class="m-0">Personalized Keychains</h4>
            </button>
            <!-- Tab 3 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
              data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
              <i class="fa fa-magnet fa-2x me-3"></i>
              <h4 class="m-0">Custom Fridge Magnets</h4>
            </button>
            <!-- Tab 4 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
              data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
              <i class="fa fa-cut fa-2x me-3"></i>
              <h4 class="m-0">Laser Cutting & Printing</h4>
            </button>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="tab-content w-100">
            <!-- Tab 1: Coffee Mugs -->
            <div class="tab-pane fade show active" id="tab-pane-1">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100"
                      src="img/mugs.jpg" style="object-fit: cover" alt="Customized Coffee Mugs" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Customized Coffee Mugs</h3>
                  <p class="mb-4">
                    High-quality ceramic mugs with vibrant, long-lasting prints — perfect for gifting, branding, or personal use.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Premium Quality</p>
                  <p><i class="fa fa-check text-success me-3"></i>Fade-Resistant Prints</p>
                  <p><i class="fa fa-check text-success me-3"></i>Perfect for Gifting</p>
                  <a href="contact.html" class="btn text-secondary border border-pill py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 2: Keychains -->
            <div class="tab-pane fade" id="tab-pane-2">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100"
                      src="img/keychain.jpg" style="object-fit: cover" alt="Personalized Keychains" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Personalized Keychains</h3>
                  <p class="mb-4">
                    Durable and stylish keychains customized with names, photos, or logos to match your personality.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Multiple Material Options</p>
                  <p><i class="fa fa-check text-success me-3"></i>Custom Shapes & Sizes</p>
                  <p><i class="fa fa-check text-success me-3"></i>Great for Branding</p>
                  <a href="contact.html" class="btn text-secondary border border-pill py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 3: Fridge Magnets -->
            <div class="tab-pane fade" id="tab-pane-3">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100"
                      src="img/fridgemagnets.jpg" style="object-fit: cover" alt="Custom Fridge Magnets" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Custom Fridge Magnets</h3>
                  <p class="mb-4">
                    Eye-catching magnets with vibrant prints — ideal for souvenirs, gifts, and promotional use.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Vivid & Long-Lasting</p>
                  <p><i class="fa fa-check text-success me-3"></i>Custom Sizes Available</p>
                  <p><i class="fa fa-check text-success me-3"></i>Perfect Keepsakes</p>
                  <a href="contact.html" class="btn text-secondary border border-pill py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 4: Laser Cutting & Printing -->
            <div class="tab-pane fade" id="tab-pane-4">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100"
                      src="img/lasercutting.jpg" style="object-fit: cover" alt="Laser Cutting & Printing" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Laser Cutting & Sublimation Printing</h3>
                  <p class="mb-4">
                    Precision laser cutting and vibrant sublimation printing for customized products of the highest quality.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>High Precision Cutting</p>
                  <p><i class="fa fa-check text-success me-3"></i>Full-Color Printing</p>
                  <p><i class="fa fa-check text-success me-3"></i>Wide Material Support</p>
                  <a href="contact.html" class="btn text-secondary border border-pill py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>