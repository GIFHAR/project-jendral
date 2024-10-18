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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/pricing.css') }}">
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


    <section class="body-color">
        <section class="container pricing-box">
            <div class="pricing-head">
                <h1>Pricing</h1>
            </div>

            
            <form action="{{ route('calculateResult') }}" method="POST" class="form-container">
                    @csrf
                        {{-- <div class="row"> --}}
                            <div class="personal-id-container" >
                                <h3>Personal ID</h3>
                                <label for="name">Name</label><br>
                                <input type="text" id="name" name="name" required>
                    
                                <label for="whatsapp">WhatsApp Number</label><br>
                                <input type="text" id="whatsapp" name="whatsapp" required>
                    
                                <label for="address">Address</label><br>
                                <input type="text" id="address" name="address" required>
                    
                                <label for="email">Email</label><br>
                                <input type="email" id="email" name="email" required>
                            </div>
                    
                            <div class="links-container">
                                <h3>Links</h3>
                                <label for="number_of_links">Number of Links</label><br>
                                <input type="number" id="number_of_links" name="number_of_links" min="1" required>
                    
                                <label for="link_1">Link 1</label></br>
                                <input type="url" id="link_1" name="link_1">
                    
                                <label for="detail_1">Detail 1</label></br>
                                <input type="text" id="detail_1" name="detail_1">
                    
                                <label for="price_1">Price 1</label></br>
                                <div class="price-group">
                                    <input type="number" id="price_1" name="price_1" required>
                                    <label><input type="radio" name="curr" value="Rp" required> Rp</label>
                                    <label><input type="radio" name="curr" value="USD" required> USD</label>
                                </div>
                    
                                <label for="quantity_1">Quantity 1</label></br>
                                <input type="number" id="quantity_1" name="quantity_1" min="1" required>
                            </div>
                    
                            <div class="rest-container">
                                <h3>Other Details</h3>
                                <label for="freight_type">Freight Type</label></br>
                                <select id="freight_type" name="freight_type" required>
                                    <option value="sea_freight">Sea Freight - Regular</option>
                                    <option value="air_freight_regular">Air Freight - Regular</option>
                                    <option value="air_freight_express">Air Freight - Express</option>
                                </select></br></br>
                    
                                <label for="item_category">Item Category</label></br>
                                <select id="item_category" name="item_category" required>
                                    <option value="umum">Umum   </option>
                                    <option value="lartas_ringan">Lartas Ringan   </option>
                                    <option value="lartas_berat">Lartas Berat   </option>
                                </select></br></br>
                    
                                <label for="shipping_platform">Shipping Platform</label></br>
                                <div class="radio-group">
                                    <label><input type="radio" name="platform" value="transfer" required> Transfer</label>
                                    <label><input type="radio" name="platform" value="tokopedia" required> Tokopedia</label>
                                    <label><input type="radio" name="platform" value="shopee" required> Shopee</label>
                                </div></br>
                    
                                <label for="volume">Total Volume</label></br>
                                <div class="dimension-group">
                                    <input type="number" id="length" name="length" placeholder="Panjang (cm)" required>
                                    <input type="number" id="width" name="width" placeholder="Lebar (cm)" required>
                                    <input type="number" id="height" name="height" placeholder="Tinggi (cm)" required>
                                </div>
                    
                                <label for="total_weight">Total Weight</label></br>
                                <input type="number" id="total_weight" name="total_weight" placeholder="kg" required>
                    
                                <button type="submit" class="calculate-btn">Calculate</button>
                            </div>
                        </div>
                    {{-- </div> --}}
                </form>
            
        </section>
    </section>
    
    
    <!-- JS here -->
    <script src="{{ asset('js/scripts.js') }}"></script>
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
