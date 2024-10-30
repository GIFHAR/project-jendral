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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/servicesrevisi.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
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
            <div class="service-first-row">
                <div class="first-parent-banner">
                    <div class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="blog-one__left-box">
                            <div class="blog-one__left-box-img">
                                <img src="assets\img\PHOTO\PHOTO\001 A.jpg" alt="#">
                            </div>
                            <div class="blog-one__left-box-content">

                                <div class="title-box">
                                    <h3>Konsultasi Bisnis dan Import</h3>
                                    <p>Konsultasikan kebutuhan impor bisnis kamu dengan tim berpengalaman
                                        kami untuk mendapatkan servis dan harga yang sesuai dengan kebutuhan bisnis kamu.</p>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="https://wa.link/mkbx1j" target="_blank">
                                        <span class="txt">Hubungi kami</span>
                                        <i class="icon-next"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="first-child-banner">
                    <div class="blog-one__sidebar-box">
                        <ul class="clearfix">

                            <li class="blog-one__sidebar-box__inner wow fadeInRight" data-wow-delay="100ms"
                                data-wow-duration="1500ms">
                                <div class="img-box">
                                    <div class="img-box-services">
                                        <img src="assets\img\PHOTO\PHOTO 1\001 A.png" alt="#">
                                    </div>
                                </div>
                                <div class="content-box">

                                    <div class="title-box">
                                        <h3>Diskusikan Kebutuhan Kamu</h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">
                                            <span class="txt">Hubungi kami</span>
                                            <i class="icon-next"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="blog-one__sidebar-box__inner wow fadeInRight" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="img-box">
                                    <div class="img-box-services">
                                        <img src="assets\img\PHOTO\PHOTO 3\003.png" alt="#">
                                    </div>
                                </div>
                                <div class="content-box">

                                    <div class="title-box">
                                        <h3>Pilihan Terbaik Untuk Pembelian dan Pengiriman</h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">
                                            <span class="txt">Hubungi kami</span>
                                            <i class="icon-next"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="blog-one__sidebar-box__inner wow fadeInRight" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                                <div class="img-box">
                                    <div class="img-box-services">
                                        <img src="assets\img\PHOTO\PHOTO 4\004.jpg" alt="#">
                                    </div>
                                </div>
                                <div class="content-box">

                                    <div class="title-box">
                                        <h3>Perhitungan HPP Barang Kamu</h3>
                                    </div>
                                    <div class="btn-box">
                                        <a href="https://wa.link/mkbx1j">
                                            <span class="txt">Hubungi kami</span>
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
                    <a href="https://wa.link/mkbx1j" class="thm-btn">
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
            <div class="service-blog-banner">
                <!-- Blog Post 1 -->
                <div class="child-service-blog-banner">
                    <!--Start Blog Page Single-->
                    <div class="blog-one__left-box blog-page__single">
                        <div class="blog-one__left-box-img blog-page1__img">
                            <div class="blog-services">
                                <img src="assets\img\PHOTO\PHOTO 5\005.png" alt="#">
                            </div>
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
                                <a class="thm-btn" href="https://wa.link/mkbx1j">
                                    <span class="txt">Hubungi Kami</span>
                                    <i class="icon-next"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Page Single-->
                </div>

                <!-- Blog Post 2 -->
                <div class="child-service-blog-banner">
                    <!--Start Blog Page Single-->
                    <div class="blog-one__left-box blog-page__single">
                        <div class="blog-one__left-box-img blog-page1__img">
                            <div class="blog-services">
                                <img src="assets\img\PHOTO\PHOTO 6 DAN 7\007.png" alt="#">
                            </div>
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
                                <a class="thm-btn" href="https://wa.link/mkbx1j">
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

    <div class="airfreight">
        <div class="container">
            <div class="freight-row">
            <!--Start Single Service Three-->
            <div class="card-airfreight">
                <div class="wow fadeInRight" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
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

    <div>
        @include('layout/footer')
    </div>

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
