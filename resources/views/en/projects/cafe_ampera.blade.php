@extends('en.layout.header-footer')
@section('title', 'Cafe Ampera')
@section('nav-projects', 'current')
@section('nav-english', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- Full Width Slider Section -->
    <section class="section-block featured-media page-intro tm-slider-parallax-container">
        <div class="tm-slider-container full-width-slider" data-parallax data-animation="slide" data-scale-under="1140">
            <ul class="tms-slides">
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
                    <div class="tms-content">
                        <div class="tms-content-inner left">
                            <div class="row">
                                <div class="column width-12">
                                    <h1 class="tms-caption color-white inline" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;" data-no-scale>
                                        Projects Under Construction
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/general/under-construction.jpg" data-retina src="images/blank.png" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Full Width Slider Section -->

    <!-- About Intro -->
    <div class="section-block pt-70 bkg-blue-binar-body">
        <div class="row">
            <div class="column width-6">
                <h1 class="title-medium">Cafe Ampera</h1>
            </div>
            <div class="column width-5 offset-1">
                <p class="mb-50">Location: Bali</p>
            </div>
            <div class="column width-12">
                <hr class="mb-50" />
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Client:</span><span class="project-value">#</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Architect:</span><span class="project-value">#</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Interior:</span><span class="project-value">#</span>
                </p>
            </div>
            <div class="column width-12 mb-20"></div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Landscape:</span><span class="project-value">#</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">MEP:</span><span class="project-value">#</span>
                </p>
            </div>
            <div class="column width-4">
                <p class="project-attribute">
                    <span class="project-label">Photography:</span><span class="project-value">#</span>
                </p>
            </div>
        </div>
    </div>
    <!-- About Intro End -->

    <!-- Content -->
    <div class="section-block bkg-blue-binar-body2">
        <div class="row">
            <div class="column width-12">
                <div class="tm-slider-container content-slider" data-animation="slide" data-width="635" data-height="323" data-scale-under="960">
                    <ul class="tms-slides">
                        <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
                            <img class="lazyload" data-src="/assets/img/general/under-construction-1.svg" src="images/blank.png" alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <!-- Pagination Section 3 -->
    <div class="section-block pagination-3 portfolio no-padding-top bkg-blue-binar-body">
        <div class="row">
            <div class="column width-12">
                <ul>
                    <li>
                        <a class="pagination-previous disabled" href="#"><span class="icon-left-open-mini"></span> Prev</a>
                    </li>
                    <li>
                        <a class="back-to-grid fade-location" href="">Cafe Ampera</a>
                    </li>
                    <li>
                        <a class="pagination-next" href="{{ url('/en/projects/noaa-social-dining') }}">
                            Next <span class="icon-right-open-mini"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Pagination Section 3 End -->
</div>
<!-- Content End -->
@endsection