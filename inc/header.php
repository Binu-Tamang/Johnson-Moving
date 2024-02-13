<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="assets/img/jm-logo.png">
    <title>Johnson Moving And Storage </title>
</head>

<body>

    <header class="main-header">
        <div class="nav-up">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-up-contact">
                            <ul class="navbar-contact">
                                <li><a href="tel:301-868-0320"><i class="fa-solid fa-phone"></i> 301-868-0320</a></li>
                                <li><a href="tel:301-894-4215"><i class="fa-solid fa-phone"></i> 301-894-4215</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-social-icon">
                            <ul class="nav-social-list">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/johnsonslogo.jpg" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav " id="main-menu">
                            <li class="nav-item ">
                                <a class="nav-link btn-li" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-li" href="about-us.php">About Us</a>
                            </li>

                            <li class="nav-item ">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle btn-li " href="services.php" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Our Services <i class="fa-solid fa-sort-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="services.php">Our Services</a></li>
                                        <li><a class="dropdown-item" href="service-detail.php">Moving</a></li>
                                        <li><a class="dropdown-item" href="service-detail.php">Storage</a></li>
                                        <li><a class="dropdown-item" href="service-detail.php">Packing</a></li>
                                        <li><a class="dropdown-item" href="service-detail.php">Crafting</a></li>
                                        <li><a class="dropdown-item" href="service-detail.php">Shipping</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown mega-menu">
                                    <a class="nav-link dropdown-toggle btn-li" href="#" id="areaServeDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Area We Serve <i class="fa-solid fa-sort-down"></i>
                                    </a>
                                    <div class="dropdown-menu mega-menu" aria-labelledby="areaServeDropdown">
                                        <!-- <strong>City 1</strong> -->
                                        <div class="row d-block d-md-flex">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="mega-menu-a">
                                                    <div class="city-name-list">
                                                        <a class="dropdown-item" href="#">Location 1A</a>
                                                        <a class="dropdown-item" href="#">Location 1B</a>
                                                        <a class="dropdown-item" href="#">Location 1C</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="mega-menu-a">
                                                    <div class="city-name-list">
                                                        <a class="dropdown-item" href="#">Location 1A</a>
                                                        <a class="dropdown-item" href="#">Location 1B</a>
                                                        <a class="dropdown-item" href="#">Location 1C</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="mega-menu-a">
                                                    <div class="city-name-list">
                                                        <a class="dropdown-item" href="#">Location 1A</a>
                                                        <a class="dropdown-item" href="#">Location 1B</a>
                                                        <a class="dropdown-item" href="#">Location 1C</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn-li" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-li" href="#">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-li" href="#">FAQs</a>
                            </li>
                            <li class="nav-item d-block d-md-none">
                                <div class="qoute-btn">
                                    <a href="#">Request A Qoute</a>
                                </div>
                            </li>
                        </ul>
                        <div class="qoute-btn d-none d-md-block">
                            <a href="#">Request A Qoute</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>