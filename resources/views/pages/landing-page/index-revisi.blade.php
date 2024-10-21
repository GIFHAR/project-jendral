@extends('layout.index')

@section('style')
{{--
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
@endsection

@section('content')
<!--Start Banner One-->
<section class="banner-one">
    <div class="banner-one__bg wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
        style="background-image: url(assets/img/home-jendral/background-utama.png);">
    </div>
    {{-- <div class="banner-one__bg-shape wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="border-box"></div>
    </div> --}}
    {{-- <div class="banner-one__shape1">
        <img class="float-bob-y" src="assets/img/shape/banner-one__shape1.png" alt="#">
    </div>
    <div class="banner-one__shape2 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
        <img class="float-bob-y" src="assets/img/shape/banner-one__shape2.png" alt="#">
    </div> --}}
    <div class="container">
        <div class="banner-one__content wow fadeInLeft" style="margin-top: -80px" data-wow-delay="0ms"
            data-wow-duration="1500ms">
            <div class="sub-title">
                <h5>SELAMAT DATANG</h5>
            </div>
            <div class="big-title">
                <h2>
                    nikmati kenyamanan dalam <br> proses import dan fleksibilitas <br> untuk transaksi bisnis anda <br>
                    bersama jendral import
                </h2>
            </div>
        </div>
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
    </div>
    <!-- Gallery of 7 images -->
</section>
<!--End Banner One-->

<!--Start Service Three-->
<section class="service-three">
    <div class="container">
        <div class="sec-title text-left">
            <h2>
                Kenapa Jenderal Import Menjadi Partner Terbaik Import Anda
            </h2>
            <p>
                Dipercayai oleh ratusan pelanggan baik individu maupun bisnis sebagai partner import mereka. Dan berikut
                beberapa kelebihan pelayanan yang kami berikan.
            </p>
        </div>
        <div class="row">

            <!--Start Single Service Three-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="service-three__single">
                    <div class="service-three__single-img">
                        <img src="{{ asset('assets/img/landing-page/sea-lcl.png') }}" alt="#">
                        <div class="service-three__single-img-bg"></div>
                    </div>
                    <div class="service-three__single-content">
                        <div class="icon">
                            <span class="icon-delivery-truck2"></span>
                        </div>
                        <div class="title">
                            <h3><a href="#">Express Transport</a></h3>
                        </div>
                        <div class="text">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Three-->
            <!--Start Single Service Three-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="service-three__single">
                    <div class="service-three__single-img">
                        <img src="{{ asset('assets/img/landing-page/sea-lcl.png') }}" alt="#">
                        <div class="service-three__single-img-bg"></div>
                    </div>
                    <div class="service-three__single-content">
                        <div class="icon">
                            <span class="icon-shipping1"></span>
                        </div>
                        <div class="title">
                            <h3><a href="#">Aero Logix</a></h3>
                        </div>
                        <div class="text">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Three-->
            <!--Start Single Service Three-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="service-three__single">
                    <div class="service-three__single-img">
                        <img src="{{ asset('assets/img/landing-page/sea-lcl.png') }}" alt="#">
                        <div class="service-three__single-img-bg"></div>
                    </div>
                    <div class="service-three__single-content">
                        <div class="icon">
                            <span class="icon-cancel"></span>
                        </div>
                        <div class="title">
                            <h3><a href="#">Speedy Transit</a></h3>
                        </div>
                        <div class="text">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Three-->

        </div>
    </div>
</section>
<!--End Service Three-->

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
                            Selain sebagai jasa ekspedisi China ke Indonesia, kami juga memberikan layanan lainnya
                            seperti:
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
                                    </a>
                                </div>
                            </div>
                            <div class="project-one__single-content text-center">
                                <div class="title-box">
                                    <h3><a href="project-details.html">Jalur Udara</a></h3>
                                    <p>Layanan Pengiriman barang impor via udara untuk ukuran barang kecil/sedang</p>
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
                                    </a>
                                </div>
                            </div>
                            <div class="project-one__single-content text-center">
                                <div class="title-box">
                                    <h3><a href="project-details.html">Jalur Laut</a></h3>
                                    <p>Layanan Pengiriman barang impor via udara untuk ukuran barang kecil/sedang/berat
                                    </p>
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

<section class="video-one">
    <div class="video-one__bg" data-jarallax data-speed="0.1" data-imgPosition="0% 0%"
        style="background-image: url(assets/img/resource/video-one__img1.jpg);"></div>
    <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
        <a class="video-popup" title="Video Gallery" href="https://www.youtube.com/watch?v=06dV9txztKY">
            <span class="icon-play-button-arrowhead"></span>
        </a>
    </div>
</section>

<section class="testimonials-two">
    <div class="testimonials-two__pattern"
        style="background-image: url(assets/img/pattern/testimonials-two__pattern1.png);">
    </div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h4>Testomonial</h4>
            </div>
            <h2>
                Navigating your supply chain<br>with precision
            </h2>
        </div>

        <div class="testimonials-two__inner">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                    "spaceBetween": 50,
                    "slidesPerView": 3,
                    "speed": 2000,
                    "loop": false,
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "progressbar",
                        "clickable": true
                        },
                    "navigation": {
                        "nextEl": "#team-one__swiper-button-next",
                        "prevEl": "#team-one__swiper-button-prev"
                        },
                    "autoplay": { "delay": 9000 },
                    "breakpoints": {
                            "0": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "768": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "992": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "1200": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            }
                        }
                    }'>

                <div class="swiper-wrapper">

                    <!--Start Single Testimonials Two-->
                    <div class="swiper-slide">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/testimonial/testimonials-two__img1.jpg" alt="#">
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-quote-right"></span>
                                </div>
                            </div>
                            <div class="testimonials-two__single-content">
                                <div class="text">
                                    <p>
                                        It is a long established fact that a reader willklil beinl distracted by
                                        the
                                        hjkljli readable contentli of a page how to go
                                    </p>
                                </div>
                                <div class="customer-info">
                                    <div class="title">
                                        <h3>Marvin McKinney</h3>
                                        <p>Medical Assistant</p>
                                    </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonials Two-->
                    <!--Start Single Testimonials Two-->
                    <div class="swiper-slide">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/testimonial/testimonials-two__img2.jpg" alt="#">
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-quote-right"></span>
                                </div>
                            </div>
                            <div class="testimonials-two__single-content">
                                <div class="text">
                                    <p>
                                        It is a long established fact that a reader willklil beinl distracted by
                                        the
                                        hjkljli readable contentli of a page how to go
                                    </p>
                                </div>
                                <div class="customer-info">
                                    <div class="title">
                                        <h3>Cody Fisher</h3>
                                        <p>Web Designer</p>
                                    </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonials Two-->


                    <!--Start Single Testimonials Two-->
                    <div class="swiper-slide">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/testimonial/testimonials-two__img1.jpg" alt="#">
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-quote-right"></span>
                                </div>
                            </div>
                            <div class="testimonials-two__single-content">
                                <div class="text">
                                    <p>
                                        It is a long established fact that a reader willklil beinl distracted by
                                        the
                                        hjkljli readable contentli of a page how to go
                                    </p>
                                </div>
                                <div class="customer-info">
                                    <div class="title">
                                        <h3>Marvin McKinney</h3>
                                        <p>Medical Assistant</p>
                                    </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonials Two-->
                    <!--Start Single Testimonials Two-->
                    <div class="swiper-slide">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/testimonial/testimonials-two__img2.jpg" alt="#">
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-quote-right"></span>
                                </div>
                            </div>
                            <div class="testimonials-two__single-content">
                                <div class="text">
                                    <p>
                                        It is a long established fact that a reader willklil beinl distracted by
                                        the
                                        hjkljli readable contentli of a page how to go
                                    </p>
                                </div>
                                <div class="customer-info">
                                    <div class="title">
                                        <h3>Cody Fisher</h3>
                                        <p>Web Designer</p>
                                    </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonials Two-->



                </div>

                <div class="scroll-pagination">
                    <div class="swiper-pagination"></div>
                </div>


            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('#swiper-benefit', {
        loop: true,
        pagination: {
            el: '.swiper-pagination-keunggulanjendral',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next-keunggulanjendral',
            prevEl: '.swiper-button-prev-keunggulanjendral',
        },
    });
</script>
@endsection
