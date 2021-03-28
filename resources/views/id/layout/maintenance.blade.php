<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport" />
    <meta name="twitter:widgets:theme" content="light" />
    <meta property="og:title" content="Your-Title-Here" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="Your-Image-Url" />
    <meta property="og:description" content="Your-Page-Description" />
    <title>BINAR a Lighting Studio - Lighting Consultant</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/icon-warna.png" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700" rel="stylesheet" type="text/css" />

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
                            <a href="{{ url('/id') }}" class="contains-sub-menu">Beranda</a>
                        </li>
                        <li class="@yield('nav-careers')">
                            <a href="#" class="contains-sub-menu">Karir</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-drafter')">
                                    <a href="{{ url('/id/career/drafter') }}">Drafter</a>
                                </li>
                                <li class="@yield('nav-junior_architect')">
                                    <a href="{{ url('/id/career/junior-architect') }}">Junior Arsitek (Magang)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('nav-hp-about_us')">
                            <a href="#" class="contains-sub-menu">Tentang Kami</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-our_philosophy')">
                                    <a href="{{ url('/id/about-us/our-philosophy-story') }}">Filosofi & Cerita Kami</a>
                                </li>
                                <li class="@yield('nav-our_studio')">
                                    <a href="{{ url('/id/about-us/our-studio') }}">Studio Kami</a>
                                </li>
                                <li class="@yield('nav-privacy_policy')">
                                    <a href="{{ url('/id/privacy-policy') }}">Kebijakan Privasi</a>
                                </li>
                                <li class="@yield('nav-term_conditions')">
                                    <a href="{{ url('/id/terms-condition') }}">Syarat & Ketentuan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('nav-projects')">
                            <a href="{{ url('/id/projects')}}" class="contains-sub-menu">Proyek-Proyek</a>
                        </li>
                        <li class="@yield('nav-services')">
                            <a href="#" class="contains-sub-menu">Layanan</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-our_service')">
                                    <a href="{{ url('/id/services/our-service')}}">Layanan Kami</a>
                                </li>
                                <li class="@yield('nav-work_together')">
                                    <a href="{{ url('/id/services/work-together')}}">Mari Kerjasama</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('nav-lighting101')">
                            <a href="{{ url('/id/lighting101')}}" class="contains-sub-menu">Lighting 101</a>
                        </li>
                        <li>
                            <a class="contains-sub-menu">Bahasa</a>
                            <ul class="sub-menu">
                                <li class="@yield('nav-indonesian')">
                                    <a href="{{ url('/id') }}">Indonesia</a>
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
                                    <a href="{{ url('/id') }}"><img src="/assets/img/logo/logo_binar-white.png" alt="Binar Logo" /></a>
                                    <a href="{{ url('/id') }}"><img src="/assets/img/logo/logo_binar-colour.png" alt="BINAR Logo" /></a>
                                </div>
                            </div>
                            <nav class="navigation nav-block secondary-navigation nav-right">
                                <ul>
                                    <li>
                                        <!-- Dropdown Cart Overview -->
                                        <div class="dropdown">
                                            <a href="#" class="nav-icon cart button no-page-fade"><span class="cart-indication"><span class="icon-bell"></span>
                                                    <span class="badge">2</span></span></a>
                                            <ul class="dropdown-list custom-content cart-overview">
                                                <li class="cart-item">
                                                    <div class="product-details">
                                                        <a href="{{ url('/id/maintenance') }}" class="product-title">
                                                            Beberapa halaman mungkin belum tersedia. Kami akan segera menyelesaikannya.
                                                        </a>
                                                        <span class="product-quantity">📢Maintenance</span>
                                                    </div>
                                                </li>
                                                <li class="cart-item">
                                                    <div class="product-details">
                                                        <a href="https://www.instagram.com/binar_alightingstudio/" class="product-title">
                                                            Lihat Postingan Baru Kami di Instagram
                                                        </a>
                                                        <span class="product-quantity">@binar_alightingstudio</span>
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
                                        <a href="{{ url('/id') }}">Beranda</a>
                                    </li>
                                    <li class="@yield('nav-careers')">
                                        <a href="#" class="contains-sub-menu">Karir</a>
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-drafter')">
                                                <a href="{{ url('/id/career/drafter') }}">Drafter</a>
                                            </li>
                                            <li class="@yield('nav-junior_architect')">
                                                <a href="{{ url('/id/career/junior-architect') }}">Junior Arsitek (Magang)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="@yield('nav-about_us')">
                                        <a href="#" class="contains-sub-menu">Tentang Kami</a>
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-our_philosophy')">
                                                <a href="{{ url('/id/about-us/our-philosophy-story') }}">Filosofi & Cerita Kami</a>
                                            </li>
                                            <li class="@yield('nav-our_studio')">
                                                <a href="{{ url('/id/about-us/our-studio') }}">Studio Kami</a>
                                            </li>
                                            <li class="@yield('nav-privacy_policy')">
                                                <a href="{{ url('/id/privacy-policy') }}">Kebijakan Privasi</a>
                                            </li>
                                            <li class="@yield('nav-terms_conditions')">
                                                <a href="{{ url('/id/terms-condition') }}">Syarat & Ketentuan</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="@yield('nav-projects')">
                                        <a href="{{ url('/id/projects')}}">Proyek-Proyek</a>
                                    </li>
                                    <li class="@yield('nav-services')">
                                        <a href="#" class="contains-sub-menu">Layanan</a>
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-our_services')">
                                                <a href="{{ url('/id/services/our-service')}}">Layanan Kami</a>
                                            </li>
                                            <li class="@yield('nav-work_together')">
                                                <a href="{{ url('/id/services/work-together')}}">Mari Kerjasama</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="@yield('nav-lighting101')">
                                        <a href="{{ url('/id/lighting101')}}">Lighting 101</a>
                                    </li>
                                    <li>
                                        <a href="#" class="contains-sub-menu"><span class="icon-language"></span> Bahasa</a>
                                        <ul class="sub-menu">
                                            <li class="@yield('nav-indonesian')">
                                                <a href="{{ url('/id') }}">Bahasa Indonesia</a>
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
                <div class="footer-bottom">
                    <div class="row">
                        <div class="column width-12">
                            <div class="footer-bottom-inner center">
                                <p class="copyright pull-left clear-float-on-mobile">
                                    &copy; BINAR A Lighting Studio. Hak Publikasi.
                                    <a href="{{ url('/id/terms-condition') }}">Syarat dan Ketentuan</a> |
                                    <a href="{{ url('/id/privacy-policy') }}">Kebijakan Privasi</a>
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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
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
    </script>
    <!--End of Tawk.to Script-->

    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
    <script src="/assets/js/timber.master.min.js"></script>
    @toastr_js
    @toastr_render
</body>

</html>