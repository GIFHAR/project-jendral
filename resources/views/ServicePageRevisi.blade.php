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
                                                <li><a href="#">Home</a>

                                                </li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="#">Services</a>
                                                </li>
                                                <li><a href="#">Pricing</a>
                                                </li>
                                                <li><a href="#">Tracking</a>
                                                </li>
                                                <li><a href="contact.html">contacts</a></li>
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

     <!--Start Blog One-->
     <section class="blog-one">
        <div class="container">
            {{-- <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Blog and news</h4>
                </div>
                <h2>
                    Unlocking the potential<br>of logistics
                </h2>
            </div> --}}
            <div class="row">

                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="blog-one__left-box">
                        <div class="blog-one__left-box-img">
                            <img src="assets/img/blog/blog-one__img1.jpg" alt="#">
                        </div>
                        <div class="blog-one__left-box-content">

                            <div class="title-box">
                                <h3><a href="#">Konsultasi Bisnis dan Import</a></h3>
                                <p>Konsultasikan kebutuhan impor bisnis kamu dengan tim berpengalaman
                                    kami untuk mendapatkan servis dan harga yang sesuai dengan kebutuhan bisnis kamu.</p>
                            </div>
                            <div class="btn-box">
                                <a class="thm-btn" href="#">
                                    <span class="txt">Read More</span>
                                    <i class="icon-next"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="blog-one__sidebar-box">
                        <ul class="clearfix">

                            <li class="blog-one__sidebar-box__inner wow fadeInRight" data-wow-delay="100ms"
                                data-wow-duration="1500ms">
                                <div class="img-box">
                                    <img src="assets/img/blog/blog-one__sidebar-box__img1.jpg" alt="#">
                                </div>
                                <div class="content-box">

                                    <div class="title-box">
                                        <h3><a href="#">Diskusikan Kebutuhan Kamu</a></h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="#">
                                            <span class="txt">Read More</span>
                                            <i class="icon-next"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="blog-one__sidebar-box__inner wow fadeInRight" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="img-box">
                                    <img src="assets/img/blog/blog-one__sidebar-box__img2.jpg" alt="#">
                                </div>
                                <div class="content-box">

                                    <div class="title-box">
                                        <h3><a href="#">Pilihan Terbaik Untuk Pembelian dan Pengiriman</a></h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="#">
                                            <span class="txt">Read More</span>
                                            <i class="icon-next"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="blog-one__sidebar-box__inner wow fadeInRight" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                                <div class="img-box">
                                    <img src="assets/img/blog/blog-one__sidebar-box__img3.jpg" alt="#">
                                </div>
                                <div class="content-box">

                                    <div class="title-box">
                                        <h3><a href="#">Perhitungan HPP Barang Kamu</a></h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="#">
                                            <span class="txt">Read More</span>
                                            <i class="icon-next"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Blog One-->

    <!--Start Cta One-->
    <section class="cta-one cta-one--style2">
        <div class="container">
            <div class="cta-one__inner cta-one__inner--style2">
                <div class="cta-one__inner-box cta-one__inner-box--style2">
                    <div class="title-box">
                        <h2>Your Business One-Stop <br>Import Partner & Solutions</h2>
                    </div>
                </div>
                <div class="cta-one__btn cta-one__btn--style2">
                    <a href="#" class="thm-btn">
                        <span class="txt">
                            contact us
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!--End Cta One-->

     <!--Start Blog Page 1-->
    <section class="blog-page1">
        <div class="container">
            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-xl-6">
                    <!--Start Blog Page Single-->
                    <div class="blog-one__left-box blog-page__single">
                        <div class="blog-one__left-box-img blog-page1__img">
                            <img src="assets/img/blog/blog-page1__img1.jpg" alt="#">
                        </div>
                        <div class="blog-one__left-box-content blog-page1__content">
                            <div class="title-box">
                                <h3><a href="blog-details.html">Pencarian Barang dan Supplier</a></h3>
                                <p>
                                    Kami akan bantu cari barang yang kamu butuhkan,
                                    cukup kirimkan foto atau deskripsi barang yang kamu cari
                                     dan biarkan kami yang mengurus sisanya
                                </p>
                            </div>
                            <div class="btn-box">
                                <a class="thm-btn" href="#">
                                    <span class="txt">Hubungi Kami</span>
                                    <i class="icon-next"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Single-->
                </div>

                <!-- Blog Post 2 -->
                <div class="col-xl-6">
                    <!--Start Blog Page Single-->
                    <div class="blog-one__left-box blog-page__single">
                        <div class="blog-one__left-box-img blog-page1__img">
                            <img src="assets/img/blog/blog-page1__img2.jpg" alt="#">
                        </div>
                        <div class="blog-one__left-box-content blog-page1__content">
                            <div class="title-box">
                                <h3><a href="blog-details.html">Pembelian dari Marketplace Cina</a></h3>
                                <p>
                                    Kami bantu untuk pembelian dari marketplace Cina, cukup kirimkan
                                    link produk dan kami yang akan mengurus pembelian hingga pengiriman
                                    ke tempat kamu
                                </p>
                            </div>
                            <div class="btn-box">
                                <a class="thm-btn" href="blog-details.html">
                                    <span class="txt">Hubungi Kami</span>
                                    <i class="icon-next"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Single-->
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Page 1-->

    <!--Air Freight-->

    <div class="container-airfreight">
        <div class="row">
        <!--Start Single Service Three-->
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="200ms"
            data-wow-duration="1500ms">
            <div class="service-three__single">
                <div class="service-three__single-img">
                    <img src="assets/img/service/service-three__img2.jpg" alt="#">
                    <div class="service-three__single-img-bg"></div>
                </div>
                <div class="service-three__single-content">
                    <div class="icon">
                        <span class="icon-shipping1"></span>
                    </div>
                    <div class="title">
                        <h3><a href="service-details.html">Jalur Udara</a></h3>
                    </div>
                    <div class="text">
                        <p>
                            Gunakan pengiriman udara untuk pengiriman yang lebih cepat. Untuk kebutuhan pengiriman cepat dengan barang yang tidak terlalu berat
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--End Single Service Three-->

        <div class="freight-options">
            <!-- Air Freight - Regular -->
            <div class="freight-option">
                <h2>Jalur Udara - Reguler</h2>
                <div class="detail">
                    <img src="price-icon.jpg" alt="Price">
                    <p>Barang dengan berat Min. 30 kg. Harga Pengiriman: Rp. 150,000</p>
                </div>
                <div class="detail">
                    <img src="category-icon.jpg" alt="Category">
                    <p>Barang dengan berat lebih dari 100 kg bisa dinego</p>
                </div>
                <div class="time-estimation regular">
                    <p>Time Estimation: 14 Hari</p>
                </div>
            </div>

            <!-- Air Freight - Express -->
            <div class="freight-option">
                <h2>Jalur Udara - Express</h2>
                <div class="detail">
                    <img src="price-icon.jpg" alt="Price">
                    <p>Barang dengan berat Min. 1 kg. Harga Pengiriman: Rp. 205,000</p>
                </div>
                <div class="detail">
                    <img src="category-icon.jpg" alt="Category">
                    <p>Barang dengan berat lebih dari 100 kg bisa dinego</p>
                </div>
                <div class="time-estimation express">
                    <p>Time Estimation: 4-6 Hari</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--end air freight-->

    <!--sea freight-->

    <div class="container-seafreight">
        <div class="row">
            <!--Start Single Service Three-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="service-three__single">
                    <div class="service-three__single-img">
                        <img src="assets/img/service/service-three__img2.jpg" alt="#">
                        <div class="service-three__single-img-bg"></div>
                    </div>
                    <div class="service-three__single-content">
                        <div class="icon">
                            <span class="icon-shipping1"></span>
                        </div>
                        <div class="title">
                            <h3><a href="service-details.html">Jalur Laut</a></h3>
                        </div>
                        <div class="text">
                            <p>Untuk pengiriman dalam jumlah banyak, pengiriman lewat laut menjadi pilihan yang tepat karena harga yang murah dan kemampuannya untuk mengirim lebih banyak juga barang-barang berat</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Three-->

            <!-- Start Content Text 3 -->
            <div class="col-xl-8 col-lg-8 col-md-6">
                <div class="service-details__content-text3">
                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-packages3"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Umum</a></h3>
                                <p>Harga mulai dari Rp.4,500/cbm</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-packages5"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Garment</a></h3>
                                <p>Harga mulai dari Rp.7,5000/cbm</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-order1"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Lartas Ringan</a></h3>
                                <p>Harga mulai dari Rp.5,000/cbm</p>
                            </div>
                        </div>
                    </div>


                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-mobile1"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Lartas Berat</a></h3>
                                <p>Harga mulai dari Rp.6,000/cbm</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-mobile1"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Obat</a></h3>
                                <p>Harga mulai dari Rp.8,500/cbm</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-mobile1"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Makanan</a></h3>
                                <p>Harga mulai dari Rp.7,000/cbm</p>
                            </div>
                        </div>
                    </div>

                    <div class="info-item">
                        <h3>Harga</h3>
                        <p>Dihitung mulai dari<strong>0.1 cbm</strong></p>
                        <p>Biaya konsolidasi:<strong>Rp. 50,000/0.1 cbm</strong></p>
                        <p class="note">*Harga tergantung ketentuan dan kondisi</p>
                    </div>


                    <div class="info-item-time">
                        <h3>Estimasi Waktu</h3>
                        <p class="time-estimation">3-4 Minggu</p>
                    </div>

                </div>
            </div>
            <!-- End Content Text 3 -->
        </div>
    </div>

    <!-- end sea freight-->






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
