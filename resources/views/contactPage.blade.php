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

    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
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

    <!--Contact One Start-->
    <section class="contact-one">
        {{-- @if(session('success'))
            <p class="alert alert-success">
                {{ session('success') }}
            </p>
        @endif --}}
        {{-- {{ dd(session('success')) }} --}}
        <div class="container">
            <div class="contact-container">
                <section class="contact-header">
                    <div class="sec-title text-center">
                        <div class="sub-title">
                            <h4>Contact us</h4>
                        </div>
                        <h2>
                            Get in Touch With Us
                        </h2>
                    </div>
                </section>
                <section class="contact-body">
                {{-- <div class="row"> --}}

                    {{-- <div class="col-xl-4"> --}}
                        <div class="contact-one__list-item">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-location-pin"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Address</h4>
                                        <p>
                                            Jl. Tasikmalaya No.2 Kacapiring, Kec. Batununggal, Kota Bandung, Jawa Barat 40271
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call-1"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Lets Talk With Us</h4>
                                        <p>Whatsapp number: <br><a href="tel:62823-1819-2056">+62 823-1819-2056</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Send us email</h4>
                                        <p>
                                            <a href="mailto:jenderalimport@gmail.com">jenderalimport@gmail.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    {{-- </div> --}}

                    {{-- <div class="col-xl-6 col-lg-12"> --}}
                        <div class="contact-one__form">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="contact-form-row">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Full name" name="name" required>
                                    </div>
                                    <div class="contact-one__input-box">
                                        <input type="email" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="contact-one__btn-box">
                                        <button class="thm-btn" type="submit">
                                            <span class="txt">Submit Now</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact-one__socel-link">
                            <div class="contact-one__socel-link-inner">
                                <ul>
                                    <li>
                                        <a href="https://wa.link/mkbx1j">
                                            <img src="assets/img/resource/icon-wa.png" alt="Weight Icon" class="icon-contact" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/jenderalimport" class="color2">
                                            <span class="icon-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    {{-- </div> --}}


                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--Contact One End-->



    <!--Start Google Map One-->
    {{-- <section class="google-map-one">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map-one__map" allowfullscreen></iframe>
    </section> --}}
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
