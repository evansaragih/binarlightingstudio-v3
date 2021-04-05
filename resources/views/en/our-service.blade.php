@extends('en.layout.header-footer')
@section('title', 'Our Service')
@section('nav-services', 'current')
@section('nav-our_services', 'current')
@section('nav-english', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- Full Width Slider Section -->
    <section class="section-block featured-media page-intro tm-slider-parallax-container">
        <div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="1140" data-scale-min-height="300">
            <ul class="tms-slides">
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
                    <div class="tms-content">
                        <div class="tms-content-inner left">
                            <div class="row">
                                <div class="column width-12">
                                    <h1 class="tms-caption color-white inline" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;" data-no-scale>
                                        Services
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/banner/services.jpg" data-retina src="images/blank.png" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Full Width Slider Section -->

    <!-- Feature Column Section -->
    <div id="getting-started" class="section-block no-padding feature-column-group">
        <div class="row full-width collapse flex">
            <div class="column width-4 bkg-blue-binar-body">
                <div class="feature-column small pt-80 pb-50 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:100ms;" data-threshold="0.5">
                    <div class="feature-text">
                        <h4 class="color-white" style="font-weight: bold">
                            Architectural Lighting
                        </h4>
                        <p>
                            We collaborate with the architect(s) in developing
                            the concept of the building and its surroundings to
                            get the right visualisation of the façade and
                            exterior area, with aspects around lighting level,
                            brightness contrast, safety aspect, eye sights and
                            in particularly during evening time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="column width-4 bkg-blue-binar-body2">
                <div class="feature-column small pt-80 pb-50 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:200ms;" data-threshold="0.5">
                    <div class="feature-text">
                        <h4 class="color-white" style="font-weight: bold">
                            Interior Lighting
                        </h4>
                        <p>
                            Moving into the building, we collaborate with
                            interior designer to get the right suitable lighting
                            ambiance based on the designed space to calculate
                            the lighting level, brightness contrast, eye sights
                            and safety aspect.
                        </p>
                    </div>
                </div>
            </div>
            <div class="column width-4 bkg-blue-binar-body">
                <div class="feature-column small pt-80 pb-50 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:300ms;" data-threshold="0.5">
                    <div class="feature-text">
                        <h4 class="color-white" style="font-weight: bold">
                            Landscape Lighting
                        </h4>
                        <p>
                            More to intangible aspect of lighting design, the
                            landscape design supports the architectural value of
                            the premises, thus, we collaborate with the
                            landscape designer to understand the right amount of
                            the lighting needed to build senses of comfort,
                            safety and balance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Column Section End -->

    <!-- Hero 4 Section -->
    <div class="section-block hero-4 hero-4-1 clear-height right">
        <div class="row">
            <div class="column width-6">
                <h2 class="color-white">How We Works</h2>
            </div>
            <div class="column width-5 offset-1">
                <div class="hero-content split-hero-content">
                    <div class="hero-content-inner left color-white">
                        <p class="lead">
                            Binar is engaged in architectural lighting design
                            consultancy that helps architect, landscape,
                            interior design and other respective parties to get
                            the right artificial lighting that supports and
                            maximizes the concept that wish to be achieved.
                        </p>
                        <p>
                            Binar captures the essence of what each of the
                            respective parties want to visualize in alignment
                            with the needs and desires of the premises owners
                            and residents to ensure the standard needs for
                            lighting can be met with the right aesthetics.
                            Binar’s scope of service includes exterior, interior
                            and landscape in the fields of residential,
                            hospitality, commercial, educational and religious
                            projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero 4 Section End -->

    <!-- Client Section Custom -->
    <div class="section-block clients-1 replicable-content" style="background-color: #081137">
        <div class="row">
            <div class="column width-4">
                <h3 class="mb-50">Recent Clients</h3>
            </div>
            <div class="column width-8">
                <div class="row content-grid-4 flex">
                    <div class="grid-item">
                        <h5 class="client-name">Harris Hotel Tuban</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Harris Hotel Batam</h5>
                        <span class="client-description font-alt-1">Batam</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Harris Hotel Tebet</h5>
                        <span class="client-description font-alt-1">Jakarta</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Villa Beraban</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Villa Sentul</h5>
                        <span class="client-description font-alt-1">Jawa Barat</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Villa Ali Agung</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Karma Residence</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Adiwana Jeevalokha</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Ocean Palm</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Mohan Residence</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">Mixed Used Area Lampung</h5>
                        <span class="client-description font-alt-1">Lampung</span>
                    </div>
                    <div class="grid-item">
                        <h5 class="client-name">NOAA Social Dining</h5>
                        <span class="client-description font-alt-1">Bali</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Section Custom End -->
</div>
<!-- Content End -->
@endsection