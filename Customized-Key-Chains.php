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
      url(img/keychainproduct.jpg) center center no-repeat;
    background-size: cover;
  ">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                Customized Key Chains
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
                        Customized Key Chains
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- products details -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Key Chain Image -->
                <div class="col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <img src="img/keychainproduct.jpg" alt="Customized Key Chain" class="img-fluid rounded shadow-sm" style="width: 100%; height: 500px; object-fit: contain" />
                </div>

                <!-- Key Chain Details -->
                <div class="col-md-6 mt-4 mt-md-0 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="fw-bold text-dark mb-3">
                        Customized Key Chains –
                        <span class="text-primary">Pocket-Sized Personality</span>
                    </h1>
                    <h5 class="text-muted mb-3">
                        Unique, compact, and practical — carry your memories, brand, or message everywhere you go.
                    </h5>

                    <p class="text-secondary">
                        Our customized key chains are perfect for personal use, gifting, or promotions.
                        Designed with quality materials and eye-catching prints, they add flair to your keys, bags, or giveaways.
                        Personalize with names, logos, quotes, or photos to create a product that’s as unique as you are.
                    </p>

                    <h6 class="fw-bold mt-4">Key Features:</h6>
                    <ul class="list-unstyled">
                        <li>✔ Durable & Lightweight Materials</li>
                        <li>✔ Vivid, Fade-Resistant Printing</li>
                        <li>✔ Available in Multiple Shapes & Styles</li>
                        <li>✔ Perfect for Branding, Gifts, or Personal Keepsakes</li>
                        <li>✔ Customizable with Logos, Text, or Photos</li>
                    </ul>

                    <a href="#" class="btn btn-primary text-light fw-bold px-4 mt-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-product="Customized Key Chain">
                        Enquiry Now
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>