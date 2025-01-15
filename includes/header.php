<?php
// Get the current page's filename
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Global Pathfields</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!-- event slider library start -->

    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- event slider library end  -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/style2.scss" rel="stylesheet"> -->
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index_responsive.css">
    
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>+91 9643743907</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>globalpathfields@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/global-pathfields/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/globalpathfields/?hl=en"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <!-- <a href="index.php" class="navbar-brand">Helpz</a> -->
            <a href="index.php" class="navbar-brand"><img src="https://www.globalpathfields.org/img/logo_global.jpg" alt=""></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link <?= $currentPage === 'index.php' ? 'active' : '' ?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?= $currentPage === 'about.php' ? 'active' : '' ?>">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Focus Areas</a>
                        <div class="dropdown-menu">
                            <a href="childrights.php" class="dropdown-item <?= $currentPage === 'childrights.php' ? 'active' : '' ?>">
                                Childs Rights & Education</a>
                            <a href="socialdevelopment.php" class="dropdown-item <?= $currentPage === 'socialdevelopment.php' ? 'active' : '' ?>">
                                Skill & Social Development</a>
                            <a href="publichealth.php" class="dropdown-item <?= $currentPage === 'publichealth.php' ? 'active' : '' ?></a>">
                                Public Health & Nutrition</a>
                            <a href="environment.php" class="dropdown-item <?= $currentPage === 'environment.php' ? 'active' : '' ?>">
                                Environment & Sustainability</a>
                            <a href="monitoring.php" class="dropdown-item <?= $currentPage === 'monitoring.php' ? 'active' : '' ?>">
                                Monitoring,
                                Evaluation
                                and Impact
                                Assessment</a>
                            
                        </div>
                    </div>
                    <a href="partners.php" class="nav-item nav-link <?= $currentPage === 'partners.php' ? 'active' : '' ?>">Partners</a>
                    <a href="resources.php" class="nav-item nav-link <?= $currentPage === 'resources.php' ? 'active' : '' ?>">Resources</a>
                    <a href="eventGallery.php" class="nav-item nav-link <?= $currentPage === 'eventGallery.php' ? 'active' : '' ?>">Events Gallery</a>

                    <a href="contact.php" class="nav-item nav-link <?= $currentPage === 'contact.php' ? 'active' : '' ?>">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->