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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/landingpage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

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


    <div>
        @include('layout/header')
    </div>
    <!--End Main Header One -->

    <!--Start Banner One-->
    <section class="banner-one" style="background-image: url('{{ asset('assets/img/homejendral/backgroundutama.png') }}');  background-size: cover; background-position: center;">
        <div class="container">
            <div class="banner-one__content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="sub-title">
                    <h5>SELAMAT DATANG</h5>
                </div>
                <div class="big-title">
                    <h1>NIKMATI KENYAMANAN DALAM<br> PROSES IMPORT DAN FLEKSIBILITAS<br> UNTUK TRAKSAKSI BISNIS ANDA<br> BERSAMA JENDRAL IMPORT</h1>
                </div>
                <img class="banner-desktop" src="assets/img/resource/banner-JI-looong.png" alt="Jenderal Import Business Product" />
                <img class="banner-mobile" src="assets/img/resource/banner-JI-short.png" alt="Jenderal Import Business Product" />
            </div>
        </div>
        <!-- Gallery of 7 images -->
        {{-- <div class="gallery-container">
            <div class="gallery-item">
                <img src="{{ asset('assets/img/homejendral/konsul.png') }}" alt="Gambar 1">
                <div class="caption">Konsultasi Bisnis</div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/homejendral/jasapembelian.png') }}" alt="Gambar 2">
                <div class="caption">Jasa Pembelian</div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/homejendral/cekharga.png') }}" alt="Gambar 3">
                <div class="caption">Cek Harga</div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/homejendral/jasawarehouse.png') }}" alt="Gambar 4">
                <div class="caption">Jasa Warehouse</div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/homejendral/udara.png') }}" alt="Gambar 5">
                <div class="caption">Pengiriman Udara</div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/homejendral/laut.png') }}" alt="Gambar 6">
                <div class="caption">Pengiriman Laut</div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/homejendral/tracking.png') }}" alt="Gambar 7">
                <div class="caption">Tracking</div>
            </div>
        </div> --}}

    </section>

    <!--End Banner One-->

    <!-- Live Tracking Box -->
    <section class="container">
        <div class="livetracking">
            <div class="live-tracking-box">
                <div class="text-and-inputs">
                    <div class="text-content">
                        <h1>Live Tracking</h1>
                        <p>Silahkan masukkan kode resi Anda disini</p>
                    </div>
                    <div class="input-group-livetracking">
                        <input type="text" id="noResi" placeholder="No. Resi" aria-label="No. Resi" class="noresi">
                        <input type="text" id="kodeMarking" placeholder="Kode Marking" aria-label="Kode Marking">
                        <button id="cekResi">Cek Resi</button>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <!--Live Tracking Box-->


    <!--kenapa harus jendral -->

    <section class="swiper-banner-1">
        <div class="container-textkenapajendral">
            <h1>Kenapa <span class="highlight">Jenderal Import</span> <br> Menjadi Partner Terbaik Import Anda</h1>
            <p>Dipercayai oleh ratusan pelanggan baik individu maupun bisnis <br> sebagai partner import mereka. Dan berikut beberapa kelebihan <br> pelayanan yang kami berikan.</p>
        </div>


        <section class="swiper-container-banner1">
            <div class="container-keunggulanjendral">
                <!-- Swiper Container -->
                <div id="swiper-benefit" class="swiper-container-keunggulanjendral">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\CAROUSEL\001 KONSUL.png') }}" alt="Picture 1" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\CAROUSEL\002 MUDAH.png') }}" alt="Picture 2" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\CAROUSEL\003 TRANSPARAN.png') }}" alt="Picture 3" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\CAROUSEL\004 LIVE.png') }}" alt="Picture 4" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\CAROUSEL\005 TANPA.png') }}" alt="Picture 5" class="picture-keunggulanjendral">
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Navigation Arrows -->
                    {{-- <div class="swiper-button-next"></div> --}}
                    {{-- <div class="swiper-button-prev"></div> --}}
                </div>
            </div>
        </section>
    </section>
    
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('#swiper-benefit', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 3,
            spaceBetween: 20,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1300: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    </script>
    
    

    <!--Start Project One-->
    <section class="project-one">
        <div class="container">
            <div class="project-one-row">
                <div class="header-project-one">
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
                <section class="swiper-container-banner2">
                    <div class="swiper-row-banner2">
                        <section class="container-projectjendral">
                            <div class="swiper-container-projectjendral project-swiper">
                                <div class="swiper-wrapper">
                                    <!-- Start Project One Single -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-banner2">
                                            <div class="wow fadeInUp" data-wow-delay=".1s">
                                                <div class="project-one__single">
                                                    <div class="project-one__single-img">
                                                        <div class="inner">
                                                            <img src="assets\img\LISTSERVICE\ASSET PHOTO\AIR FREIGHT.png" alt="#">
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <a href="project-details.html"></a>
                                                        </div>
                                                    </div>
                                                    <div class="project-one__single-content text-center">
                                                        <div class="title-box">
                                                            <h3><a href="project-details.html">Jalur Udara</a></h3>
                                                            <p>Layanan Pengiriman barang impor via udara untuk ukuran barang kecil/sedang</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="https://wa.link/kl0gdo">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Project One Single -->
                        
                                    <!-- Start Project Two Single -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-banner2">
                                            <div class="wow fadeInUp" data-wow-delay=".1s">
                                                <div class="project-one__single">
                                                    <div class="project-one__single-img">
                                                        <div class="inner">
                                                            <img src="assets\img\LISTSERVICE\ASSET PHOTO\SEA LCL.png" alt="#">
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <a href="project-details.html"></a>
                                                        </div>
                                                    </div>
                                                    <div class="project-one__single-content text-center">
                                                        <div class="title-box">
                                                            <h3><a href="project-details.html">Jalur Laut</a></h3>
                                                            <p>Layanan Pengiriman barang impor via laut untuk ukuran barang kecil/sedang/berat</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="https://wa.link/kl0gdo">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Project Two Single -->
                        
                                    <!-- Start Project Three Single -->
                                    {{-- <div class="swiper-slide">
                                        <div class="swiper-slide-banner2">
                                            <div class="wow fadeInUp" data-wow-delay=".1s">
                                                <div class="project-one__single">
                                                    <div class="project-one__single-img">
                                                        <div class="inner">
                                                            <img src="assets/img/project/project-one__img3.jpg" alt="#">
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <a href="project-details.html"></a>
                                                        </div>
                                                    </div>
                                                    <div class="project-one__single-content text-center">
                                                        <div class="title-box">
                                                            <h3><a href="project-details.html">Air Freight</a></h3>
                                                            <p>Layanan kirim barang import dari china via udara</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="https://wa.link/kl0gdo">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Project Three Single -->
                        
                                    <!-- Start Project Four Single -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-banner2">
                                            <div class="wow fadeInUp" data-wow-delay=".1s">
                                                <div class="project-one__single">
                                                    <div class="project-one__single-img">
                                                        <div class="inner">
                                                            <img src="assets/img/project/project-one__img4.jpg" alt="#">
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <a href="project-details.html"></a>
                                                        </div>
                                                    </div>
                                                    <div class="project-one__single-content text-center">
                                                        <div class="title-box">
                                                            <h3><a href="project-details.html">Jasa Belanja</a></h3>
                                                            <p>Layanan jasa belanja china membantu pembelian barang</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="https://wa.link/kl0gdo">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- End Project Four Single -->
                                </div>
                                <!-- Add pagination and navigation controls (optional) -->
                                <div class="swiper-pagination"></div>
                                {{-- <div class="swiper-button-next"></div> --}}
                                {{-- <div class="swiper-button-prev"></div> --}}
                            </div>
                        </section>
                        
                        
                        
                        <!--End Project One Single--> 

                    </div>
                </section>

            </div>
        </div>
    </section>
    <!--End Project One-->

    <script>
        var projectSwiper = new Swiper('.project-swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 2,
            spaceBetween: 20,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                650: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            },
        });
    </script>

    <!--Start Video One-->
    <section class="video-one">
        <div class="video-one__bg" data-jarallax data-speed="0.1" data-imgPosition="0% 0%"
            style="background-image: url(assets/img/resource/video-one__img1.jpg);"></div>
        <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
            <a class="video-popup" title="Video Gallery" href="https://www.youtube.com/watch?v=06dV9txztKY">
                <span class="icon-play-button-arrowhead"></span>
            </a>
        </div>
    </section>
    <!--End Video One-->

    <!--Start Testimonials One-->
    <section class="testimonials-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Testimoni Pelanggan</h4>
                </div>
                <h2>
                    Jendral Import
                </h2>
            </div>
            <div class="testimonials-one__inner">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                    "loop": true,
                    "pagination": {
                        "el": "#testimonial-one-pagination",
                        "type": "bullets",
                        "clickable": true
                        },
                    "navigation": {
                        "nextEl": "#testimonial-two__swiper-button-next",
                        "prevEl": "#testimonial-two__swiper-button-prev"
                    },
                    "autoplay": { "delay": 5000 },
                    "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "768": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "992": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "1200": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        }
                    }}'>

                    <div class="swiper-wrapper">
                        <!--Start Single Testimonials One-->
                        <div class="swiper-slide">
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__single-img">
                                    <div class="testimonials-one__single-img__inner">
                                        <div class="inner">
                                            <img src="assets/img/testimonial/mockupprofile.jpg" alt="">
                                        </div>
                                        <div class="overlay-box">
                                            <span class="icon-quote-right"></span>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <h3><a href="#">Savannah Nguyen</a></h3>
                                        <p>President of Sales</p>
                                    </div>
                                </div>
                                <div class="testimonials-one__single-content">
                                    <div class="ster-icon">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <p>Reviews (05)</p>
                                    </div>
                                    <div class="text">
                                        <p>
                                            It is a long establishd fact that a reader will beinl distracted by the
                                            hjli
                                            readable content of a page jklilk when looking at its layout loren ipsum
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonials One-->

                        <!--Start Single Testimonials One-->
                        <div class="swiper-slide">
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__single-img">
                                    <div class="testimonials-one__single-img__inner">
                                        <div class="inner">
                                            <img src="assets/img/testimonial/mockupprofile2.jpg" alt="">
                                        </div>
                                        <div class="overlay-box">
                                            <span class="icon-quote-right"></span>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <h3><a href="#">Savannah Nguyen</a></h3>
                                        <p>President of Sales</p>
                                    </div>
                                </div>
                                <div class="testimonials-one__single-content">
                                    <div class="ster-icon">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-star-1"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <p>Reviews (05)</p>
                                    </div>
                                    <div class="text">
                                        <p>
                                            It is a long establishd fact that a reader will beinl distracted by the
                                            hjli
                                            readable content of a page jklilk when looking at its layout loren ipsum
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonials One-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonials One-->

    <!--whatsapp-->
    <section>
        <a href="https://wa.link/kl0gdo" class="whatsapp-button" target="_blank">
            <span class="whatsapp-popup">Konsultasi Gratis Sekarang</span>
            <div class="whatsapp-icon">
                <img src="assets\img\konsultasibisnisjendral\walogoputih.png" alt="WhatsApp" />
            </div>
        </a>
    </section>
    <!--end whatsapp-->


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
