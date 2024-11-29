
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experience ultimate comfort and luxury at New Eastern Comfort Hotel and Gardens, located in the heart of Umuahia, Nigeria. Offering top-notch accommodations, exquisite dining, event halls, gym facilities, laundry services, and more, we ensure your stay is truly unforgettable. Book now for a perfect blend of hospitality and convenience!" />

    <!-- bootstrap css --> 
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/assets/fonts/flaticon.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="/assets/css/boxicons.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- Owl Carousel Min CSS --> 
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <!-- Nice Select Min CSS --> 
    <link rel="stylesheet" href="/assets/css/nice-select.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="/assets/css/theme-dark.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png" />
    <link rel="manifest" href="/assets/img/favicon-16x16.png" />

    <title>{{ config('app.name')}} - @yield('title')</title>
</head>
    <body>

        <!-- PreLoader Start -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-cube-area">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PreLoader End -->

        <!-- Top Header Start -->
        <header class="top-header top-header-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9 col-md-10">
                        <div class="header-right" style="margin-top: 10px;">
                            <ul>
                               
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="/" class="logo">
                    <img src="/assets/img/logo.png" class="logo-one" alt="Logo">
                    <img src="/assets/img/logo_white.png" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="/">
                            <img src="/assets/img/logo.png" class="logo-one" alt="Logo">
                            <img src="/assets/img/logo_white.png" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active">
                                    <a href="/" class="nav-link">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about_us" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="/services" class="nav-link">
                                        Services
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/rooms" class="nav-link">
                                        Rooms
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/contact_us" class="nav-link">
                                        Contact
                                    </a>
                                </li>

                            </ul>

                            <div class="nav-btn">
                                <a href="https://maps.app.goo.gl/mmZsZvvtNRB8jUEX8" target="_blank" class="default-btn btn-bg-one border-radius-5">Get Direction</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        @yield('content')

        <!-- Footer Area -->
        <footer class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top pt-100">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 col-md-6 text-center">
                            <div class="footer-widget">
                                <div class="footer-logo" style="margin-bottom: 10px;">
                                    <a href="/">
                                        <img src="/assets/img/logo_white.png" alt="Images">
                                    </a>
                                </div>
                                <p style="margin-bottom: 5px;">
                                New Eastern Comfort Hotel and Gardens is a premier destination for luxury and relaxation in Umuahia, Nigeria. We offer exceptional services including comfortable accommodations, exquisite dining, state-of-the-art event halls, fitness facilities, and professional laundry services. 
                                </p>
                                <ul class="footer-list-contact text-center">
                                    <li style="margin-bottom: 2px; margin-top: 15px">
                                        <a href="#">{{ config('app.address') }}</a>
                                    </li>
                                    <li style="margin-bottom: 2px;">
                                        <a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a>
                                    </li>
                                    <li style="margin-bottom: 2px;">
                                        <a href="{{ config('app.email') }}">{{ config('app.email') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                       
                    </div>
                </div>

                <div class="copy-right-area">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="copy-right-text text-align1">
                                <p>© <span>{{ config('app.name')}}</span> is Designed by <a href="https://cobbo.net/" target="_blank">Cobbo Nig Ltd</a></p>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-4">
                            <div class="social-icon text-align2">
                                <ul class="social-link">
                                    <li>
                                        <a href="https://www.facebook.com/login/" target="_blank"><i class='bx bxl-facebook'></i></a>
                                    </li> 
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class='bx bxl-instagram'></i></a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="https://templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="/assets/js/jquery.nice-select.min.js"></script>
        <!-- Wow Min JS -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Jquery Ui JS -->
        <script src="/assets/js/jquery-ui.js"></script>
        <!-- Meanmenu JS -->
        <script src="/assets/js/meanmenu.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Mixitup JS -->
        <script src="/assets/js/mixitup.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="/assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="/assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="/assets/js/custom.js"></script>
    </body>
</html>