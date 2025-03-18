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
    <style>
        .banner-three {
            background-image: url('assets/img/headerjendral/PricelistHeader.png');
            background-size: cover;
            background-position: center;
            height: 500px;
        }
        
        .fp-container {
            background-color: white;
            padding: 50px;
        }

        .fp-section {
            margin-bottom: 40px;
        }

        .fp-title {
            color: #1c5631;
            padding: 8px 0;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .fp-green-line {
            height: 5px;
            background-color: #1c5631;
            margin-bottom: 15px;
        }

        .fp-short-green-line {
            height: 5px;
            background-color: #1c5631;
            width: 30%;
            margin-top: 5px;
            margin-bottom: 20px;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
            font-size: 16px;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f9f9f9;
        }

        .fp-note, .fp-note-footer, .fp-footer-note {
            font-size: 16px;
            text-align: center;
            margin: 15px 0;
            color: #ff5c33;
        }

        @media (max-width: 768px) {
            .fp-title {
                font-size: 22px;
            }
            table {
                font-size: 14px;
            }
            th, td {
                padding: 6px;
            }
            .fp-note, .fp-note-footer, .fp-footer-note {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 1200px) {
            .banner-three {
                background-image: url('assets/img/headerjendral/PricelistHeader-mobile.png');
                height: 250px;
                background-position: left center;
                background-repeat: no-repeat;
                background-size: auto;
            }
        }
    </style>

</head>

<body class="body-gray-bg color-fish-chrome">
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
    <section class="banner-three"></section>

    <!--Start Layout Services-->
    <div class="container">
        <div class="fp-container">
            <div class="fp-section">
                <div class="fp-green-line"></div>
                <div class="fp-title">SEA FREIGHT</div>
                <div class="fp-short-green-line"></div>
        
                <div class="table-container">
                    <table>
                        <tr>
                            <th>Produk Kategori</th>
                            <th>Price / M³</th>
                            <th>Start From</th>
                            <th>Estimasi</th>
                        </tr>
                        <tr>
                            <td>Phonecase</td>
                            <td>4.500.000</td>
                            <td>450.000</td>
                            <td>21 - 30 Hari</td>
                        </tr>
                        <tr>
                            <td>Bags</td>
                            <td>4.500.000</td>
                            <td>450.000</td>
                            <td>21 - 30 Hari</td>
                        </tr>
                        <tr>
                            <td>Sepatu Brand/<br>Non-Brand</td>
                            <td>4.600.000</td>
                            <td>460.000</td>
                            <td>21 - 30 Hari</td>
                        </tr>
                        <tr>
                            <td>Accs HP</td>
                            <td>5.000.000</td>
                            <td>500.000</td>
                            <td>21 - 30 Hari</td>
                        </tr>
                        <tr>
                            <td>Barang-Barang<br>Umum</td>
                            <td>5.000.000</td>
                            <td>500.000</td>
                            <td>21 - 30 Hari</td>
                        </tr>
                        <tr>
                            <td>Barang Lartas</td>
                            <td>5.750.000</td>
                            <td>575.000</td>
                            <td>21 - 30 Hari</td>
                        </tr>
                        <tr>
                            <td>Hot-Item</td>
                            <td>6.000.000</td>
                            <td>600.000</td>
                            <td>21 - 30 Hari</td>
                        </tr>
                    </table>
                </div>
        
                <div class="fp-note">
                    Note* : Langsung kontak admin kami untuk informasi seputar harga<br>
                    barang dengan kategori Garmen, Semi Garmen & Textile
                </div>
            </div>
        
            <div class="fp-section">
                <div class="fp-green-line"></div>
                <div class="fp-title">AIR FREIGHT</div>
                <div class="fp-short-green-line"></div>
        
                <div class="table-container">
                    <table>
                        <tr>
                            <th>Produk Kategori</th>
                            <th>Price / Kg</th>
                            <th>Ketentuan</th>
                            <th>Estimasi</th>
                        </tr>
                        <tr>
                            <td>Accessories HP</td>
                            <td>180.000</td>
                            <td rowspan="2">
                                • Berat Max 15Kg/Koli<br>
                                • Lebih dari 19 kg ada 2<br>
                                opsi sesuai konfirmasi :<br>
                                • Repack dengan biaya<br>
                                RMB 30/koli (kerusakan<br>
                                barang karena repack<br>
                                tidak bisa diclaim)<br>
                                • Tanpa Repack, masuk<br>
                                Harga Lartas
                            </td>
                            <td rowspan="3">5 - 7 Hari</td>
                        </tr>
                        <tr>
                            <td>Umum</td>
                            <td>185.000</td>
                        </tr>
                        <tr>
                            <td>LCD HP /<br>PART HP</td>
                            <td>185.000</td>
                            <td>
                                • Lebih dari 19 kg masuk<br>
                                harga Lartas (tidak bisa<br>
                                repack)
                            </td>
                        </tr>
                        <tr>
                            <td>Lartas, Sparepart<br>Kendaraan & Tas Non-Branded</td>
                            <td>195.000</td>
                            <td></td>
                            <td rowspan="3">7 - 8 Hari</td>
                        </tr>
                        <tr>
                            <td>Garmen & Textile</td>
                            <td>205.000</td>
                            <td>
                                • Tidak bisa BALL / ROLL<br>
                                (Wajib Packing Dus)<br>
                                • Berat MAX 50 KG/koli<br>
                                (ukuran max 100 cm tiap<br>
                                sisi)<br>
                                • Berat dan ukuran lebih<br>
                                dari ketentuan, masuk<br>
                                Harga Sensitive
                            </td>
                        </tr>
                        <tr>
                            <td>Fashion Branded</td>
                            <td>225.000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sensitive-Cargo</td>
                            <td>225.000</td>
                            <td>
                                • Cargo Mengandung<br>
                                Battery /Oil /Capasitor/<br>
                                Motor / Dinamo / Pallet,<br>
                                Big Size, Kosmetik<br>
                                • Ukuran Packing Kayu<br>
                                Max: Panjang 200 cm,<br>
                                Tinggi 120 cm, Lebar<br>
                                100 cm
                            </td>
                            <td>7 - 8 Hari</td>
                        </tr>
                        <tr>
                            <td>Tax Refund</td>
                            <td>225.000</td>
                            <td>
                                • Min 50Kg<br>
                                • Extra : Customs Tax<br>
                                Refund Fee Mulai dari<br>
                                RMB 1200 (Untuk detail<br>
                                Contact Agent)
                            </td>
                            <td>8 - 10 Hari</td>
                        </tr>
                    </table>
                </div>
        
                <div class="fp-note-footer">
                    PACKING LIST & INVOICE HARUS SESUAI MENGANDUNG BATTERY<br>
                    / MAGNET / OIL / CAPASITOR / MOTOR /<br>
                    DINAMO WAJIB MEMBERI INFO Untuk menghindari denda 780 RMB<br>
                    karena kesalahan loading
                </div>
        
                <div class="fp-footer-note">
                    NOTE : ESTIMASI HARI MULAI TERHITUNG PADA SAAT PAKET<br>
                    DITERIMA OLEH PIHAK GUDANG CHINA.
                </div>
        
                <div class="fp-footer-note">
                    NOTE TAMBAHAN = UNTUK SEMUA KATEGORI DENGAN TOTAL<br>
                    BERAT LEBIH DARI 30 KG NEGOTIABLE
                </div>
            </div>
        </div>
        <div class="contact-section" style="margin-bottom: 50px;">
            <button class="contact-button" onclick="window.location.href='https://wa.link/mkbx1j'">Hubungi Kami</button>
            <p class="consultation-text">Untuk konsultasi & pembelanjaan</p>
        </div>
    </div>
    <!--End Layout Services-->


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
