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
            <a href="index.html"><img src="{{asset('assets/img/header-jendral/logo-jendral.png')}}" alt="Logo" style="max-width: 100%; height: 220px;">
        </div>
        <div class="side-info">

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


    <div class="page-wrapper">

      <!--Start Main Header One -->
    <header class="main-header main-header-one" style="background-image: url('{{asset('assets/img/header-jendral/box-header.png')}}'); background-size: cover; background-position: center; height: calc(644px * (150 / 644));">
        <div id="sticky-header" class="menu-area">
            <div class="container">
                <div class="main-header-one__inner">

                    <!--Start Main Header one Inner Left -->
                    <div class="main-header-one__inner-left">
                        <a href="index.html">
                            <img src="{{asset('assets/img/header-jendral/logojendral.png')}}" alt="Logo" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                    <!--End Main Header one Inner Left -->

                    <!--Start Main Header one Inner Right -->
                    <div class="main-header-one__inner-right">

                        <!--Start Main Header one Inner Right Bottom-->
                        <div class="main-header-one__inner-right__bottom">
                            <div class="menu-area__inner" style="padding-top: 20px;">
                                <div class="mobile-nav-toggler">
                                    <i class="fas fa-bars"></i>
                                </div>
                                <div class="menu-wrap">
                                    <nav class="menu-nav">
                                        <div class="navbar-wrap main-menu">
                                            <ul class="navigation">
                                                <li><a href="{{ route('home')}}">Home</a></li>
                                                <li><a href="{{ route('aboutus')}}">About Us</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('services')}}">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('konsultasibisnis')}}">Konsultasi Bisnis & Import</a></li>
                                                        <li><a href="{{ route('jasapembelian')}}">Jasa Pembelian</a></li>
                                                        <li><a href="{{ route('jasawarehouse')}}">Jasa Warehouse</a></li>
                                                        <li><a href="{{ route('jasapengiriman')}}">Jasa Pengiriman</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('pricing')}}">Pricing</a></li>
                                                <li><a href="{{ route('tracking')}}">Tracking</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>

                            <div class="main-menu-right-box-one">
                                <div class="search-box-one" style="padding-top: 20px;">
                                    <a href="#" class="main-menu__search search-toggler">
                                        <span class="icon-search-interface-symbol"></span>
                                    </a>
                                </div>
                                <div class="side-content-button-one" style="padding-top: 20px;">
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
    </header>
    <!--End Main Header One -->



        <!--Start Banner One-->
        <section class="banner-one" style="background-image: url('{{ asset('assets/img/home-jendral/background-utama.png') }}');  background-size: cover; background-position: center;">
            <div class="container">
                <div class="banner-one__content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sub-title">
                        <h5>SELAMAT DATANG</h5>
                    </div>
                    <div class="big-title">
                        <h1>NIKMATI KENYAMANAN DALAM<br> PROSES IMPORT DAN FLEKSIBILITAS<br> UNTUK TRAKSAKSI BISNIS ANDA<br> BERSAMA JENDRAL IMPORT</h1>
                    </div>
                </div>
            </div>
            <!-- Gallery of 7 images -->
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="{{ asset('assets/img/home-jendral/konsul.png') }}" alt="Gambar 1">
                    <div class="caption">Konsultasi Bisnis</div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/img/home-jendral/jasa-pembelian.png') }}" alt="Gambar 2">
                    <div class="caption">Jasa Pembelian</div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/img/home-jendral/cek-harga.png') }}" alt="Gambar 3">
                    <div class="caption">Cek Harga</div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/img/home-jendral/jasa-warehouse.png') }}" alt="Gambar 4">
                    <div class="caption">Jasa Warehouse</div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/img/home-jendral/udara.png') }}" alt="Gambar 5">
                    <div class="caption">Pengiriman Udara</div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/img/home-jendral/laut.png') }}" alt="Gambar 6">
                    <div class="caption">Pengiriman Laut</div>
                </div>

                <div class="gallery-item">
                    <img src="{{ asset('assets/img/home-jendral/tracking.png') }}" alt="Gambar 7">
                    <div class="caption">Tracking</div>
                </div>
            </div>




        </section>

        <!--End Banner One-->

        <!-- Live Tracking Box -->
        <section class="container live-tracking-box">
            <div class="text-and-inputs">
                <div class="text-content">
                    <h1>Live Tracking</h1>
                    <p>Silahkan masukkan kode resi Anda disini</p>
                </div>
                <div class="input-group">
                    <input type="text" id="noResi" placeholder="No. Resi" aria-label="No. Resi">
                    <input type="text" id="kodeMarking" placeholder="Kode Marking" aria-label="Kode Marking">
                    <button id="cekResi">Cek Resi</button>
                </div>
            </div>
        </section>

        <!--text kenapa harus jendral -->

        <section>
            <div class="container-textkenapajendral">
                <h1>Kenapa <span class="highlight">Jenderal Import</span> <br> Menjadi Partner Terbaik Import Anda</h1>
                <p>Dipercayai oleh ratusan pelanggan baik individu maupun bisnis <br> sebagai partner import mereka. Dan berikut beberapa kelebihan <br> pelayanan yang kami berikan.</p>
            </div>
        </section>


        <section>
            <div class="container-keunggulanjendral">
                <!-- Swiper Container -->
                <div id="swiper-benefit" class="swiper-container-keunggulanjendral">
                    <div class="swiper-wrapper-keunggulanjendral">
                        <div class="swiper-slide-keunggulanjendral">
                            <img src="{{ asset('assets/img/landingpage/sea-lcl.png') }}" alt="Picture 1" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide-keunggulanjendral">
                            <img src="{{ asset('assets/img/landingpage/sea-lcl.png') }}" alt="Picture 2" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide-keunggulanjendral">
                            <img src="{{ asset('assets/img/landingpage/sea-lcl.png') }}" alt="Picture 3" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide-keunggulanjendral">
                            <img src="{{ asset('assets/img/landingpage/sea-lcl.png') }}" alt="Picture 4" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide-keunggulanjendral">
                            <img src="{{ asset('assets/img/landingpage/sea-lcl.png') }}" alt="Picture 5" class="picture-keunggulanjendral">
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination-keunggulanjendral"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next-keunggulanjendral"></div>
                <div class="swiper-button-prev-keunggulanjendral"></div>
            </div>
        </section>


        {{-- <section>
            <div class="container-textmelayanijasa">
                <h1>Melayani Jasa Import Barang</h1>
                <div class="highlightmelayanijasa">Dari China Terpercaya</div>
                <p>Selain sebagai jasa ekspedisi China ke Indonesia, <br> kami juga memberikan layanan lainnya seperti: </p>
            </div>
        </section>

        <section class="custom-gallery-jasajendral">
            <div class="row-jasajendral">
                <div class="image-container-jasajendral">
                    <img src="assets\img\landingpage\sea-lcl.png" alt="Deskripsi Gambar 1">
                    <p>Layanan Pengiriman barang impor via laut dengan jumlah kecil/sedang</p>
                </div>
                <div class="image-container-jasajendral">
                    <img src="assets\img\landingpage\sea-fcl.png" alt="Deskripsi Gambar 2">
                    <p>Layanan Pengiriman barang impor via laut dengan 1 kontainer full</p>
                </div>
            </div>
            <div class="row-jasajendral">
                <div class="image-container-jasajendral">
                    <img src="assets\img\landingpage\air-freight.png" alt="Deskripsi Gambar 3">
                    <p>Layanan kirim barang import dari china via udara</p>
                </div>
                <div class="image-container-jasajendral">
                    <img src="assets\img\landingpage\jasa-belanja.png" alt="Deskripsi Gambar 4">
                    <p>Layanan jasa belanja china membantu pembelian barang</p>
                </div>
            </div>
            <div class="row-jasajendral center-image-jasajendral">
                <div class="image-container-jasajendral">
                    <img src="assets\img\landingpage\tf-to-rmb.png" alt="Deskripsi Gambar 5">
                    <p>Layanan jasa titip transfer RMB ke marketplace China</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container-textprosesimpor">
                <h1>Proses Impor</h1>
                <div class="highlightprosesimpor">Kirim Barang Dari China</div>
            </div>
        </section> --}}
{{--
        <section>
        <a href="https://wa.link/7db3pi" class="whatsapp-button" target="_blank">
            <span class="whatsapp-popup">Konsultasi Gratis Sekarang</span>
            <div class="whatsapp-icon">
                <img src="assets\img\konsultasi-bisnis-jendral\wa-logo-putih.png" alt="WhatsApp" />
            </div>
        </a>
        </section> --}}

        <!--Start Project One-->
        <section class="project-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="project-one__content-box">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h4>Jendral Import</h4>
                                </div>
                                <h2>
                                    Melayani Jasa Import Barang<br>Dari China Terpercaya
                                </h2>
                            </div>
                            <div class="text">
                                <p>
                                    Selain sebagai jasa ekspedisi China ke Indonesia, kami juga memberikan layanan lainnya seperti:
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">

                            <!--Start Project One Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                                <div class="project-one__single">
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="assets/img/project/project-one__img1.jpg" alt="#">
                                        </div>
                                        <div class="overlay-icon">
                                            <a href="project-details.html">
                                                <span class="icon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="project-one__single-content text-center">
                                        <div class="title-box">
                                            <h3><a href="project-details.html">Sea Freight LCL</a></h3>
                                            <p>Layanan Pengiriman barang impor via laut dengan jumlah kecil/sedang</p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="project-details.html">Read More <span
                                                    class="icon-right-arrow-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project One Single-->
                            <!--Start Project One Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                                <div class="project-one__single">
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="assets/img/project/project-one__img2.jpg" alt="#">
                                        </div>
                                        <div class="overlay-icon">
                                            <a href="project-details.html">
                                                <span class="icon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="project-one__single-content text-center">
                                        <div class="title-box">
                                            <h3><a href="project-details.html">Sea Freight LCL</a></h3>
                                            <p>Layanan Pengiriman barang impor via laut dengan 1 kontainer full</p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="project-details.html">Read More <span
                                                    class="icon-right-arrow-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project One Single-->
                            <!--Start Project One Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                                <div class="project-one__single">
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="assets/img/project/project-one__img3.jpg" alt="#">
                                        </div>
                                        <div class="overlay-icon">
                                            <a href="project-details.html">
                                                <span class="icon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="project-one__single-content text-center">
                                        <div class="title-box">
                                            <h3><a href="project-details.html">Air Freight</a></h3>
                                            <p>Layanan kirim barang import dari china via udara</p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="project-details.html">Read More <span
                                                    class="icon-right-arrow-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project One Single-->
                            <!--Start Project One Single-->
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                                <div class="project-one__single">
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="assets/img/project/project-one__img4.jpg" alt="#">
                                        </div>
                                        <div class="overlay-icon">
                                            <a href="project-details.html">
                                                <span class="icon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="project-one__single-content text-center">
                                        <div class="title-box">
                                            <h3><a href="project-details.html">Jasa Belanja</a></h3>
                                            <p>Layanan jasa belanja china membantu pembelian barang</p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="project-details.html">Read More <span
                                                    class="icon-right-arrow-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project One Single-->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Project One-->



        <!--Start Footer One-->
        <footer class="footer-one">
            <!-- Start Footer Main -->
            <div class="footer-main">
                <div class="container">
                    <div class="footer-main__inner">
                        <div class="row">
                            <!--Start Single Footer Widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInUp" data-wow-delay=".1s">
                                <div class="single-footer-widget">
                                    <div class="title">
                                        <h3>Main Feature</h3>
                                    </div>
                                    <div class="footer-widget__links-box">
                                        <ul>
                                            <li>
                                                <a href="#"><span class="icon-chevron"></span>Software Development</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon-chevron"></span>Data Analytics</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon-chevron"></span>IT Consulting</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon-chevron"></span>UI/UX Design</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon-chevron"></span>Network Solutions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Footer Widget-->

                            <!--Start Single Footer Widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="single-footer-widget ml-52">
                                    <div class="title">
                                        <h3>Contact</h3>
                                    </div>
                                    <div class="single-footer-widget__contact-info">
                                        <div class="text">
                                            <p>Lorem Ipsum is simply is dumi omy is text dummy text.</p>
                                        </div>
                                        <ul class="clearfix">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-envelope"></span>
                                                </div>
                                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-location-pin"></span>
                                                </div>
                                                <p>6391 Elgin St. Celina, 10299</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-phone-call-1"></span>
                                                </div>
                                                <p><a href="tel:(629)555-0129">(629) 555-0129</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Footer Widget-->

                            <!--Start Single Footer Widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="single-footer-widget ml-7">
                                    <div class="title">
                                        <h3>something</h3>
                                    </div>
                                    <div class="single-footer-widget__recent-blog-list">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="img-box">
                                                    <img src="{{asset('assets/img/footer/footer-one__recent-blog__img1.jpg')}}"
                                                        alt="#">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                                <div class="title-box">
                                                    <div class="date-box">
                                                        <div class="icon">
                                                            <span class="icon-calendar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>january 11, 2023</p>
                                                        </div>
                                                    </div>
                                                    <h5><a href="#">The standard chunk of Lorem Ipsum</a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img-box">
                                                    <img src="{{asset('assets/img/footer/footer-one__recent-blog__img2.jpg')}}"
                                                        alt="#">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                                <div class="title-box">
                                                    <div class="date-box">
                                                        <div class="icon">
                                                            <span class="icon-calendar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>january 11, 2023</p>
                                                        </div>
                                                    </div>
                                                    <h5><a href="#">The standard chunk of Lorem Ipsum</a></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Footer Widget-->

                            <!--Start Single Footer Widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="single-footer-widget pl40">
                                    <div class="title">
                                        <h3>Photo Gallery</h3>
                                    </div>
                                    <div class="single-footer-widget__photo-gallery-list">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="footer-widget__photo-gallery-img">
                                                    <img src="{{asset('assets/img/footer/footer-widget__photo-gallery-img-1.jpg')}}"
                                                        alt="">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer-widget__photo-gallery-img">
                                                    <img src="{{asset('assets/img/footer/footer-widget__photo-gallery-img-2.jpg')}}"
                                                        alt="">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer-widget__photo-gallery-img">
                                                    <img src="{{asset('assets/img/footer/footer-widget__photo-gallery-img-3.jpg')}}"
                                                        alt="">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer-widget__photo-gallery-img">
                                                    <img src="{{asset('assets/img/footer/footer-widget__photo-gallery-img-4.jpg')}}"
                                                        alt="">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer-widget__photo-gallery-img">
                                                    <img src="{{asset('assets/img/footer/footer-widget__photo-gallery-img-5.jpg')}}"
                                                        alt="">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer-widget__photo-gallery-img">
                                                    <img src="{{asset('assets/img/footer/footer-widget__photo-gallery-img-6.jpg')}}"
                                                        alt="">
                                                    <a href="#"><i class="fa-solid fa-link"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Footer Widget-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Main -->

            <!--Start Footer Middle-->
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-middle__inner">
                        <div class="footer-logo-box">
                            <img src="{{asset('assets/img/header-jendral/logo-jendral.png')}}" alt="#" style="max-width: 100%; height: 150px;">
                        </div>
                        <div class="phone-number-box">
                            <div class="icon">
                                <span class="icon-phone-call-1"></span>
                            </div>
                            <div class="text">
                                <p>Need help?</p>
                                <p><a href="tel:(808)555-0111">(808) 555-0111</a></p>
                            </div>
                        </div>
                        <div class="socel-link-box">
                            <div class="text">
                                <p>Follow us:</p>
                            </div>
                            <ul class="clearfix">
                                <li>
                                    <a href="#">
                                        <i class="icon-facebook-app-symbol"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-linked-in-logo-of-two-letters"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer Middle-->

            <!--Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom__inner">
                        <div class="copyright-text">
                            <p>© Jendral Import 2024 | <a href="{{ route('home') }}">Jendral Import</a>, All Rights Reserved.</p>
                        </div>


                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <p><a href="#">Trams &amp; Condition</a></p>
                                </li>
                                <li>
                                    <p><a href="#">Privacy Policy</a></p>
                                </li>
                                <li>
                                    <p><a href="#">Contact Us</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer Bottom -->
        </footer>
        <!--Start Footer One-->
    </div>



    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container-keunggulanjendral', {
          slidesPerView: 3, // Adjust this as per your layout needs
          spaceBetween: 20,
          loop: true,
          navigation: {
            nextEl: '.swiper-button-next-keunggulanjendral',
            prevEl: '.swiper-button-prev-keunggulanjendral',
          },
          pagination: {
            el: '.swiper-pagination-keunggulanjendral',
            clickable: true,
          },
          autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          },
        });
    </script>

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
