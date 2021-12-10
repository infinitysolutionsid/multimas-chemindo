<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang Tobing" />
    <meta name="description" content="PT. Multi Mas Chemindo is established in the year of 1996 in Medan. The initial company activity is distributing various fertilizers to crude palm plantation in North Sumatra, Riau, and other area within Indonesia. For the last 22 years, PT. Multi Mas Chemindo has grown tremendously to become one of the reliable fertilizers importer company to supply throughout plantations in all over Indonesia.
" />
    <meta name="keywords"
        content="multi mas chemindo, best fertilizers in Medan, chemindo, fertilizers multi mas chemindo" />
    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/bootstrap.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('style.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/dark.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/font-icons.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/animate.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/magnific-popup.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/custom.css')!!}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{!!asset('homepage/temp/images/icon.ico')!!}" type="image/x-icon">

    <!-- Workspace Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{!!asset('homepage/css/colors.php?color=56735E')!!}" type="text/css" />
    <!-- Theme Color -->
    <link rel="stylesheet" href="{!!asset('homepage/temp/css/fonts.css')!!}" type="text/css" /> <!-- Theme Font -->
    <link rel="stylesheet" href="{!!asset('homepage/temp/coworking.css')!!}" type="text/css" />
    <title>Multi Mas Chemindo | @yield('titleweb')</title>

    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="PT Multi Mas Chemindo" />
    <meta name="og:url" property="og:url" content="https://multimaschemindo.com" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/https-www-infinitysolutions-co-id/image/upload/v1639102332/customer/multimaschemindo/lainlain/cover-min.png" />
    <meta name="og:description" property="og:description" content="PT. Multi Mas Chemindo is established in the year of 1996 in Medan. The initial company activity is
        distributing various fertilizers to crude palm plantation in North Sumatra, Riau, and other area within
        Indonesia. For the last 22 years, PT. Multi Mas Chemindo has grown tremendously to become one of the reliable
        fertilizers importer company to supply throughout plantations in all over Indonesia." />
    <meta name="twitter:card" content="PT Multi Mas Chemindo" />
    <meta name="twitter:title" property="og:title" content="PT Multi Mas Chemindo" />
    <meta name="twitter:url" property="og:url" content="https://multimaschemindo.com" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/https-www-infinitysolutions-co-id/image/upload/v1639102332/customer/multimaschemindo/lainlain/cover-min.png" />
    <meta name="twitter:description" property="og:description" content="PT. Multi Mas Chemindo is established in the year of 1996 in Medan. The initial company activity is
        distributing various fertilizers to crude palm plantation in North Sumatra, Riau, and other area within
        Indonesia. For the last 22 years, PT. Multi Mas Chemindo has grown tremendously to become one of the reliable
        fertilizers importer company to supply throughout plantations in all over Indonesia." />
    <link rel="canonical" href="https://multimaschemindo.com/" />

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        <header id="header" class="@yield('menu') dark header-size-md" data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="/" data-dark-logo="{!!asset('homepage/temp/images/logo.png')!!}"
                                class="standard-logo"><img src="{!!asset('homepage/temp/images/logo.png')!!}"
                                    alt="Company Logo"></a>
                            <a href="/" data-dark-logo="{!!asset('homepage/temp/images/logo@2x.png')!!}"
                                class="retina-logo"><img src="{!!asset('homepage/temp/images/logo@2x.png')!!}"
                                    alt="Company Logo"></a>
                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu with-arrows">

                            <ul class="menu-container">
                                <li class="menu-item @yield('activemenu')"><a class="menu-link" href="/">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item @yield('activeabout')"><a class="menu-link" href="/about-us">
                                        <div>About Us</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="/warehouse">
                                                <div>Warehouse</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="/fertilizers">
                                                <div>Our Fertilizers</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="/partners">
                                                <div>Our Partners</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item @yield('activecontact')"><a class="menu-link" href="/contact-us">
                                        <div>Contact Us</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->
        @yield('content')
    </div>
    </section><!-- #content end -->

    <!-- Footer
		============================================= -->
    <footer id="footer" class="border-0" style="background-color: #56735E; padding-top: 40px;">

        <div class="container">

            <!-- Footer Widgets
				============================================= -->
            <div class="footer-widgets-wrap dark pb-5 clearfix">

                <div class="row">
                    <div class="col-sm-3">
                        <a href="/"><img src="{!!asset('homepage/temp/images/logo-footer.png')!!}" alt="Logo Footer"
                                class="mb-4 imgLogoFooter" height="50px" width="
                                    auto"></a>
                        <p class="text-white-50">Importer | Distributor | Producer</p>
                        {{-- <a href="#" class="social-icon si-small si-light si-facebook" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-light si-twitter" title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-light si-github" title="Github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-light si-instagram" title="instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a> --}}
                    </div>
                    <div class="col-lg-2 col-md-2 col-6">
                        <div class="widget clearfix">
                            <h4 class="ls0 mb-4 nott text-white">Support</h4>
                            <ul class="list-unstyled ml-0">
                                <li class="mb-2"><a href="/">Home</a></li>
                                <li class="mb-2"><a href="/about-us">Our Company</a></li>
                                <li class="mb-2"><a href="/faqs">FAQs</a></li>
                                {{-- <li class="mb-2"><a href="#">Support</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-2 col-6">
                        <div class="widget clearfix">
                            <h4 class="ls0 mb-4 nott text-white">Our Location</h4>
                            <ul class="list-unstyled ml-0">
                                <li class="mb-2"><a href="#">Jl. Imam Bonjol No.40 Medan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Copyrights
			============================================= -->
        <div id="copyrights" class="bg-transparent dark pt-0">

            <div class="line mt-0"></div>

            <div class="container clearfix">

                <div class="row">
                    <div class="col-12">
                        <?php $year=Date('Y') ?>
                        <p class="mb-2 text-white-50">Copyrights &copy; {{$year}} - <a style="color: #fff !important"
                                href="/">PT Multi Mas
                                Chemindo</a> | All Rights
                            Reserved by <a style="color: #fff !important;" href="https://infinitysolutions.co.id"
                                target="_blank">Infinity
                                Solutions</a>.</p>
                        {{-- <div class="copyright-links text-white-50"><a href="/tos" class="text-white-50">Terms of
                                Use</a> / <a href="/privacy-policy" class="text-white-50">Privacy Policy</a></div> --}}
                    </div>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{!!asset('homepage/js/jquery.js')!!}"></script>
    <script src="{!!asset('homepage/js/plugins.min.js')!!}"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="{!!asset('homepage/js/functions.js')!!}"></script>

</body>

</html>
