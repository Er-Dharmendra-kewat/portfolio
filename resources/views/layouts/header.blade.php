<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dharmendra Kewat-Full Stack Developer</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('img/favicon.png') }}" rel="icon">
    <link href="{{ url('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ url('img/dkimage.jpg') }}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="{{ url('/') }}">Dharmendra Kewat</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="{{ url('/') }}" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link scrollto"><i class="bx bx-user"></i>
                            <span>About</span></a></li>
                    <li><a href="{{ url('/resume') }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resume</span></a></li>

                    <li><a href="{{ url('/blog') }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Blog</span></a></li>
                    <li><a href="{{ url('/tutorial') }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Tutorials</span></a></li>

                    <li><a href="{{ url('/portfolio') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portfolio</span></a></li>
                    <li><a href="{{ url('/service') }}" class="nav-link scrollto"><i class="bx bx-server"></i>
                            <span>Services</span></a></li>
                    <li><a href="{{ url('/contact') }}" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
