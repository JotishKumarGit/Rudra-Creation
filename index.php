<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Rudra Creation - Home Page</title>
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
  <!-- Topbar Start -->
  <div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="fa fa-envelope text-secondary me-2"></small>
          <small>rudracreation1221@gmail.com</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center">
          <small class="far fa-clock text-secondary me-2"></small>
          <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
        </div>
      </div>
      <div class="col-lg-5 px-5 text-end">
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="fa fa-phone-alt text-secondary me-2"></small>
          <small>+91 7878466334 </small>
        </div>
        <div class="h-100 d-inline-flex align-items-center">
          <a class="btn btn-sm-square bg-white text-secondary me-1" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-sm-square bg-white text-secondary me-1" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-sm-square bg-white text-secondary me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-sm-square bg-white text-secondary me-0" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav
    class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a
      href="index.html"
      class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-secondary">Rudra Creation</h2>
    </a>
    <button
      type="button"
      class="navbar-toggler me-4"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.html" class="nav-item nav-link active">Home</a>
        <a href="about.html" class="nav-item nav-link">About</a>
        <a href="service.html" class="nav-item nav-link">Services</a>
        <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown">Products</a>
          <div class="dropdown-menu fade-up m-0">
            <a href="cotton-fabric.html" class="dropdown-item">Cotton Fabric</a>
            <a href="printed-fabric.html" class="dropdown-item">Printed Fabric</a>
            <a href="silk-fabric.html" class="dropdown-item">Silk & Satin Fabric</a>
            <a href="custom-fabric.html" class="dropdown-item">Customized Fabric Orders</a>
          </div>
        </div>
        <a href="contact.html" class="nav-item nav-link">Contact</a>
      </div>
      <a
        href="#"
        class="btn btn-primary py-4 px-lg-5 d-none d-lg-block enquiry-btn">
        Get A Quote<i class="fa fa-arrow-right ms-3"></i>
      </a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img
            class="w-100"
            src="img/baner_1.jpg"
            height="600px"
            alt="Fabric Banner 1"
            style="object-fit: cover" />
          <div class="carousel-caption d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-10 col-lg-7 text-center text-lg-start">
                  <h3
                    class="text-white text-uppercase mb-3 animated slideInDown">
                    Premium Fabrics for Every Design
                  </h3>
                  <h4
                    class="display-3 text-white mb-4 pb-3 animated slideInDown">
                    Discover quality cotton, printed, and designer fabrics at
                    Rudra Creation.
                  </h4>
                  <a
                    href="collection.html"
                    class="btn text-white text-secondary border border-pill py-3 px-5 animated slideInDown">
                    Explore Collection<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img
            class="w-100"
            src="img/baner_2.jpg"
            height="600px"
            alt="Fabric Banner 2"
            style="object-fit: cover" />
          <div class="carousel-caption d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-10 col-lg-7 text-center text-lg-start">
                  <h3
                    class="text-white text-uppercase mb-3 animated slideInDown">
                    Customized Fabric Solutions
                  </h3>
                  <h4
                    class="display-3 text-white mb-4 pb-3 animated slideInDown">
                    Tailored to meet your needs – wholesale, retail, and bulk
                    orders available.
                  </h4>
                  <a
                    href="custom-fabric.html"
                    class="btn text-white text-secondary border border-pill py-3 px-5 animated slideInDown">
                    Customize Now<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img
            class="w-100"
            src="img/baner_3.jpg"
            height="600px"
            alt="Fabric Banner 3"
            style="object-fit: cover" />
          <div class="carousel-caption d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-10 col-lg-7 text-center text-lg-start">
                  <h3
                    class="text-white text-uppercase mb-3 animated slideInDown">
                    Rudra Creation - Fabric Excellence
                  </h3>
                  <h4
                    class="display-3 text-white mb-4 pb-3 animated slideInDown">
                    Bringing vibrant designs and premium textures to life.
                  </h4>
                  <a
                    href="about.html"
                    class="btn text-white text-secondary border border-pill py-3 px-5 animated slideInDown">
                    Learn More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Us Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Image Section -->
        <div class="col-lg-6 pt-4" style="min-height: 400px">
          <div
            class="position-relative h-100 wow fadeIn"
            data-wow-delay="0.1s">
            <img
              class="position-absolute img-fluid w-100 h-100"
              src="img/fabric.jpg"
              style="object-fit: contain"
              alt="Rudra Creation - Fabric Manufacturer" />
          </div>
        </div>

        <!-- Text Section -->
        <div class="col-lg-6">
          <h6 class="text-secondary text-uppercase">// About Us //</h6>
          <h1 class="mb-4">
            <span class="text-secondary">Rudra Creation</span> — Premium
            Fabric Suppliers
          </h1>
          <p class="mb-4">
            Located in Bhilwara, Rajasthan, Rudra Creation offers high-quality
            cotton, printed, and designer fabrics for garments, décor, and
            more. We ensure durability, vibrant designs, and reliable supply
            for businesses and creatives alike.
          </p>

          <div class="row g-4 mb-3 pb-3">
            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
              <div class="d-flex">
                <div
                  class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                  style="width: 45px; height: 45px">
                  <span class="fw-bold text-secondary">01</span>
                </div>
                <div class="ps-3">
                  <h6>Wide Fabric Range</h6>
                  <span>From cotton to rayon, we offer fabrics that suit various
                    needs.</span>
                </div>
              </div>
            </div>

            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
              <div class="d-flex">
                <div
                  class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                  style="width: 45px; height: 45px">
                  <span class="fw-bold text-secondary">02</span>
                </div>
                <div class="ps-3">
                  <h6>Bulk & Custom Orders</h6>
                  <span>Serving boutiques, exporters, and brands with flexible
                    supply.</span>
                </div>
              </div>
            </div>

            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="d-flex">
                <div
                  class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                  style="width: 45px; height: 45px">
                  <span class="fw-bold text-secondary">03</span>
                </div>
                <div class="ps-3">
                  <h6>Trusted Craftsmanship</h6>
                  <span>Rooted in Rajasthan’s rich textile legacy and quality
                    standards.</span>
                </div>
              </div>
            </div>
          </div>

          <a href="about.html" class="btn bg-primary text-white py-3 px-5">
            Read More<i class="fa fa-arrow-right ms-3"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- About Us End -->

  <!-- Products Section -->
  <div class="container py-5">
    <h1 class="text-center mb-5">Our Products</h1>
    <div class="row g-4 justify-content-center">
      <!-- Card 1: -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="card h-100 text-center">
          <img
            src="img/baner_2.jpg"
            class="card-img-top img-fluid"
            alt="Tender Coconut"
            style="height: 250px; object-fit: cover" />
          <div class="card-body">
            <h5 class="card-title">Fabric</h5>
            <div
              class="d-flex flex-column flex-sm-row justify-content-center gap-2">
              <a
                href="#"
                class="btn text-secondary border border-pill enquiry-btn"
                data-product="Tender Coconut"
                data-bs-toggle="modal"
                data-bs-target="#enquiryModal">Enquiry</a>
              <a
                href="Customized-Coffee-Mugs.php"
                class="btn btn-outline-primary">Details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Responsive image adjustments -->
  <style>
    @media (max-width: 576px) {
      .card-img-top {
        height: 200px !important;
      }
    }

    @media (max-width: 768px) {
      .card-img-top {
        height: 220px !important;
      }
    }
  </style>
  <!-- Products  Section End -->

  <!-- Services Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">// Our Services //</h6>
        <h1 class="mb-5">What We Offer</h1>
      </div>
      <div class="row g-4">

        <!-- Card 1: Fabric Manufacturing -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-card bg-light text-center p-4 h-100">
            <div class="mb-4">
              <i class="fa fa-industry fa-3x text-primary"></i>
            </div>
            <h5 class="mb-3">Fabric Manufacturing</h5>
            <p>
              High-quality cotton, rayon, and blended fabrics produced with precision and care.
            </p>
            <a href="contact.html" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
          </div>
        </div>

        <!-- Card 2: Fabric Printing -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-card bg-light text-center p-4 h-100">
            <div class="mb-4">
              <i class="fa fa-print fa-3x text-primary"></i>
            </div>
            <h5 class="mb-3">Fabric Printing</h5>
            <p>
              Custom printed fabrics using modern digital and screen printing techniques.
            </p>
            <a href="contact.html" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
          </div>
        </div>

        <!-- Card 3: Bulk Supply & Export -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-card bg-light text-center p-4 h-100">
            <div class="mb-4">
              <i class="fa fa-boxes fa-3x text-primary"></i>
            </div>
            <h5 class="mb-3">Bulk Orders & Export</h5>
            <p>
              Reliable supply for wholesalers, boutiques, and exporters with timely delivery.
            </p>
            <a href="contact.html" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
          </div>
        </div>

        <!-- Card 4: Custom Design Services -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="service-card bg-light text-center p-4 h-100">
            <div class="mb-4">
              <i class="fa fa-palette fa-3x text-primary"></i>
            </div>
            <h5 class="mb-3">Custom Design Support</h5>
            <p>
              Assistance with fabric patterns, colors, and textures tailored to your needs.
            </p>
            <a href="contact.html" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Services End -->

