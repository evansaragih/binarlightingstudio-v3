@extends('en.layout.header-footer')
@section('title', 'Projects')
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
    <div class="section-block grid-filter-menu center bkg-blue-binar-body" hidden>
        <div class="row">
            <div class="column width-12">
                <ul>
                    <li><a class="active" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".design">Completed Project</a></li>
                    <li><a href="#" data-filter=".identity">On Going Project</a></li>
                    <li>
                        <a href="#" data-filter=".photography">Lagom Project</a>
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/noaa-social-dining')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/adiwana-jeevalokha')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/harris-hotel-tebet')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/sentul-residence')}}">
                                <img src="/assets/img/portofolio/grid/project-villa_sentul.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Sentul Residence</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item identity">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/mixed-used-area-lampung')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/the-waterfall-ulaman-retreat')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/harris-hotel-batam')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/villa-ali-agung')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/villa-beraban')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/karma-residence')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/harris-hotel-tuban')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/tunon-residence')}}">
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
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
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
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Atria Building</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Byrdhouse</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Diageo Office</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Adiwana Jelita Sejuba</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Kappa Ubud</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Pramana Bali Aga</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">The Suku</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Semaon Estate</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Beachouse</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item design identity" hidden>
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ url('en/projects/ocean-palm')}}">
                                <img src="/assets/img/portofolio/grid/project-ocean_palm.jpg" alt="" />
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="project-title">Locavore</span>
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