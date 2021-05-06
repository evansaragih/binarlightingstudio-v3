<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport" />
    <meta name="twitter:widgets:theme" content="light" />
    <meta property="og:title" content="BINAR a Lighting Studio - BALI Lighting Consultant" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://binarlightingstudio.com/assets/img/logo/logo_binar-colour.png" />
    <meta property="og:description" content="Binar is an lighting consultant. We assist our client in aligning their architectural, interior and landscape design concepts with the right lighting design to create differentiation or value added." />
    <meta name="google-site-verification" content="sOO8Y1Q5NBD0eV2h60tJF8bd-oB9p2R8AicU_xZK8dI" />
    <meta name="msvalidate.01" content="9A2887BC5A505F3B4A7C9182A1CA13DC" />
    <meta name="p:domain_verify" content="f63adb9f42d291ab875a381e221c316a" />
    <meta name="author" content="BINAR A LIGHTING STUDIO" />
    <title>@yield('title') | BINAR a Lighting Studio - Lighting Consultant</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/icon-warna.png" />

    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
    </style>

    <!-- Css -->
    <link rel="stylesheet" href="/assets/css/core.min.css" />
    <link rel="stylesheet" href="/assets/css/skin.css" />
    @toastr_css

    <!--[if lt IE 9]>
      <script
        type="text/javascript"
        src="http://html5shiv.googlecode.com/svn/trunk/html5.js"
      ></script>
    <![endif]-->
</head>

<body class="shop home-page" style="overflow-x: hidden">
    <!-- Side Navigation Menu -->
    <aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="scale-in">
        <div class="side-navigation-scroll-pane">
            <div class="side-navigation-inner">
                <div class="side-navigation-header">
                    <div class="navigation-hide side-nav-hide">
                        <a href="#">
                            <span class="icon-cancel medium"></span>
                        </a>
                    </div>
                </div>
                <nav class="side-navigation">
                    <ul>
                        <li class="@yield('nav-home')">
                            <a href="{{ url('/en') }}">Home</a>
                        </li>
                        <li class="@yield('nav-careers')">
                            <a href="#" class="contains-sub-menu">Careers</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-drafter')">
                                    <a href="{{ url('/en/career/drafter') }}">Drafter</a>
                                </li>
                                <li class="@yield('nav-junior_architect')">
                                    <a href="{{ url('/en/career/junior-architect') }}">Junior Architect (Internship)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('nav-hp-about_us')">
                            <a href="#" class="contains-sub-menu">About Us</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-our_philosophy')">
                                    <a href="{{ url('/en/about-us/our-philosophy-story') }}">Our Philosophy & Story</a>
                                </li>
                                <li class="@yield('nav-our_studio')">
                                    <a href="{{ url('/en/about-us/our-studio') }}">Our Studio</a>
                                </li>
                                <li class="@yield('nav-privacy_policy')">
                                    <a href="{{ url('/en/privacy-policy') }}">Privacy Policy</a>
                                </li>
                                <li class="@yield('nav-terms_condition')">
                                    <a href="{{ url('/en/terms-condition') }}">Terms & Conditions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('nav-projects')">
                            <a href="{{ url('/en/projects')}}">Projects</a>
                        </li>
                        <li class="@yield('nav-services')">
                            <a href="#" class="contains-sub-menu">Services</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-our_service')">
                                    <a href="{{ url('/en/services/our-service')}}">Our Service</a>
                                </li>
                                <li class="@yield('nav-work_together')">
                                    <a href="{{ url('/en/services/work-together')}}">Work Together</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('nav-lighting101')">
                            <a href="{{ url('/en/lighting101')}}">Lighting 101</a>
                        </li>
                        <li>
                            <a class="contains-sub-menu">Language</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-indonesian')">
                                    <a>Indonesia (Segera Tersedia)</a>
                                </li>
                                <li class="@yield('nav-english')">
                                    <a href="{{ url('/en') }}">English</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="side-navigation-footer">
                    <p class="copyright no-margin-bottom">
                        &copy; 2021 BINAR A Lighting Studio.
                    </p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Side Navigation Menu End -->

    <div class="wrapper reveal-side-navigation">
        <div class="wrapper-inner">
            <!-- Header -->
            <header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
                <div class="header-inner">
                    <div class="row nav-bar">
                        <div class="column width-12 nav-bar-inner">
                            <div class="logo">
                                <div class="logo-inner">
                                    <a href="{{ url('/en') }}"><img src="/assets/img/logo/logo_binar-white.png" alt="Binar Logo" /></a>
                                    <a href="{{ url('/en') }}"><img src="/assets/img/logo/logo_binar-colour.png" alt="BINAR Logo" /></a>
                                </div>
                            </div>
                            <nav class="navigation nav-block secondary-navigation nav-right">
                                <ul>
                                    <li>
                                        <!-- Dropdown Cart Overview -->
                                        <div class="dropdown">
                                            <a href="#" class="nav-icon cart button no-page-fade"><span class="cart-indication"><span class="icon-bell"></span>
                                                </span></a>
                                            <ul class="dropdown-list custom-content cart-overview">
                                                <li class="cart-item">
                                                    <div class="product-details">
                                                        <a href="{{ url('/en/maintenance') }}" class="product-title">
                                                            Our Studio will be closed from 12th - 14th May 2021
                                                        </a>
                                                        <span class="product-quantity">📢 Notification</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="aux-navigation hide">
                                        <!-- Aux Navigation -->
                                        <a href="#" class="navigation-show side-nav-show nav-icon">
                                            <span class="icon-menu"></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="navigation nav-block primary-navigation nav-right">
                                <ul>
                                    <li class="@yield('nav-home')">
                                        <a href="{{ url('/en') }}">Home</a>
                                    </li>
                                    <li class="@yield('nav-careers')">
                                        <a href="#" class="contains-sub-menu">Careers</a>
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-drafter')">
                                                <a href="{{ url('/en/career/drafter') }}">Drafter</a>
                                            </li>
                                            <li class="@yield('nav-junior_architect')">
                                                <a href="{{ url('/en/career/junior-architect') }}">Junior Architect (Internship)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="@yield('nav-about_us')">
                                        <a href="{{ url('/en/about-us/our-philosophy-story') }}">About Us</a>
                                    </li>
                                    <li class="@yield('nav-projects')">
                                        <a href="{{ url('/en/projects')}}">Projects</a>
                                    </li>
                                    <li class="@yield('nav-services')">
                                        <a href="#" class="contains-sub-menu">Services</a>
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-our_services')">
                                                <a href="{{ url('/en/services/our-service')}}">Our Services</a>
                                            </li>
                                            <li class="@yield('nav-work_together')">
                                                <a href="{{ url('/en/services/work-together')}}">Work Together</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="@yield('nav-lighting101')">
                                        <a href="{{ url('/en/lighting101')}}">Lighting 101</a>
                                    </li>
                                    <li>
