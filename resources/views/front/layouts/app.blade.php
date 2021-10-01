<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token"   content="{{ csrf_token() }}">
    <meta property="og:title" content="@yield('title', config('app.name'))" />
    <meta property="og:type"  content="@yield('og:type', 'website')" />
    <meta property="og:url"   content="@yield('og:url', URL::current())" />
    <meta property="og:image" content="@yield('og:image', asset('assets/img/logo/logo-1.svg'))" />
    <meta name="description"  content="@yield('description', '')">
    <meta name="author"       content="@yield('author', config('app.name'))">
    <title> @yield('title', config('app.name'))</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- ===========  All Stylesheet ================= -->
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--  aos css plugins -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- select2 css file -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- slick css file -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- slick css file -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- meanmenu css file -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Preloader -->
    <div class="pre-loader">
        <div class="loader">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!--
    =============================================
        Header Section
    ==============================================
    -->
    <header class="header-wraper transparent-menu">
        <div class="main-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-lg-2 d-flex col-5">
                        <a class="navbar-brand logo" href="index.html">
                            <img src="assets/img/logo.png" alt="Klaud">
                        </a>
                    </div>

                    <div class="col-xl-7 col-lg-7 offset-xl-1 col-md-7 col-7 pr-0 d-none d-lg-block text-lg-right">
                        <nav id="responsive-menu" class="menu-1">
                            <ul class="menu-items">
                                <li><a href="#">home</a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#feature">Features</a></li>
                                <li><a href="#price">Pricing</a></li>
                                <li><a href="#service">Services</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#testimonial">Testimonial</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav><!-- /.nav -->
                    </div> <!-- /.col-lg-5 col-md-6 -->

                    <div class="col-xl-2 col-lg-3 col-5 col-md-8 d-none d-sm-block text-right">
                        <div class="account">
                            <a href="#" class="theme-btn sign">Sing up <img src="assets/img/sign.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="responsive-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- Header Section end -->

    @yield('content')

    <!--
    ======================================
        Footer Section
    ======================================
    -->
    <footer class="footer-wrap footer-two pb-80">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="site-info-widget single-footer-wid">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo.png" alt="klaud"></a>
                                <p>We make registering, hosting, and managing domains for yourself or others easy and affordable, because the internet needs people.</p>
                            </div>

                            <div class="social-pages">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 col-md-6 col-sm-6 col-12 -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-footer-wid">
                            <div class="foo-wid-title">
                                <h3>Hosting</h3>
                            </div>
                            <ul>
                                <li><a href="#">Shared Hosting</a></li>
                                <li><a href="#">WordPress Hosting</a></li>
                                <li><a href="#">Reseller Hosting</a></li>
                                <li><a href="#">VPS Hosting</a></li>
                                <li><a href="#">Dedicated Servers</a></li>
                                <li><a href="#">Private Email Hosting</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 col-md-6 col-sm-6 col-12 -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-footer-wid">
                            <div class="foo-wid-title">
                                <h3>Domains</h3>
                            </div>
                            <ul>
                                <li><a href="#">Domain Name Search</a></li>
                                <li><a href="#">Transfer</a></li>
                                <li><a href="#">Personal Domain</a></li>
                                <li><a href="#">Whois Lookup</a></li>
                                <li><a href="#">PremiumDNS</a></li>
                                <li><a href="#">FreeDNS</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 col-md-6 col-sm-6 col-12 -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-footer-wid">
                            <div class="foo-wid-title">
                                <h3>Support</h3>
                            </div>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Status Updates</a></li>
                                <li><a href="#">Knowledgebase</a></li>
                                <li><a href="#">Submit Ticket</a></li>
                                <li><a href="#">Live Chat</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 col-md-6 col-sm-6 col-12 -->

                </div>
            </div>
        </div> <!-- /.footer-top -->

        <div class="footer-bottom mt-80">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6 col-12">
                        <div class="copyright-info">
                            <span>Copyright &copy; 2021. All Rights Reserved To SDK Consultoría.</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 text-md-right">
                        <div class="payment-support">
                            <ul>
                                <li><i class="fab fa-cc-paypal"></i></li>
                                <li><i class="fab fa-cc-stripe"></i></li>
                                <li><i class="fab fa-cc-mastercard"></i></li>
                                <li><i class="fab fa-cc-jcb"></i></li>
                                <li><i class="fab fa-cc-amazon-pay"></i></li>
                                <li><i class="fab fa-cc-amex"></i></li>
                                <li><i class="fas fa-credit-card-front"></i></li>
                                <li><i class="fab fa-cc-visa"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery-2.4.min.js"></script>
    <script src="assets/js/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script>
        gsap.from('.hero-content h1', {opacity:0, duration: .6, y: -90, stagger: 0.6, delay: 1 } );
        gsap.from('.hero-content p', {opacity:0, duration: .6, x: -100, stagger: 0.6, delay: 2 } );
        gsap.from('.domain-search-box', {opacity:0, duration: .5, y: 100, stagger: 0.6, delay: 2 } );
    </script>
    <script src="assets/js/superplaceholder.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/active.js"></script>
</body>
</html>
