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

        function updateImages() {
        const slides = document.querySelectorAll(".slide img");

        slides.forEach((img, index) => {
            if (window.innerWidth < 1200) {
                if (index === slides.length - 1) {
                    img.src = `/assets/img/homejendral/mobile-1.png`;
                } else {
                    img.src = `/assets/img/homejendral/mobile-${index + 1}.png`;
                }
            } else {
                if (index === slides.length - 1) {
                    img.src = `/assets/img/homejendral/1.png`;
                } else {
                    img.src = `/assets/img/homejendral/${index + 1}.png`;
                }
            }
        });
    }
    window.addEventListener("load", updateImages);
    window.addEventListener("resize", updateImages);
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
                            <button id="cekResi" type="submit">Lacak Pengiriman</button>
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
            <h1><span class="highlight">One-Stop </span><span class="light">Import Partner</span><br>Bersama memenuhi semua kebutuhan import Anda</h1>
            <p>Hadir sebagai solusi semua kebutuhan impor, Jenderal Import menjadi salah satu penyedia jasa impor terpercaya yang telah membantu ratusan bisnis dan individu memulai perjalanan impor mereka. Dan berikut keunggulan layanan yang kami berikan.</p>
        </div>
        <section class="green-bg">
            <section class="swiper-container-banner1">
                <div class="container-keunggulanjendral">
                    <!-- Swiper Container -->
                    <div id="swiper-benefit" class="swiper-container-keunggulanjendral">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets\img\CAROUSEL\1.png') }}" alt="Picture 1" class="picture-keunggulanjendral">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets\img\CAROUSEL\2.png') }}" alt="Picture 3" class="picture-keunggulanjendral">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets\img\CAROUSEL\3.png') }}" alt="Picture 4" class="picture-keunggulanjendral">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets\img\CAROUSEL\4.png') }}" alt="Picture 2" class="picture-keunggulanjendral">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets\img\CAROUSEL\5.png') }}" alt="Picture 5" class="picture-keunggulanjendral">
                            </div>
                        </div>
                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
        </section>
    </section>

    <div class="container">
        <div class="layanan-button">
            <div class="line"></div>
                <button class="custom-button" onclick="window.location.href='/services'">Lihat Layanan Kami</button>
            <div class="line"></div>
        </div>
    </div>
    
    
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
                                <h4><span class="light">Membantu Menangani Berbagai</span><br><span class="highlight">Barang Dari China</span></h4>
                            </div>
                            <div class="text">
                                <p>
                                    Berikut beberapa layanan lainnya yang kami berikan selain jasa ekspedisi <br>dari China sebagai One-stop solution impor anda
                                </p>
                            </div>
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
                                        <img src="/assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/2.png" alt="Air Freight">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Jalur Udara</a></h3> --}}
                                        <p>Jasa pengiriman barang lewat laut dalam jumlah kecil/sedang & jumlah besar/full container</p>
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
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/3.png" alt="Sea Freight LCL">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Jalur Laut LCL</a></h3> --}}
                                        <p>Jasa pengiriman barang lewat udara untuk pengiriman yang lebih cepat</p>
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
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/4.png" alt="Sea Freight FCL">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Jalur Laut FCL</a></h3> --}}
                                        <p>Membantu pembelajaan dari marketplace China, juga pencarian suplier dan negosiasi</p>
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
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/5.png" alt="Warehousing">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Layanan Gudang</a></h3> --}}
                                        <p>Jasa transfer pembayaran RMB ke suplier marketplace China</p>
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
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/6.png" alt="Custom Clearance">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Custom Clearance</a></h3> --}}
                                        <p>Layanan pengiriman impor dari China langsung sampai ke alamat tujuan Anda</p>
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
                                        <img src="assets/img/LISTSERVICE/ASSET PHOTO DAN FONT/1.png" alt="Custom Clearance">
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="project-details.html"></a>
                                    </div>
                                </div>
                                <div class="project-one__single-content text-center">
                                    <div class="title-box">
                                        {{-- <h3><a href="project-details.html">Custom Clearance</a></h3> --}}
                                        <p>Konsultasi dengan tim berpengalaman kami untuk semua kebutuhan impor Anda</p>
                                    </div>
                                    {{-- <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">Hubungi kami <span class="icon-right-arrow-2"></span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <div class="sec-title-child">
                    <div class="text">
                        <p>
                            Kami selalu memberikan penawaran harga terbaik untuk semua layanan pengiriman barang dari China yang kami sediakan. Anda bisa cek daftar harga yang kami berikan di sini
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="layanan-button">
            <div class="line"></div>
            <button class="custom-button">Pricelist</button>
            <div class="line"></div>
        </div>
    </div>
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

    <!--Start Project One-->
    <section class="project-one">
        <div class="container">
            <div class="project-one-row">
                <div class="header-project-one">
                    <div class="project-one__content-box">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h4><span class="light">Proses Impor</span><br><span class="highlight">Pengiriman Barang Dari China</span></h4>
                            </div>
                            <div class="text">
                                <p>
                                    Proses pengiriman barang dari China ke Indonesia merupakan proses yang cukup rumit dan membingungkan, apalagi jika anda melakukannya sendiri. Bersama tim Jenderal yang sudah berpengalaman, kami akan membantu anda dalam seluruh prosesnya membuat Import menjadi lebih mudah.
                                    <br>
                                    <br>
                                    Berikut gambaran sederhana dari proses import.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="swiper-container-banner1">
                    <div class="container-keunggulanjendral">
                        <!-- Swiper Container -->
                        <div id="swiper-process" class="swiper-container-keunggulanjendral">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets\img\CAROUSEL-PROSES\1.png') }}" alt="Picture 1" class="picture-keunggulanjendral">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets\img\CAROUSEL-PROSES\2.png') }}" alt="Picture 3" class="picture-keunggulanjendral">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets\img\CAROUSEL-PROSES\3.png') }}" alt="Picture 4" class="picture-keunggulanjendral">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets\img\CAROUSEL-PROSES\4.png') }}" alt="Picture 2" class="picture-keunggulanjendral">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets\img\CAROUSEL-PROSES\5.png') }}" alt="Picture 5" class="picture-keunggulanjendral">
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
            </div>
        </div>
    </section>
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('#swiper-process', {
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
    <!--End Project One-->

    <div class="bottom-cover"></div>

    <!--Start Testimonials One-->
    <section class="testimonials-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Testimoni</h4>
                </div>
                <p>
                    Dengarkan apa kata partner yang sudah menggunakan jasa kami, simak bagaimana service kami membantu mereka dengan kebutuhan impor dan betapa puasnya mereka.
                </p>
            </div>
            <div class="testimonials-one__inner">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                    "loop": false,
                    "pagination": {
                        "el": "#testimonial-one-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "navigation": {
                        "nextEl": "#testimonial-two__swiper-button-next",
                        "prevEl": "#testimonial-two__swiper-button-prev"
                    },
                    "autoplay": { "delay": 3000 },
                    "breakpoints": {
                        "0": { "spaceBetween": 30, "slidesPerView": 1 },
                        "375": { "spaceBetween": 30, "slidesPerView": 1 },
                        "575": { "spaceBetween": 30, "slidesPerView": 1 },
                        "768": { "spaceBetween": 30, "slidesPerView": 1 },
                        "992": { "spaceBetween": 30, "slidesPerView": 2 },
                        "1200": { "spaceBetween": 30, "slidesPerView": 2 }
                    }
                }'>
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__single">
                                <div class="testimonial-card">
                                    <div class="quote">❝</div>
                                    <div class="testimonial-content">
                                        <p>Terimakasih tim, pengiriman cepat stok saya jadi aman customer juga ga pada cancel. Harga juga sesuai sama yang diobrolin di awal. Mantap pokoknya</p>
                                        <h3>Fiqri</h3>
                                        <span>Bisnis Case HP</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__single">
                                <div class="testimonial-card">
                                    <div class="quote">❝</div>
                                    <div class="testimonial-content">
                                        <p>Waktu pertama mau impor bingung nyari barang sama suplier, terimakasih tim jendral sudah dibantu nyari suplier yang harganya pas jadi bisnis saya bisa naik profitnya</p>
                                        <h3>Dery</h3>
                                        <span>Pengusaha Kacamata</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__single">
                                <div class="testimonial-card">
                                    <div class="quote">❝</div>
                                    <div class="testimonial-content">
                                        <p>Mantap servisnya dibantu dicarikan suplier yang lebih terpercaya dan murah, meski sempat deg-degan tapi barangnya cocok dan sesuai estimasi</p>
                                        <h3>Edy</h3>
                                        <span>Pengusaha Jetski</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Testimonial 4 -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__single">
                                <div class="testimonial-card">
                                    <div class="quote">❝</div>
                                    <div class="testimonial-content">
                                        <p>Pelayanan cepat dan fast respon. Barang selalu aman dan tiba sesuai estimasi. Bisa beli satuan atau banyak tetap dilayani. Recommended. Terimakasih</p>
                                        <h3>SVISORJOGJA</h3>
                                        <span>Bisnis Visor Helm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Testimonial 5 -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__single">
                                <div class="testimonial-card">
                                    <div class="quote">❝</div>
                                    <div class="testimonial-content">
                                        <p>Aman terpercaya, barang sesuai dan sampai pas sama estimasi. Pasti jadi langganan</p>
                                        <h3>Wiguna</h3>
                                        <span>Pengusaha Case Handphone</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desktop-testimonials">
                    <div class="testimonials-row top-row">
                        <!-- Testimonial 1 -->
                        <div class="testimonials-one__single">
                            <div class="testimonial-card">
                                <div class="quote">❝</div>
                                <div class="testimonial-content">
                                    <p>Terimakasih tim, pengiriman cepat stok saya jadi aman customer juga ga pada cancel. Harga juga sesuai sama yang diobrolin di awal. Mantap pokoknya</p>
                                    <h3>Fiqri</h3>
                                    <span>Bisnis Case HP</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonials-one__single">
                            <div class="testimonial-card">
                                <div class="quote">❝</div>
                                <div class="testimonial-content">
                                    <p>Waktu pertama mau impor bingung nyari barang sama suplier, terimakasih tim jendral sudah dibantu nyari suplier yang harganya pas jadi bisnis saya bisa naik profitnya</p>
                                    <h3>Dery</h3>
                                    <span>Pengusaha Kacamata</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonials-one__single">
                            <div class="testimonial-card">
                                <div class="quote">❝</div>
                                <div class="testimonial-content">
                                    <p>Mantap servisnya dibantu dicarikan suplier yang lebih terpercaya dan murah, meski sempat deg-degan tapi barangnya cocok dan sesuai estimasi</p>
                                    <h3>Edy</h3>
                                    <span>Pengusaha Jetski</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonials-row bottom-row">
                        <!-- Testimonial 4 -->
                        <div class="testimonials-one__single">
                            <div class="testimonial-card">
                                <div class="quote">❝</div>
                                <div class="testimonial-content">
                                    <p>Pelayanan cepat dan fast respon. Barang selalu aman dan tiba sesuai estimasi. Bisa beli satuan atau banyak tetap dilayani. Recommended. Terimakasih</p>
                                    <h3>SVISORJOGJA</h3>
                                    <span>Bisnis Visor Helm</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonials-one__single">
                            <div class="testimonial-card">
                                <div class="quote">❝</div>
                                <div class="testimonial-content">
                                    <p>Aman terpercaya, barang sesuai dan sampai pas sama estimasi. Pasti jadi langganan</p>
                                    <h3>Wiguna</h3>
                                    <span>Pengusaha Case Handphone</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let swiperElement = document.querySelector(".thm-swiper__slider");
        let swiper;
        
        if (swiperElement) {
            let swiperOptions = JSON.parse(swiperElement.getAttribute("data-swiper-options"));
    
            // Function to handle Swiper initialization based on screen size
            function handleSwiper() {
                // Always destroy previous swiper instance if it exists
                if (swiper) {
                    swiper.destroy(true, true);
                    swiper = null;
                }
                
                // Initialize swiper on smaller screens
                // if (window.innerWidth < 1200) {
                swiper = new Swiper(swiperElement, swiperOptions);
                // }
            }
    
            // Run on page load
            handleSwiper();
    
            // Run on window resize with debounce
            let resizeTimer;
            window.addEventListener("resize", function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(handleSwiper, 250);
            });
        }
    });
    </script>
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