<!-- FAQ Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="text-secondary text-uppercase">// FAQs //</h6>
      <h1 class="mb-5">Frequently Asked Questions</h1>
    </div>

    <div class="accordion" id="faqAccordion">

      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
            1. What types of fabric does Rudra Creation offer?
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We offer a wide range of fabrics including cotton, rayon, satin, blended, printed, and customized textiles.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
            2. Do you provide custom printing on fabrics?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we specialize in custom fabric printing, including digital, screen, and block printing options.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
            3. What is your minimum order quantity (MOQ)?
          </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Our MOQ varies depending on the type of fabric and customization. Please contact us for specific details.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
            4. Can I request fabric samples before placing a bulk order?
          </button>
        </h2>
        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we provide swatches or sample pieces for quality and design approval before confirming bulk orders.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
            5. Do you accept custom designs or patterns?
          </button>
        </h2>
        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Absolutely. We can work with your designs or help create custom patterns tailored to your brand.
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq6">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
            6. Where are you located?
          </button>
        </h2>
        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We are based in Bhilwara, Rajasthan — one of India's leading textile production hubs.
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq7">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
            7. Do you ship outside India?
          </button>
        </h2>
        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we export fabrics globally. Please reach out to discuss international shipping options and charges.
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq8">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8">
            8. How long does it take to fulfill an order?
          </button>
        </h2>
        <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Order timelines depend on quantity and customization, but most orders are fulfilled within 7–15 working days.
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq9">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9">
            9. Do you offer bulk pricing or discounts?
          </button>
        </h2>
        <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we offer competitive pricing and discounts on bulk orders. Contact us for a custom quote.
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq10">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10">
            10. How can I place an order with Rudra Creation?
          </button>
        </h2>
        <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            You can place an order by contacting us via phone, email, or our website contact form. We'll guide you through the process.
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- FAQ End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">// Contact Us //</h6>
        <h1 class="mb-5">Contact For Any Query</h1>
      </div>
      <div class="row g-4">
        <div class="col-12">
          <div class="row gy-4">
            <div class="col-md-4">
              <div
                class="bg-light d-flex flex-column justify-content-center p-4">
                <h5 class="text-uppercase">// Customized Orders //</h5>
              </div>
            </div>
            <div class="col-md-4">
              <div
                class="bg-light d-flex flex-column justify-content-center p-4">
                <h5 class="text-uppercase">// Product Inquiries //</h5>
              </div>
            </div>
            <div class="col-md-4">
              <div
                class="bg-light d-flex flex-column justify-content-center p-4">
                <h5 class="text-uppercase">// After-Sales Support //</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
          <iframe
            class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28050.833890166876!2d77.29319042882383!3d28.498988162847855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sG%2FF%20D%20-19%20Gali%20Number%20Molarband%20%2CNew%20Delhi%20-44!5e0!3m2!1sen!2sin!4v1754907088221!5m2!1sen!2sin"
            frameborder="0"
            style="min-height: 350px; border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"></iframe>
        </div>
        <div class="col-md-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <p class="mb-4">
              We'd love to hear from you! Whether you're looking for custom
              carpet solutions, product details, or need support, simply reach
              out through the form below. Our team will respond promptly to
              assist you.
            </p>
            <form onsubmit="sendToWhatsApp(); return false;">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      placeholder="Your Name" />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Your Email" />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="message"
                      name="message"
                      style="height: 100px"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button
                    class="btn text-secondary border border-pill w-100 py-3"
                    type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- Footer Start -->
  <div
    class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
    data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <!-- Contact Info -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Contact Us</h4>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt me-3"></i>Bhilwara, Rajasthan,
            India
          </p>
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i>+91 7878466334
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope me-3"></i>rudracreation1221@gmail.com
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <!-- Opening Hours -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Opening Hours</h4>
          <h6 class="text-light">Monday - Friday:</h6>
          <p class="mb-3">09.00 AM - 09.00 PM</p>
          <h6 class="text-light">Saturday - Sunday:</h6>
          <p class="mb-0">09.00 AM - 12.00 PM</p>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Quick Links</h4>
          <a class="btn btn-link" href="index.html">Home</a>
          <a class="btn btn-link" href="about.html">About Us</a>
          <a class="btn btn-link" href="collection.html">Products</a>
          <a class="btn btn-link" href="contact.html">Contact</a>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Newsletter</h4>
          <p>
            Subscribe to get updates on our latest fabric collections and
            offers.
          </p>
          <div class="position-relative mx-auto" style="max-width: 400px">
            <input
              class="form-control border-0 w-100 py-3 ps-4 pe-5"
              type="text"
              placeholder="Your email" />
            <button
              type="button"
              class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
              SignUp
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="border-bottom" href="#">Rudra Creation</a>, All
            Rights Reserved. <span>Managed by <a href="https://trade4export.com/" class="text-primary">Trade4Export</a></span>

          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="footer-menu">
              <a href="index.html">Home</a>
              <a href="#">Privacy</a>
              <a href="#">Help</a>
              <a href="#">FAQs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
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