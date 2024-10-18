<!-- Start Extra Info -->
<div class="extra-info">
    <div class="close-icon menu-close">
        <button>
            <i class="icon-close"></i>
        </button>
    </div>
    <div class="logo-side">
        <a href="home"><img src="{{asset('assets/img/headerjendral/logojendral.png')}}" alt="Logo"">
    </div>
    <div class="side-info">
        <div class="content-box">
            <h3>Welcome to<br> Jenderal Import</h3>
        </div>
        <!--Start Sidebar Contact Info -->
        <div class="sidebar-contact-info">
            <ul>
                <li>
                    <div class="icon">
                        <span class="icon-open-mail"></span>
                    </div>
                    <div class="text">
                        <p><a href="mailto:jendralimport@gmail.com">jendralimport@gmail.com</a></p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="fas fa-map-marker-alt"></span>
                    </div>
                    <div class="text">
                        <p>Jl. Tasikmalaya No.2 Kacapiring, Kec. Batununggal, Kota Bandung, Jawa Barat 40271</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="fab fa-instagram"></span>
                    </div>
                    <div class="text">
                        <p>@jenderalimport</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="fab fa-whatsapp"></span>
                    </div>
                    <div class="text">
                        <p>+62 823-1819-2056</p>
                    </div>
                </li>
            </ul>
        </div>
        <!--End Sidebar Contact Info -->

    </div>
</div>
<div class="offcanvas-overly"></div>
<!-- End Extra Info -->

<!--Start Main Header One -->
<header class="main-header main-header-one">
    <div id="sticky-header" class="menu-area">
        <div class="container">
            <div class="main-header-one__inner">

                <!--Start Main Header one Inner Left -->
                <div class="main-header-one__inner-left">
                    <div class="logo-box-one">
                        <a href="home">
                            <img src="{{asset('assets/img/headerjendral/logojendralHijau.png')}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <!--End Main Header one Inner Left -->

                <!--Start Main Header one Inner Right -->
                <div class="main-header-one__inner-right">

                    <div class="main-header-one__inner-right__bottom">

                        <div class="menu-area__inner">
                            <div class="mobile-nav-toggler">
                                <i class="fas fa-bars"></i>
                            </div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="navbar-wrap main-menu">
                                        <ul class="navigation">
                                            <li><a href="{{ route('home')}}">Home</a></li>
                                            <li><a href="{{ route('services')}}">Services</a></li>
                                            <li><a href="{{ route('pricing')}}">Pricing</a></li>
                                            <li><a href="{{ route('tracking')}}">Tracking</a></li>
                                            <li><a href="{{ route('contact')}}">Contacts</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <div class="main-menu-right-box-one">
                            {{-- <div class="search-box-one">
                                <a href="#" class="main-menu__search search-toggler">
                                    <span class="icon-search-interface-symbol"></span>
                                </a>
                            </div> --}}
                            <div class="side-content-button-one">
                                <a class="menu-tigger" href="#">
                                    <span class="line"></span>
                                    <span class="line two"></span>
                                </a>
                            </div>
                        </div>


                    </div>
                    <!--End Main Header one Inner Right Bottom-->
                </div>
                <!--End Main Header one Inner Right -->


            </div>
        </div>
    </div>

    <!--Start Mobile Menu  -->
    <div class="mobile-menu">
        <nav class="menu-box">
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <div class="nav-logo">
                <a href="home"><img src="assets/img/headerjendral/logojendralHijau.png" alt="Logo"></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="social-links">
                <ul class="clearfix list-wrap">
                    <li>
                        <a href="https://wa.link/kl0gdo">
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
        </nav>
    </div>
    <div class="menu-backdrop"></div>
    <!-- End Mobile Menu -->

</header>