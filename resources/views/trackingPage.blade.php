<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jenderal Website</title>
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
    <style>
        body, html {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .content {
            flex: 1;
        }
    </style>
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
        <form id="tracking-form" method="GET" class="tracking-header">
            <input type="text" id="marking_code" name="marking_code" placeholder="Enter your marking code..." class="tracking-input" value="{{ request()->marking_code }}">
            <button type="submit" class="tracking-button"><strong>Track</strong></button>
        </form>
        
        <script>
            document.getElementById('tracking-form').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                
                var markingCode = document.getElementById('marking_code').value; // Get the marking code value
        
                if(markingCode) {
                    // Redirect to the desired URL format
                    window.location.href = `/orders/${markingCode}`;
                }
            });
        </script>
    
        @if(isset($order))
            @php
                $statuses = [
                    'SELLER' => 'Preparing order',
                    'OTW GUDANG CHINA' => 'In transit to China warehouse',
                    'GUDANG CHINA' => 'At China warehouse',
                    'SHIP CHINA - INDO' => 'Shipping to Indonesia',
                    'GUDANG JAKARTA' => 'At Jakarta warehouse',
                    'SHIPPING TO BUYER' => 'Shipping to buyer',
                    'DONE' => 'Delivered'
                ];
            
                $currentStatusIndex = array_search($order->posisi_produk, array_keys($statuses));
                $currentStatus = $statuses[$order->posisi_produk] ?? '-';
            @endphp
            <div class="order-info">
                <h2>Order Information for  <span class="order-number">{{ $order->marking_code }}</span></h2>
                <p><strong>Product Position:</strong> {{ $currentStatus }}</p>
            </div>
    
            <div class="tracking-timeline">
                <ul class="timeline">
                    <li class="completed">
                        <img src="{{ asset('assets/img/resource/icon-check.png') }}" alt="Completed" class="status-icon">
                        <div class="timeline-content">
                            <h4>Order is processed by the seller</h4>
                            <p>Order date: {{ $order->tanggal_order }}</p>
                        </div>
                    </li>
                    
                    
                    @foreach($statuses as $status => $description)
                        @if($status != 'SELLER')
                            <li class="{{ $currentStatusIndex !== false && array_search($status, array_keys($statuses)) <= $currentStatusIndex ? 'completed' : '' }}">
                                <img src="{{ asset('assets/img/resource/icon-' . ($currentStatusIndex !== false && array_search($status, array_keys($statuses)) <= $currentStatusIndex ? 'check' : 'uncheck') . '.png') }}" alt="Status" class="status-icon">
                                <div class="timeline-content">
                                    <h4>{{ $description }}</h4>
                                    @if($status == 'SHIP CHINA - INDO')
                                        <p>Via: {{ $order->pengiriman_via }}</p>
                                    @endif
                                    @if($status == 'GUDANG JAKARTA')
                                        @if($order->estimasi_bongkar)
                                            <p><strong>Estimated Unloading Date:</strong> {{ $order->estimasi_bongkar }}</p>
                                        @endif
                                    @endif
                                </div>
                            </li>
                        @endif
                    @endforeach
                    
                    <li>
                        {{-- spacer, do not remove --}}
                    </li>
                </ul>
            </div>
        @elseif(isset($error))
            <p>{{ $error }}</p>
        @endif
    </div>

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
