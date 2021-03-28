@extends('en.layout.header-footer')
@section('container')
@section('nav-projects', 'current')
@section('nav-english', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- Intro Title Section 2 -->
    <section class="section-block featured-media page-intro tm-slider-parallax-container">
        <div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="1140">
            <ul class="tms-slides">
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
                    <div class="tms-content">
                        <div class="tms-content-inner left">
                            <div class="row">
                                <div class="column width-12">
                                    <div class="hero-content-inner left-on-mobile">
                                        <blockquote class="border">
                                            <h1>Projects</h1>
                                            <cite style="font-size: 11pt;">"We provide value added to your premises by
                                                orchestrating the art of lighting."</cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/banner/projects.jpg" data-retina src="images/blank.png" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Intro Title Section 2 End -->

    <!-- Portfolio Grid -->
    <div class="section-block grid-filter-menu center bkg-blue-binar-body">
        <div class="row">
            <div class="column width-12">
                <ul>
                    <li><a class="active" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".design">Design</a></li>
                    <li><a href="#" data-filter=".identity">Identity</a></li>
                    <li>
                        <a href="#" data-filter=".photography">Photograhy</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".application">Applications</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bkg-blue-binar-body section-block grid-container fade-in-progressively full-width no-margins no-padding-top" data-layout-mode="masonry" data-grid-ratio="1" data-set-dimensions data-animate-filter-duration="700" data-animate-resize data-animate-resize-duration="0">
        <div class="row">
            <div class="column width-12">
                <div class="row grid content-grid-4">
                    <div class="grid-item grid-sizer photography wide">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('/projects/noaa_social_dining')}}">
                                <img src="/assets/img/portofolio/grid/project-noaa_social_dining.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">NOAA Social Dining</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item photography">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-adiwana_jeevalokha.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Adiwana Jeevalokha</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design application">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-harris_hotel_tebet.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Harris Hotel Tebet</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-villa_sentul.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Villa Sentul</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-mixed_used_area_lampung.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Mixed Used Area Lampung</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item portrait design photography">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-ulaman_eco_retreat.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">The Waterfall Ulaman
                                                Retreat</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-harris_hotel_batam.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Harris Hotel Batam</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item application">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-villa_ali_agung.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Villa Ali Agung</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-villa_beraban.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Villa Beraban</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-karma_residence.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Karma Residence</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item wide design identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-harris_hotel_tuban.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Harris Hotel Tuban</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-tunon_residence.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Tunon Residence</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Ocen Palm</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Grid End -->
</div>
<!-- Content End -->
@endsection