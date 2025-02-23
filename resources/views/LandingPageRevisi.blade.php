<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jenderal Website</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/servicesrevisi.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notiflix@3.2.6/dist/notiflix-3.2.6.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.6/dist/notiflix-3.2.6.min.js"></script>

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

    <!--Alert message from contact form -->
    @if(session('success') || session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @if(session('success'))
                    Notiflix.Notify.success("{{ session('success') }}", {
                        position: 'right-top',
                        width: '480px',
                        timeout: 5000,
                        clickToClose: true,
                        fontSize: '20px',
                        fontFamily: 'Quicksand',
                    });
                @endif
                @if(session('error'))
                    Notiflix.Notify.failure("{{ session('error') }}", {
                        position: 'right-top',
                        width: '480px',
                        timeout: 5000,
                        clickToClose: true,
                        fontSize: '20px',
                        fontFamily: 'Quicksand',
                    });
                @endif
            });
        </script>
    @endif
    <!--End of alert message -->


    <!--Start Banner One-->
    <section class="banner-one">
        <div class="banner-container">
            <div class="slides-wrapper">
                <div class="slide"><img src="/assets/img/homejendral/1.png" alt="Slide 1"></div>
                <div class="slide"><img src="/assets/img/homejendral/2.png" alt="Slide 2"></div>
                <div class="slide"><img src="/assets/img/homejendral/3.png" alt="Slide 3"></div>
                <div class="slide"><img src="/assets/img/homejendral/1.png" alt="Slide 1 Clone"></div>
            </div>
        </div>
        
        <br>

        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <script>
        const slidesWrapper = document.querySelector('.slides-wrapper');
        let slideIndex = 0;
        let autoSlideInterval;
    
        function startAutoSlide() {
            autoSlideInterval = setInterval(autoSlide, 5000);
        }
    
        function autoSlide() {
            slideIndex++;
            if (slideIndex >= 4) {
                // Smooth transition to clone slide
                slidesWrapper.style.transform = `translateX(-75%)`;
                // Instant reset after transition
                setTimeout(() => {
                    slidesWrapper.style.transition = 'none';
                    slidesWrapper.style.transform = 'translateX(0%)';
                    slideIndex = 0;
                    // Re-enable transition after reset
                    setTimeout(() => {
                        slidesWrapper.style.transition = 'transform 1s ease-in-out';
                    }, 10);
                }, 1000);
            } else {
                slidesWrapper.style.transform = `translateX(-${slideIndex * 25}%)`;
            }
        }
    
        // Start automatic sliding
        startAutoSlide();
    </script>

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
                        <form id="tracking-form" method="GET" class="tracking-header">
                            <div class="tracking-form-input">
                                <input type="text" id="kodeMarking" placeholder="Enter your marking code..." aria-label="Kode Marking">
                            </div>
                            <button id="cekResi" type="submit">Cek Resi</button>
                        </form>
                        
                        <script>
                            document.getElementById('tracking-form').addEventListener('submit', function(event) {
                                event.preventDefault();
                                
                                var markingCode = document.getElementById('kodeMarking').value;
                        
                                if(markingCode) {
                                    window.location.href = `/orders/${markingCode}`;
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <!--Live Tracking Box-->


    <!--kenapa harus Jenderal -->

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
                            <img src="{{ asset('assets\img\CAROUSEL\003 TRANSPARAN.png') }}" alt="Picture 3" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\CAROUSEL\004 LIVE.png') }}" alt="Picture 4" class="picture-keunggulanjendral">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\CAROUSEL\002 MUDAH.png') }}" alt="Picture 2" class="picture-keunggulanjendral">
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
                                <h4>Jenderal Import</h4>
                            </div>
                            <h2>
                                Melayani Jasa Import Barang dari China Terpercaya
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
                    <section class="container-grid">
                        <!-- Air Freight -->
                        <div class="grid-item">
                            <div class="project-one__single">
                                <div class="project-one__single-img">
                                    <div class="inner">
                                        <img src="/assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/AIR FREIGHT.png" alt="Air Freight">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Jalur Udara</a></h3> --}}
                                        <p>Layanan Pengiriman barang impor via udara untuk ukuran barang kecil/sedang</p>
                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Sea Freight -->
                        <div class="grid-item">
                            <div class="project-one__single">
                                <div class="project-one__single-img">
                                    <div class="inner">
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/SEA LCL.png" alt="Sea Freight LCL">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Jalur Laut LCL</a></h3> --}}
                                        <p>Layanan Pengiriman barang impor via laut untuk ukuran barang besar/bulk</p>
                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Express Delivery -->
                        <div class="grid-item">
                            <div class="project-one__single">
                                <div class="project-one__single-img">
                                    <div class="inner">
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/SEA FCL.png" alt="Sea Freight FCL">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Jalur Laut FCL</a></h3> --}}
                                        <p>Layanan Pengiriman barang impor via laut dengan 1 kontainer full</p>
                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Warehousing -->
                        <div class="grid-item">
                            <div class="project-one__single">
                                <div class="project-one__single-img">
                                    <div class="inner">
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/JASA BELANJA.png" alt="Warehousing">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Layanan Gudang</a></h3> --}}
                                        <p>Layanan jasa belanja china membantu pembelian barang dari marketplace China</p>
                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Custom Clearance -->
                        <div class="grid-item">
                            <div class="project-one__single">
                                <div class="project-one__single-img">
                                    <div class="inner">
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/TF TO RMB.png" alt="Custom Clearance">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Custom Clearance</a></h3> --}}
                                        <p>Layanan jasa titip transfer RMB ke supplier marketplace China</p>
                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Insurance -->
                        {{-- <div class="grid-item">
                            <div class="project-one__single">
                                <div class="project-one__single-img">
                                    <div class="inner">
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/TF TO RMB.png" alt="Insurance">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Asuransi Pengiriman</a></h3>
                                        <p>Perlindungan barang selama proses pengiriman dengan asuransi</p>
                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </section>
                    
                    {{-- <div class="swiper-row-banner2">
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
                                                            <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
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
                                                            <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Project Two Single -->
                        
                                    <!-- Start Project Three Single -->
                                    <div class="swiper-slide">
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
                                                            <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
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
                                                            <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Project Four Single -->
                                </div>
                                <!-- Add pagination and navigation controls (optional) -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </section>
                        
                        
                        
                        <!--End Project One Single--> 

                    </div> --}}
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

    <!--Start Video One
    <section class="video-one">
        <div class="video-one__bg" data-jarallax data-speed="0.1" data-imgPosition="0% 0%"
            style="background-image: url(assets/img/resource/video-one__img1.jpg);"></div>
        <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
            <a class="video-popup" title="Video Gallery" href="https://www.youtube.com/watch?v=06dV9txztKY">
                <span class="icon-play-button-arrowhead"></span>
            </a>
        </div>
    </section>
    End Video One-->

    <!--Air Freight-->

    <div class="airfreight">
        <div class="container">
            <div class="freight-row">
            <!--Start Single Service Three-->
            <div class="card-airfreight">
                <div class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="service-three__single">
                        <div class="service-three__single-img">
                            <img src="assets\img\LISTSERVICE\ASSET PHOTO\AIR FREIGHT.png" alt="#">
                            <div class="service-three__single-img-bg"></div>
                        </div>
                        <div class="service-three__single-content">
                            <div class="icon">
                                <span class="icon-shipping1"></span>
                            </div>
                            <div class="title">
                                <h3>Jalur Udara</h3>
                            </div>
                            <div class="text">
                                <p>
                                    Gunakan pengiriman udara untuk pengiriman yang lebih cepat. Untuk kebutuhan pengiriman cepat dengan barang yang tidak terlalu berat
                                </p>
                            </div>
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
                        <img src="assets/img/resource/icon-30kg.png" alt="Weight">
                        <p>Barang dengan berat Min. 30 kg. Harga Pengiriman: Rp. 150,000</p>
                    </div>
                    <div class="detail">
                        <img src="assets/img/resource/icon-100kg.png" alt="Category">
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
                        <img src="assets/img/resource/icon-1kg.png" alt="Price">
                        <p>Barang dengan berat Min. 1 kg. Harga Pengiriman: Rp. 205,000</p>
                    </div>
                    <div class="detail">
                        <img src="assets/img/resource/icon-100kg.png" alt="Category">
                        <p>Barang dengan berat lebih dari 100 kg bisa dinego</p>
                    </div>
                    <div class="time-estimation express">
                        <p>Time Estimation: 4-6 Hari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--end air freight-->

    <!--sea freight-->

    <div class="container-seafreight">
        <div class="container">
            <div class="freight-row">
                <div class="card-airfreight">
                    <!--Start Single Service Three-->
                    <div class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="service-three__single">
                            <div class="service-three__single-img">
                                <img src="assets\img\LISTSERVICE\ASSET PHOTO\SEA LCL.png" alt="#">
                                <div class="service-three__single-img-bg"></div>
                            </div>
                            <div class="service-three__single-content">
                                <div class="icon">
                                    <span class="icon-shipping1"></span>
                                </div>
                                <div class="title">
                                    <h3>Jalur Laut</h3>
                                </div>
                                <div class="text">
                                    <p>Untuk pengiriman dalam jumlah banyak, pengiriman lewat laut menjadi pilihan yang tepat karena harga yang murah dan kemampuannya untuk mengirim lebih banyak juga barang-barang berat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Three-->

                <!-- Start Content Text 3 -->
                <div class="freight-options">
                    <!-- Air Freight - Regular -->
                    <div class="freight-option">
                        <div class="">
                            <div class="service-details__content-text3">
                                <div class="service-details__content-text3-single">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-packages3"></span>
                                        </div>
                                        <div class="content-box">
                                            <h3>Umum</h3>
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
                                            <h3>Garment</h3>
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
                                            <h3>Lartas Ringan</h3>
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
                                            <h3>Lartas Berat</h3>
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
                                            <h3>Obat</h3>
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
                                            <h3>Makanan</h3>
                                            <p>Harga mulai dari Rp.7,000/cbm</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-item">
                                    <h3>Harga</h3>
                                    <p>Dihitung mulai dari <strong>0.1 cbm</strong></p>
                                    <p>Biaya konsolidasi: <br><strong>Rp. 50,000/0.1 cbm</strong></p>
                                    <p class="note">*Harga tergantung ketentuan dan kondisi</p>
                                </div>


                                <div class="info-item-time">
                                    <h3>Estimasi Waktu</h3>
                                    <p class="time-estimation">3-4 Minggu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content Text 3 -->
            </div>
        </div>
    </div>

    <!-- end sea freight-->

    <!--Start Testimonials One-->
    <section class="testimonials-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Testimoni Pelanggan</h4>
                </div>
                <h2>
                    Jenderal Import
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
                                            <img src="assets/img/testimonial/profile.png" alt="">
                                        </div>
                                        <div class="overlay-box">
                                            <span class="icon-quote-right"></span>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <h3>Fanny Pratama</h3>
                                        <p>Customer</p>
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
                                            Udah sampe kak. Terima Kasih atas banntuannya kak. Paket sesuai denngan pesanan, ukurann dan type sesuai dengan yang diharapkan. Sangat luar biasa. Sekali lagi terima kasih bannyak atas bantuannya
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
                                            <img src="assets/img/testimonial/profile.png" alt="">
                                        </div>
                                        <div class="overlay-box">
                                            <span class="icon-quote-right"></span>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <h3>Fiqri</h3>
                                        <p>Customer</p>
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
                                            Sudah saya terima, pas banget sebelum hujan. Mantap jumlahya sesuai, beli disini lebih cepat sampai. Respon admin dalam komunikasi dan transaksi sangat baik, sangat amann transaksi bisa rekber melalui aplikasi online shop
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
                                            <img src="assets/img/testimonial/profile.png" alt="">
                                        </div>
                                        <div class="overlay-box">
                                            <span class="icon-quote-right"></span>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <h3>Immanuel O. D. P.</h3>
                                        <p>Customer</p>
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
                                            Pengirimannya cepet om…
                                            Barang juga sampai lebih cepat dari estimasi…
                                            Puas banget...
                                            Next saya akan order lagi ya om…
                                            Mantap...
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

    <div>
        @include('layout/footer')
    </div>

    <!--whatsapp-->
    <section>
        <a href="https://wa.link/mkbx1j" class="whatsapp-button" target="_blank">
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
