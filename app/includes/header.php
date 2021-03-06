<?php use GreenEye\App\Config\Config; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title  -->
    <title><?php Config::getPageTitle(); ?> | GreenEye</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="https://res.cloudinary.com/dv0xm4c4v/image/upload/v1555586044/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/dv0xm4c4v/image/upload/v1555586044/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/dv0xm4c4v/image/upload/v1555586044/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://res.cloudinary.com/dv0xm4c4v/image/upload/v1555586044/apple-touch-icon.png">
    <link rel="manifest" href="https://res.cloudinary.com/dv0xm4c4v/raw/upload/v1555586646/site.webmanifest">
    <meta name="apple-mobile-web-app-title" content="greenEye">
    <meta name="application-name" content="greenEye">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#21a32f">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Asap:500,600,700" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/greeneye-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/card.min.css" />
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/style.min.css" />
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/main.min.css" />
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="https://res.cloudinary.com/dv0xm4c4v/image/upload/v1555559306/preloader.svg" class="centered" alt="">
    </div>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area d-none d-md-block">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p>Welcome to <span><?php echo SITENAME ?></span></p>
                            <p>
                                Opening Hours : Monday to Sunday - 10am to
                                12pm & 05pm to 07pm Contact : <span>+91-123-456-7890</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg navbar-dark">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">
                                    <img src="https://res.cloudinary.com/dv0xm4c4v/image/upload/v1555559219/logo.png" alt="Logo" />
                                </a>

                                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#gReeneyeNavMenu" aria-controls="gReeneyeNavMenu" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="gReeneyeNavMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item <?php Config::Title('index'); ?>">
                                            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
                                        </li>
                                        <li class="nav-item <?php Config::Title('about-us'); ?>">
                                            <a class="nav-link" href="<?php echo ROOT_URL; ?>about-us">About Us</a>
                                        </li>
                                        <li class="nav-item <?php Config::Title('services'); ?>">
                                            <a class="nav-link" href="<?php echo ROOT_URL; ?>services">Services</a>
                                        </li>
                                        <li class="nav-item <?php Config::Title('contact-us'); ?>">
                                            <a class="nav-link" href="<?php echo ROOT_URL; ?>contact-us">Contact</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href="<?php echo ROOT_URL; ?>check-status" class="text-uppercase btn greeneye-appoint-btn mr-3">check status</a>
                                    <a href="<?php echo ROOT_URL; ?>book-appointment" class="text-uppercase btn greeneye-appoint-btn  ml-3">book appointment</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->