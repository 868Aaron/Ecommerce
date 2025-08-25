<!DOCTYPE html>
<html lang="en">

<head>
    <title>XS Dolls Boutique - Apparel for Petite Women</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('template_default/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('template_default/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/style.css') }}">

    <style>
        /* General Body and Font Styling */
        body {
            font-family: 'Open Sans', sans-serif;
            color: #333;
            /* Darker text for better readability */
            line-height: 1.6;
        }

        /* Top Bar Styling */
        .py-1.bg-black {
            background-color: #2c3e50 !important;
            /* Dark blue-grey for a sophisticated feel */
            color: #ecf0f1;
            /* Light text for contrast */
            font-size: 0.9rem;
        }

        .py-1.bg-black .text {
            color: #ecf0f1 !important;
        }

        .py-1.bg-black .icon {
            color: #8e44ad;
            /* A subtle pop of deep purple */
        }

        /* Navigation Bar Styling */
        .ftco_navbar {
            background: #ffffff !important;
            /* Clean white navigation bar */
            border-bottom: 1px solid #eee;
            /* Subtle border at the bottom */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            /* Soft shadow for depth */
        }

        .ftco_navbar .navbar-brand {
            color: #2c3e50 !important;
            /* Dark blue-grey for the brand name */
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }

        .ftco_navbar .nav-link {
            padding: 1rem 1.2rem !important;
            color: #555 !important;
            /* Slightly lighter grey for nav links */
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .ftco_navbar .nav-link:hover,
        .ftco_navbar .nav-item.active>.nav-link {
            color: #8e44ad !important;
            /* Deep purple on hover/active */
        }

        .ftco_navbar .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 0;
        }

        .ftco_navbar .dropdown-item {
            color: #555;
            padding: 0.8rem 1.2rem;
            transition: background-color 0.2s ease;
        }

        .ftco_navbar .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #8e44ad;
        }

        /* Cart Icon Styling */
        .ftco_navbar .cta-colored a {
            background: #8e44ad !important;
            /* Deep purple for the cart button */
            border-radius: 5px;
            padding: 0.5rem 1rem;
            color: #fff !important;
        }

        .ftco_navbar .cta-colored a:hover {
            background: #6c3483 !important;
            /* Slightly darker purple on hover */
        }

        /* Hero Section Styling */
        .hero-wrap.hero-bread {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            z-index: 0;
            height: 400px;
            /* Adjust height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-wrap.hero-bread::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            /* Darker overlay for better text visibility */
            z-index: -1;
        }

        .hero-wrap .breadcrumbs span {
            color: rgba(255, 255, 255, 0.8);
        }

        .hero-wrap .breadcrumbs a {
            color: #fff;
        }

        .hero-wrap .bread {
            color: #fff;
            font-weight: 800;
            font-size: 3.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Footer Styling */
        .ftco-footer {
            background: #2c3e50;
            /* Matching the top bar for cohesion */
            color: #ecf0f1;
            padding: 4em 0;
        }

        .ftco-footer-widget h2 {
            color: #ecf0f1;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .ftco-footer-widget p,
        .ftco-footer-widget li a {
            color: rgba(236, 240, 241, 0.7);
        }

        .ftco-footer-widget li a:hover {
            color: #8e44ad;
            /* Deep purple on hover for footer links */
        }

        .ftco-footer-social li a {
            background: #34495e;
            /* Slightly lighter shade for social icons */
            color: #ecf0f1;
            border-color: #34495e;
        }

        .ftco-footer-social li a:hover {
            background: #8e44ad;
            border-color: #8e44ad;
        }

        .block-23 ul li .icon {
            color: #8e44ad;
        }

        /* Loader color */
        #ftco-loader .path {
            stroke: #8e44ad;
            /* Change loader color to deep purple */
        }

        /* Adjust site title */
        .navbar-brand {
            text-transform: uppercase;
        }
    </style>
</head>

<body class="goto-here">
    {{-- START nav --}}
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}"
                style="
    font-family: 'Playfair Display', serif; /* A more elegant, serif font */
    font-size: 2.2rem;
    font-weight: 700;
    text-transform: uppercase;
    background: linear-gradient(45deg, #a88be9, #ff71cd); /* A sophisticated purple to fuchsia gradient */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3); /* Soft, subtle shadow for depth */
    letter-spacing: 2px;
    transition: all 0.3s ease-in-out;
    display: inline-block; /* Needed for transform */
"
                onmouseover="this.style.transform='scale(1.05) rotate(-1deg)'; this.style.textShadow='3px 3px 8px rgba(0, 0, 0, 0.4)'; "
                onmouseout="this.style.transform='scale(1) rotate(0deg)'; this.style.textShadow='2px 2px 6px rgba(0, 0, 0, 0.3)';">
                ShopSphere
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('store.index') }}" class="nav-link">Shop</a></li>

                    @auth
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{ route('store.index') }}">Shop</a>
                                <a class="dropdown-item" href="{{ route('cart.index') }}">Cart</a>
                                <a class="dropdown-item" href="#">Order History</a>


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                            </div>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                        </li>
                    @endauth
                    <li class="current-list-item">
                        <a href="{{ route('wishlist.store') }}" class="nav-link"
                            style="display: flex; align-items: center; gap: 5px; text-decoration: none; color: inherit;">
                            <span class="icon-heart"></span> Wishlist
                        </a>
                    </li>



                    @guest
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @endguest


                    @auth
                        <li class="nav-item cta cta-colored"><a href="{{ route('cart.index') }}" class="nav-link">
                                <span class="icon-shopping_cart"></span>
                                <x-core.cart-icon />
                            </a></li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
    @isset($hideBanner)
        @empty($hideBanner)
            {{-- START hero --}}
            <div class="hero-wrap hero-bread"
                style="background-image: url('{{ asset('template_default/images/bg_6.jpg') }}');">
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-9 ftco-animate text-center">
                            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                                <span>Shop</span>
                            </p>
                            <h1 class="mb-0 bread">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END hero --}}
        @endempty
    @else
        {{-- START hero --}}
        <div class="hero-wrap hero-bread"
            style="background-image: url('{{ asset('template_default/images/bg_6.jpg') }}');">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                            <span>Shop</span>
                        </p>
                        <h1 class="mb-0 bread">Shop</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- END hero --}}
    @endisset



    {{ $slot }}

    {{-- START footer --}}
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">XS Dolls Boutique</h2>
                        <p>Discover perfectly tailored apparel for petite women. Style that fits, designed for you.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Shop</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Journal</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    {{-- END footer --}}






    <script src="{{ asset('template_default/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('template_default/js/popper.min.js') }}"></script>
    <script src="{{ asset('template_default/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template_default/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template_default/js/aos.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('template_default/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('template_default/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('template_default/js/google-map.js') }}"></script>
    <script src="{{ asset('template_default/js/main.js') }}"></script>

</body>

</html>
