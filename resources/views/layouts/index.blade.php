<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- === CSS Files (Laravel-safe) === -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">

    <!-- Title & Favicon -->
    <title>CCI</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logos/logo.png') }}">
</head>

<body>
    <!-- Preloader Start -->
    {{-- <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Preloader End -->

    <!-- Top Header Start -->
    {{-- <header class="top-header top-header-bg-two">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo">
    <a href="{{ url('/') }}">
    <img src="{{ asset('assets/images/logos/logo-3.png') }}" alt="Logo">
    </a>
    </div>

    </div>

    <div class="col-lg-8 col-md-10">
        <div class="head-middle m-auto">
            <ul class="head-list-item">
                <li>
                    <div class="icon"><i class="flaticon-smartphone-1"></i></div>
                    <div class="content">
                        <h3><a href="tel:+15623872011">+15623872011</a></h3>
                        <p> Sat to Thus: 8:00 AM - 9:00 PM </p>
                    </div>
                </li>

                <li>
                    <div class="icon"><i class="flaticon-email-1"></i></div>
                    <div class="content">
                        <h3><a href="mailto:info@ccintl.cc">info@ccintl.cc</a></h3>
                        <p> Get a free Estimate</p>
                    </div>
                </li>
                <li>
                    <div class="icon"><i class='flaticon-placeholder'></i></div>
                    <div class="content">
                        <h3><a href="https://goo.gl/maps/uNmtNyknSA3gBH198" target="_blank">32 Barnic, Walse Street</a></h3>
                        <p>Get Direction</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-2 col-md-2">
        <div class="header-btn">
            <li><a href="{{ url('/contact') }}" class="default-btn border-radius-5">Get A Quote</a>
        </div>
    </div>
    </div>
    </div>

    <div class="top-line"></div>
    <div class="top-line2"></div>
    </header> --}}
    <!-- Top Header End -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container-fluid">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logos/logo.png') }}" class="logo-one" alt="Logo">
                            <img src="{{ asset('assets/images/logos/logo.png') }}" class="logo-two" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="desktop-nav nav-area desktop-nav-one">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light d-flex align-items-center">

                    <!-- LOGO -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Call Center International" class="nav-logo">
                    </a>

                    <!-- MENU -->
                    <div class="collapse navbar-collapse mean-menu justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a href="{{ route('careers') }}" class="nav-link {{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('customers.page1') }}" class="nav-link {{ request()->routeIs('customers.page*') ? 'active' : '' }}">Customers</a>
                            </li> --}}

                            <li class="nav-item">
                                <a href="{{ route('news') }}" class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}">News</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>
        </div>


        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-header">
                    <div class="sidebar-logo">
                        <img src="{{ asset('assets/images/logos/logo.png') }}" class="sidebar-logo-1" alt="Image">
                        <img src="{{ asset('assets/images/logos/logo.png') }}" class="sidebar-logo-2" alt="Image">
                    </div>

                    <span class="close-btn sidebar-modal-close-btn">
                        <i class="bx bx-x"></i>
                    </span>
                </div>

                <div class="sidebar-about">
                    <div class="title">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut tur incidunt ut labore et
                        </p>
                    </div>
                </div>

                <div class="contact-us">
                    <h2>Contact Us</h2>
                    <ul class="contact-item">
                        <li>
                            <div class="icon"><i class="bx bx-phone-call"></i></div>
                            <div class="content">
                                <h3><a href="tel:(897)756485">(897) 756 485</a></h3>
                                <p> Sat to Thus: 8:00 - 16:00 </p>
                            </div>
                        </li>

                        <li>
                            <div class="icon"><i class="bx bx-envelope"></i></div>
                            <div class="content">
                                <h3><a href="mailto:info@ccintl.cc">info@ccintl.cc</a></h3>
                                <p> Get a free Estimate</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class='bx bx-map'></i></div>
                            <div class="content">
                                <h3><a href="https://goo.gl/maps/uNmtNyknSA3gBH198" target="_blank">32 Barnic, Walse Street</a></h3>
                                <p>Get Direction</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-follow-us">
                    <h2>Follow Us</h2>

                    <ul class="social-wrap">
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar Modal -->
    </div>

    @yield('content')


    <!-- Footer Area -->

    <style>
        /* Make all statistic cards equal height */
        .stats-card,
        .services-card,
        .footer-contact-two {
            min-height: 260px;
            display: flex;
            align-items: flex-start;
        }

        /* Wrapper alignment */
        .stats-card-inner {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        /* Force icons to white */
        .stats-card i,
        .services-card .service-icon i,
        .footer-contact-two .icon i {
            color: #ffffff !important;
        }

        /* Icon container styling */
        .stats-card .icon,
        .services-card .service-icon,
        .footer-contact-two .icon {
            background-color: #66c9d8;
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ===============================
   FIX FIRST & THIRD ICONS
   =============================== */

        /* Common injected SVG behavior */
        .stats-card .icon:empty::after {
            content: "";
            width: 30px;
            height: 30px;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            filter: brightness(0) invert(1);
            /* makes SVG WHITE */
        }

        /* FIRST CARD ICON */
        .stats-card.projects .icon:empty::after {
            background-image: url("https://firebasestorage.googleapis.com/v0/b/ccintl-534c7.appspot.com/o/content%2Ficon%20footer%20blue.svg?alt=media&token=b7cdda12-63e4-4086-a648-8795db8ec2ee");
        }

        /* THIRD CARD ICON */
        .stats-card.countries .icon:empty::after {
            background-image: url("https://firebasestorage.googleapis.com/v0/b/ccintl-534c7.appspot.com/o/content%2Ficon%20service%20blue.svg?alt=media&token=ec584afd-ed63-4180-9786-5d88cfb61c23");
        }

        /* Text spacing */
        .stats-card h3,
        .footer-contact-two h3 {
            margin-bottom: 5px;
        }

        .stats-card p,
        .footer-contact-two p {
            margin-bottom: 0;
        }

    </style>



    <footer class="footer-area footer-area-bg-two">
        <div class="container">
            <div class="footer-top-two">
                <div class="row justify-content-center">

                    <!-- PRODUCTS -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-contact-two">
                            <div class="content">
                                <h1>10+</h1>
                                <h2>Care Products</h2>
                                <span>
                                    Thoughtfully crafted skincare essentials made with clean,
                                    gentle ingredients to support everyday self-care routines.
                                </span>
                            </div>

                            <div class="right">
                                <img src="{{ asset('assets/images/logos/Capture2.png') }}" alt="Products Icon" width="40">
                            </div>
                        </div>
                    </div>

                    <!-- CUSTOMERS -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-contact-two">
                            <div class="content">
                                <h1>100+</h1>
                                <h2>Happy Customers</h2>
                                <span>
                                    Loved and trusted by customers who value simplicity,
                                    honesty, and effective skincare that truly feels good.
                                </span>
                            </div>

                            <div class="right">
                                <img src="{{ asset('assets/images/logos/Capture1.png') }}" alt="Customers Icon" width="40">
                            </div>
                        </div>
                    </div>

                    <!-- PHILOSOPHY -->
                    <div class="col-lg-4 col-md-7">
                        <div class="footer-contact-two">
                            <div class="content">
                                <h1>100%</h1>
                                <h2>Clean & Honest</h2>
                                <span>
                                    Our philosophy is rooted in natural ingredients,
                                    transparency, and formulas made with intention and care.
                                </span>
                            </div>

                            <div class="right">
                                <img src="{{ asset('assets/images/logos/Capture3.png') }}" alt="Philosophy Icon" width="40">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <style>
        /* ===== CLEAN FOOTER MIDDLE (BLADE ONLY) ===== */

        /* Target ONLY the middle footer content */
        .footer-simple-content {
            background: transparent !important;
            padding: 35px 0 !important;
            /* smaller height */
        }

        /* Remove boxed/card look */
        .footer-simple-content .footer-widget {
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        /* Make text readable (no dark-on-dark) */
        .footer-simple-content h3,
        .footer-simple-content p,
        .footer-simple-content li {
            color: #ffffff !important;
        }

        /* Practice Areas list spacing */
        .footer-simple-content .footer-list li {
            margin-bottom: 6px;
            opacity: 0.9;
        }

        /* Newsletter input clarity */
        .footer-simple-content .newsletter-form .form-control {
            background: rgba(255, 255, 255, 0.15) !important;
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.4) !important;
        }

        .footer-simple-content .newsletter-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.85) !important;
        }

        /* Button stays visible */
        .footer-simple-content .newsletter-form .subscribe-btn {
            background: #ff6a00 !important;
            color: #ffffff !important;
        }

        /* Social icons visibility */
        .footer-simple-content .social-link a {
            background: #ffffff !important;
            color: #111 !important;
        }

        .footer-contact-two .content h1 {
            font-size: 42px;
            color: #113412;
            font-weight: 600;
        }

        .footer-contact-two .content h2 {
            font-size: 18px;
            letter-spacing: 0.5px;
        }

        .footer-contact-two .content span {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.9;
        }

    </style>

    <!-- Footer Area End -->



    <!-- Jquery Min JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Appear Min JS -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Owl Carousel Thumbs JS -->
    <script src="assets/js/carousel-thumbs.js"></script>
    <!-- Wow Min JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="assets/js/ajaxchimp.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact Form JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Custom  JS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
