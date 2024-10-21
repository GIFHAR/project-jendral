<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ 'Jendral Import' . ' | ' . $title ?? '' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/01-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/02-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/03-jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/04-nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/05-odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/06-swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/07-animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/08-custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/09-slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/10-icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom-animate/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jarallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/odometer/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css-new/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @yield('style')
</head>

<body class="body-gray-bg">
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>

    <div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="icon-close"></i>
            </button>
        </div>

        <div class="logo-side">
            <a href="{{ route('home') }}"><img src="{{asset('assets/img/header-jendral/logo-jendral.png')}}" alt="Logo">
        </div>
        <div class="side-info">
            <div class="content-box">
                <h3>Welcome to<br> Jendral Import</h3>
            </div>

            <div class="sidebar-contact-info">
                <ul>
                    <li>
                        <div class="icon">
                            <span class="icon-open-mail"></span>
                        </div>
                        <div class="text">
                            <p><a href="mailto:jendralimport@gmail.com">jendralimport@gmail.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-map-marker-alt"></span>
                        </div>
                        <div class="text">
                            <p><a href="ALAMAT">ALAMAT</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fab fa-instagram"></span>
                        </div>
                        <div class="text">
                            <p>JENDRAL IMPORT</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fab fa-facebook"></span>
                        </div>
                        <div class="text">
                            <p>JENDRAL IMPORT</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fab fa-youtube"></span>
                        </div>
                        <div class="text">
                            <p>JENDRAL IMPORT</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fab fa-tiktok"></span>
                        </div>
                        <div class="text">
                            <p>JENDRAL IMPORT</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fab fa-whatsapp"></span>
                        </div>
                        <div class="text">
                            <p>KONTAK WA KONSULTASI</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fab fa-whatsapp"></span>
                        </div>
                        <div class="text">
                            <p>KONTAK WA PEMESANAN</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="offcanvas-overly"></div>

    <div class="page-wrapper">
        <!--Start Main Header One -->
        <header class="main-header main-header-one style4">
            <div id="sticky-header" class="menu-area">
                <div class="container">
                    <div class="main-header-one__inner">

                        <!--Start Main Header one Inner Left -->
                        <div class="main-header-style4__left">
                            <div class="logo-box-one">
                                <a href="{{ route('home') }}">
                                    <img src="{{asset('assets/img/header-jendral/logo-jendral-hijau.png')}}" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <!--End Main Header one Inner Left -->

                        <!--Start Main Header Style4 Middle -->
                        <div class="main-header-style4__middle">
                            <div class="menu-area__inner">
                                <div class="mobile-nav-toggler">
                                    <i class="fas fa-bars"></i>
                                </div>
                                <nav class="menu-nav">
                                    <div class="navbar-wrap main-menu">
                                        <ul class="navigation">
                                            <li><a href="{{ route('home')}}">Home</a>

                                            </li>
                                            <li><a href="{{ route('about')}}">About Us</a></li>
                                            <li><a href="{{ route('services')}}">Services</a>
                                            </li>
                                            <li><a href="{{ route('pricing')}}">Pricing</a></li>
                                            <li><a href="{{ route('tracking')}}">Tracking</a></li>
                                            <li><a href="{{ route('contact')}}">Contacts</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <div class="main-menu-right-box-one">
                                <div class="side-content-button-one">
                                    <a class="menu-tigger" href="#">
                                        <span class="line"></span>
                                        <span class="line two"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!--End Main Header Style4 Middle -->
                    </div>
                </div>
            </div>

            <!--Start Mobile Menu  -->
            <div class="mobile-menu">
                <nav class="menu-box">
                    <div class="close-btn"><i class="fas fa-times"></i></div>
                    <div class="nav-logo">
                        <a href="index.html">
                            <img src="{{asset('assets/img/header-jendral/logo-jendral-hijau.png')}}" alt="Logo">
                        </a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <div class="social-links">
                        <ul class="clearfix list-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-backdrop"></div>
            <!-- End Mobile Menu -->

        </header>
        <!--End Main Header One -->
