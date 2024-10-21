@extends('layout.index')

@section('style')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css-new/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"> --}}
@endsection

@section('content')
    <section class="contact-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Contact us</h4>
                </div>
                <h2>
                    Get in Touch With Us
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="contact-one__list-item">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-location-pin"></span>
                                </div>
                                <div class="text">
                                    <h4>Address</h4>
                                    <p>
                                        Dhaka 102, 8000 sent behaibior utl<br>1216, road 45 house of street
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call-1"></span>
                                </div>
                                <div class="text">
                                    <h4>Lets Talk us</h4>
                                    <p>Phone number: <a href="tel:32566-800-890">+32566 - 800 - 890</a></p>
                                    <p>Fax: <a href="tel:1234-58963-007">1234 -58963 - 007</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <h4>Send us email</h4>
                                    <p>
                                        <a href="mailto:demo0023yourmailhotmail.com">demo0023yourmailhotmail.com</a>
                                    </p>
                                    <p>
                                        <a href="mailto:demo23yourmail.com">demo23yourmail.com</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="contact-one__form">
                        <form id="contact-form" action="assets/inc/mail.php" method="POST">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Full Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="contact-one__input-box">
                                        <input type="number" placeholder="Mobile" name="number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Messege"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">Submit Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>

                <div class="col-xl-2">
                    <div class="contact-one__socel-link">
                        <div class="contact-one__socel-link-inner">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="color1">
                                        <span class="icon-facebook-app-symbol"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="color2">
                                        <span class="icon-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="google-map-one">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map-one__map" allowfullscreen></iframe>
    </section>
@endsection
