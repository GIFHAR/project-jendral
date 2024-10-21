@extends('layout.index')

@section('style')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
@endsection

@section('content')
    <!--Start About One-->
    <section class="about-one" style="padding-top: 100px; background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__img-box">
                        <div class="about-one__img-box-overlay-bg"></div>
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('assets/img/about-us-jendral/about-us.png') }}" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__content-box">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h4>About us</h4>
                            </div>
                            <h2>
                                Delivering efficiency one<br>mile at a time
                            </h2>
                        </div>
                        <ul style="margin-top: -20px">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text-box">
                                    <h3>
                                        Pelayanan Cepat & Fast Respond
                                    </h3>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        content of a page when looking at its layout. Lorem Ipsum is simply text
                                        of
                                        the printing
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text-box">
                                    <h3>
                                        Barang selalu aman dan tiba sesuai estimasi
                                    </h3>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        content of a page when looking at its layout. Lorem Ipsum is simply text
                                        of
                                        the printing
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text-box">
                                    <h3>
                                        Bisa beli satuan atau banyak sekaligus
                                    </h3>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        content of a page when looking at its layout. Lorem Ipsum is simply text
                                        of
                                        the printing
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About One-->

    <!--Start Who we Are-->
    <section class="who-we-are-one who-we-are-one--about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="who-we-are-one__content-box">
                        <div class="sec-title">
                            <h2>
                                Who We Are
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Jendral Import adalah agensi profesional yang telah lebih dari 5 tahun bergerak di bidang import dan pengadaan barang. Kami menyediakan berbagai kemudahan, mulai dari konsultasi bisnis, pencarian barang dan supplier, pembelian dari marketplace luar negeri hingga pengiriman ke depan rumahmu. Jadi, kamu tinggal duduk manis menunggu pesananmu datang. Kami berupaya menyediakan layanan yang fleksibel bagi anda, baik untuk pembelian satuan maupun partai besar, kami akan memberikan pelayanan terbaik kami untuk anda. Prioritas kami adalah menyediakan pelayanan yang nyaman dan aman, baik dari proses dan pengiriman barang juga harga yang terjangkau. Selain itu, kamu pun berupaya untuk menawarkan berbagai pilihan agar kamu dapat bertransaksi secara fleksibel dan mudah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="who-we-are-one__img-box" style="margin-top: 80px">
                        <img src="assets/img/resource/who-we-are-one__img1.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        </div>
    </section>
    <!--Start Who we Are-->
@endsection