<<<<<<< HEAD
                                        <a href="#" class="contains-sub-menu"><span class="icon-language"></span> 🇺🇸</a>
=======
                                        <a href="#" class="contains-sub-menu"><span class="icon-language"></span> 🇮🇩</a>
>>>>>>> c7113cbbb7b7707ce8ef7577135359f0a704f860
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-indonesian')">
                                                <a>🇲🇨 (Segera Tersedia)</a>
                                            </li>
                                            <li class="@yield('nav-english')">
                                                <a href="{{ url('/en') }}">English</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End -->

            @yield('container')

            <!-- Footer -->
            <footer class="footer">
                <div class="footer-top">
                    <div class="row flex">
                        <div class="column width-3">
                            <div class="widget">
                                <h4 class="widget-title weight-light">About Us</h4>
                                <a href="{{ url('/en/about-us/our-philosophy-story') }}">Our Philosophy</a><br />
                                <a href="{{ url('/en/about-us/our-philosophy-story#our-story') }}">Our Story</a><br />
                                <a href="{{ url('/en/about-us/our-philosophy-story#official-channels') }}">Official Channels</a><br />
                                <a href="{{ url('/en/about-us/our-studio') }}">Our Studio</a><br />
                                <p></p>
                            </div>
                        </div>
                        <div class="column width-3">
                            <div class="widget">
                                <h4 class="widget-title weight-light">Projects</h4>
                                <a href="{{ url('/en/projects#completed') }}">Completed Project</a><br />
                                <a href="{{ url('/en/projects#on-going') }}">On Going Project</a><br />
                                <p></p>
                            </div>
                        </div>
                        <div class="column width-3">
                            <div class="widget">
                                <h4 class="widget-title weight-light">Services</h4>
                                <a href="{{ url('/en/services/our-service')}}">Our Services</a><br />
                                <a href="{{ url('/en/services/work-together')}}">Work Together</a><br />
                                <a href="{{ url('/en/terms-condition')}}">Terms & Condition</a><br />
                                <a href="{{ url('/en/privacy-policy')}}">Privacy Policy</a><br />
                                <p></p>
                            </div>
                        </div>
                        <div class="column width-3">
                            <div class="widget">
                                <h4 class="widget-title weight-light">Languages</h4>
                                <a href="{{ url('/id')}}">Bahasa Indonesia</a><br />
                                <a href="{{ url('/en')}}">English</a><br />
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="column width-12">
                            <div class="footer-bottom-inner center">
                                <p class="copyright pull-left clear-float-on-mobile">
                                    &copy; BINAR A Lighting Studio. All Rights Reserved.
                                    <a href="{{ url('/en/terms-condition') }}">Terms and Condition</a> |
                                    <a href="{{ url('/en/privacy-policy') }}">Privacy Policy</a>
                                </p>
                                <ul class="social-list list-horizontal pull-right clear-float-on-mobile">
                                    <li>
                                        <a href="https://www.facebook.com/binar.lighting"><span class="icon-facebook small"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=bIigCRnpIMU"><span class="icon-youtube small"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://id.pinterest.com/binarlightingconsultant/"><span class="icon-pinterest small"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/binar_alightingstudio/"><span class="icon-instagram small"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
    </div>
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "6d0dec1c-efd5-4aa4-bab8-c573b2ad2fc8";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>

    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/602cc31f9c4f165d47c41088/1eundkcqk';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> -->
    <!--End of Tawk.to Script-->

    <!-- Hotjar Tracking Code for https://www.binarlightingstudio.com -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2371987,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
    <script src="/assets/js/timber.master.min.js"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="YWRV9QpA"></script>
    @toastr_js
    @toastr_render
</body>

</html>