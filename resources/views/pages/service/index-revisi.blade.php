@extends('layout.index')

@section('style')
{{--
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
@endsection

@section('content')
<section class="blog-page1">
    <div class="container">
        <div class="row">
            <!-- Blog Post 1 -->
            <div class="col-xl-6">
                <!--Start Blog Page Single-->
                <div class="blog-one__left-box blog-page__single">
                    <div class="blog-one__left-box-img blog-page1__img">
                        <img src="{{ asset('assets/img/blog/blog-page1__img1.jpg') }}" alt="#">
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
                            <a class="thm-btn" href="#">
                                <span class="txt">Hubungi Kami</span>
                                <i class="icon-next"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Blog Page Single-->
            </div>

            <!-- Blog Post 2 -->
            <div class="col-xl-6">
                <!--Start Blog Page Single-->
                <div class="blog-one__left-box blog-page__single">
                    <div class="blog-one__left-box-img blog-page1__img">
                        <img src="{{ asset('assets/img/blog/blog-page1__img2.jpg') }}" alt="#">
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
                            <a class="thm-btn" href="blog-details.html">
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

<section class="cta-one cta-one--style2">
    <div class="container">
        <div class="cta-one__inner cta-one__inner--style2">
            <div class="cta-one__inner-box cta-one__inner-box--style2">
                <div class="title-box">
                    <h2>Your Business One-Stop <br>Import Partner & Solutions</h2>
                </div>
            </div>
            <div class="cta-one__btn cta-one__btn--style2">
                <a href="#" class="thm-btn">
                    <span class="txt">
                        contact us
                    </span>
                </a>
            </div>

        </div>
    </div>
</section>

<!--Start Service Two-->
<section class="service-two service-two--service">
    <div class="container">
        <div class="row">
            <!--Start Single Service Three-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="service-three__single">
                    <div class="service-three__single-img">
                        <img src="assets/img/service/service-three__img1.jpg" alt="#">
                        <div class="service-three__single-img-bg"></div>
                    </div>
                    <div class="service-three__single-content">
                        <div class="icon">
                            <span class="icon-delivery-truck2"></span>
                        </div>
                        <div class="title">
                            <h3><a href="service-details.html">Jalur Udara</a></h3>
                        </div>
                        <div class="text">
                            <p>
                                Gunakan pengiriman udara untuk pengiriman yang lebih cepat. Untuk kebutuhan pengiriman
                                cepat dengan barang yang tidak
                                terlalu berat
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="col-xl-12 col-lg-6 col-md-6">
                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-packages3"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Jalur Udara - Reguler</a></h3>
                                <p>- &nbsp;&nbsp;Barang dengan berat Min. 30 kg. Harga Pengiriman: Rp. 150,000</p>
                                <p>- &nbsp;&nbsp;Barang dengan berat lebih dari 100 kg bisa dinego</p>

                                <div class="alert alert-primary mt-4 text-center font-weight-bold p-2" role="alert">
                                    Time Estimation: 14 Hari
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-6 col-md-6">
                    <div class="service-details__content-text3-single">
                        <div class="inner">
                            <div class="icon">
                                <span class="icon-packages3"></span>
                            </div>
                            <div class="content-box">
                                <h3><a href="#">Jalur Udara - Express</a></h3>
                                <p>- &nbsp;&nbsp;Barang dengan berat Min. 1 kg. Harga Pengiriman: Rp. 205,000</p>
                                <p>- &nbsp;&nbsp;Barang dengan berat lebih dari 100 kg bisa dinego</p>

                                <div class="alert alert-primary mt-4 text-center font-weight-bold p-2" role="alert">
                                    Time Estimation: 4-6 Hari
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!--Start Single Service Three-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="service-three__single">
                    <div class="service-three__single-img">
                        <img src="assets/img/service/service-three__img1.jpg" alt="#">
                        <div class="service-three__single-img-bg"></div>
                    </div>
                    <div class="service-three__single-content">
                        <div class="icon">
                            <span class="icon-delivery-truck2"></span>
                        </div>
                        <div class="title">
                            <h3><a href="service-details.html">Jalur Laut</a></h3>
                        </div>
                        <div class="text">
                            <p>
                                Untuk pengiriman dalam jumlah banyak, pengiriman lewat laut menjadi pilihan yang tepat
                                karena harga yang murah dan
                                kemampuannya untuk mengirim lebih banyak juga barang-barang berat
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="service-details__content-text3-single">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-packages3"></span>
                                </div>
                                <div class="content-box">
                                    <h3><a href="#">Umum</a></h3>
                                    <p>Harga mulai dari Rp.4,500/cbm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="service-details__content-text3-single">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-packages5"></span>
                                </div>
                                <div class="content-box">
                                    <h3><a href="#">Garment</a></h3>
                                    <p>Harga mulai dari Rp.7,5000/cbm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="service-details__content-text3-single">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-order1"></span>
                                </div>
                                <div class="content-box">
                                    <h3><a href="#">Lartas Ringan</a></h3>
                                    <p>Harga mulai dari Rp.5,000/cbm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="service-details__content-text3-single">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-mobile1"></span>
                                </div>
                                <div class="content-box">
                                    <h3><a href="#">Lartas Berat</a></h3>
                                    <p>Harga mulai dari Rp.6,000/cbm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="service-details__content-text3-single">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-order1"></span>
                                </div>
                                <div class="content-box">
                                    <h3><a href="#">Obat</a></h3>
                                    <p>Harga mulai dari Rp.8,500/cbm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="service-details__content-text3-single">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-mobile1"></span>
                                </div>
                                <div class="content-box">
                                    <h3><a href="#">Makanan</a></h3>
                                    <p>Harga mulai dari Rp.7,000/cbm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card p-4">
                            <h3 class="mb-2" style="margin-top: -5px;">Harga</h3>
                            <p>Dihitung mulai dari <b>0.1 cbm</b></p>
                            <p>Biaya konsolidasi <b>Rp. 50,000/0.1 cbm</b></p>
                            <p style="font-size: 10px;">*Harga tergantung ketentuan dan kondisi</p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card p-4">
                            <h3 class="mb-3" style="margin-top: -5px;">Estimasi Waktu</h3>
                            <div class="alert alert-primary font-weight-bold p-2 text-center" role="alert">
                                3-4 Minggu
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--End Service Two-->

@endsection

@section('script')
<script src="{{ asset('js/scripts.js') }}"></script>
@endsection
