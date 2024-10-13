<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jendral Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
    <link rel="stylesheet" href="{{ asset('css/module-css/tracking.css') }}">
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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/tracking.css') }}">
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

    <div class="tracking-container">
        <div class="tracking-header">
            <input type="text" placeholder="Marking Code" class="tracking-input">
            <button class="tracking-button">Tracking</button>
        </div>

        <div class="order-info">
            <h2>Order Number <span class="order-number">#X28930LI</span></h2>
        </div>

        <div class="tracking-timeline">
            <ul class="timeline">
                <li class="completed">
                    <img src="assets/img/resource/icon-check.png" alt="Completed" class="status-icon">
                    <div class="timeline-content">
                        <h4>Orders are processed by the seller</h4>
                        <p>Order date : 01/01/2022</p>
                    </div>
                </li>
                <li class="completed">
                    <img src="assets/img/resource/icon-check.png" alt="Completed" class="status-icon">
                    <div class="timeline-content">
                        <h4>The order is on its way to the China warehouse</h4>
                        <p>Delivery time : 01/01/2022<br>Estimated time : 01/01/2022</p>
                    </div>
                </li>
                <li class="completed">
                    <img src="assets/img/resource/icon-check.png" alt="Completed" class="status-icon">
                    <div class="timeline-content">
                        <h4>The order has arrived at the Chinese warehouse</h4>
                        <p>Time arrives : 01/01/2022<br>Estimated complete loading: 01/01/2022</p>
                    </div>
                </li>
                <li>
                    <img src="assets/img/resource/icon-uncheck.png" alt="Uncomplete" class="status-icon">
                    <div class="timeline-content">
                        <h4>Order is in transit via (air/sea)</h4>
                        <p>Delivery time : 01/01/2022<br>Estimated time : 01/01/2022</p>
                    </div>
                </li>
                <li>
                    <img src="assets/img/resource/icon-uncheck.png" alt="Uncomplete" class="status-icon">
                    <div class="timeline-content">
                        <h4>The order arrived at the Jakarta warehouse</h4>
                        <p>Time arrives : 01/01/2022<br>Estimated time : 01/01/2022</p>
                    </div>
                </li>
                <li>
                    <img src="assets/img/resource/icon-uncheck.png" alt="Uncomplete" class="status-icon">
                    <div class="timeline-content">
                        <h4>Orders are in the process of being sent by local couriers</h4>
                        <p>Receipt number : 124343524636436</p>
                    </div>
                </li>
                <li>
                    <img src="assets/img/resource/icon-uncheck.png" alt="Uncomplete" class="status-icon">
                    <div class="timeline-content">
                        <h4>The order has arrived at your house</h4>
                        <p>Please confirm if you have received it</p>
                    </div>
                </li>
            </ul>
        </div>
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
