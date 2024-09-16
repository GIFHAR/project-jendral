<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jendral Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    {{-- <link href="{{asset('img/favicon.png')}}" rel="icon"> --}}

    <!-- CSS here -->
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

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body class="body-gray-bg">
    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->


    <!-- Start Extra Info -->
    <div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="icon-close"></i>
            </button>
        </div>
        <div class="logo-side">
            <a href="index.html"><img src="{{asset('assets/img/headerjendral/logojendral.png')}}" alt="Logo"">
        </div>
        <div class="side-info">
            <div class="content-box">
                <h3>Welcome to<br> Jendral Import</h3>
            </div>
            <!--Start Sidebar Contact Info -->
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
            <!--End Sidebar Contact Info -->

        </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- End Extra Info -->

    <!--Start Main Header One -->
    <header class="main-header main-header-one">
        <div id="sticky-header" class="menu-area">
            <div class="container">
                <div class="main-header-one__inner">

                    <!--Start Main Header one Inner Left -->
                    <div class="main-header-one__inner-left">
                        <div class="logo-box-one">
                            <a href="index.html">
                                <img src="{{asset('assets/img/headerjendral/logojendralHijau.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!--End Main Header one Inner Left -->

                    <!--Start Main Header one Inner Right -->
                    <div class="main-header-one__inner-right">

                        <div class="main-header-one__inner-right__bottom">

                            <div class="menu-area__inner">
                                <div class="mobile-nav-toggler">
                                    <i class="fas fa-bars"></i>
                                </div>
                                <div class="menu-wrap">
                                    <nav class="menu-nav">
                                        <div class="navbar-wrap main-menu">
                                            <ul class="navigation">
                                                <li><a href="{{ route('home')}}">Home</a>

                                                </li>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="{{ route('services')}}">Services</a>
                                                </li>
                                                <li><a href="{{ route('pricing')}}">Pricing</a></li>
                                                <li><a href="{{ route('tracking')}}">Tracking</a></li>
                                                <li><a href="{{ route('contact')}}">Contacts</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>

                            <div class="main-menu-right-box-one">
                                {{-- <div class="search-box-one">
                                    <a href="#" class="main-menu__search search-toggler">
                                        <span class="icon-search-interface-symbol"></span>
                                    </a>
                                </div> --}}
                                <div class="side-content-button-one">
                                    <a class="menu-tigger" href="#">
                                        <span class="line"></span>
                                        <span class="line two"></span>
                                    </a>
                                </div>
                            </div>


                        </div>
                        <!--End Main Header one Inner Right Bottom-->
                    </div>
                    <!--End Main Header one Inner Right -->


                </div>
            </div>
        </div>

        <!--Start Mobile Menu  -->
        <div class="mobile-menu">
            <nav class="menu-box">
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <div class="nav-logo">
                    <a href="index.html"><img src="assets/img/resource/mobile-menu-logo.png" alt="Logo"></a>
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

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Contact us</h4>
                </div>
                <h2>
                    Get in Touch With Us
                </h2>
            </div>
            <div class="row">

                <div class="col-xl-4">
                    <div class="contact-one__list-item">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-location-pin"></span>
                                </div>
                                <div class="text">
                                    <h4>Address</h4>
                                    <p>
                                        Dhaka 102, 8000 sent behaibior utl<br>1216, road 45 house of street
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call-1"></span>
                                </div>
                                <div class="text">
                                    <h4>Lets Talk us</h4>
                                    <p>Phone number: <a href="tel:32566-800-890">+32566 - 800 - 890</a></p>
                                    <p>Fax: <a href="tel:1234-58963-007">1234 -58963 - 007</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <h4>Send us email</h4>
                                    <p>
                                        <a href="mailto:demo0023yourmailhotmail.com">demo0023yourmailhotmail.com</a>
                                    </p>
                                    <p>
                                        <a href="mailto:demo23yourmail.com">demo23yourmail.com</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="contact-one__form">
                        <form id="contact-form" action="assets/inc/mail.php" method="POST">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Full name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="number" placeholder="Mobile" name="number">
                                    </div>
                                </div>
                                {{-- <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Company" name="company">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Messege"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">Submit Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>

                <div class="col-xl-2">
                    <div class="contact-one__socel-link">
                        <div class="contact-one__socel-link-inner">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="color1">
                                        <span class="icon-facebook-app-symbol"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="color2">
                                        <span class="icon-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--Contact One End-->



    <!--Start Google Map One-->
    <section class="google-map-one">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map-one__map" allowfullscreen></iframe>
    </section>
    <!--End Google Map One-->




    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/01-ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/02-bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/03-jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/04-swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/05-jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/06-jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/07-jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/08-slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/09-wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/10-jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/js/11-jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/12-TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/marquee/marquee.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/odometer/odometer.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
