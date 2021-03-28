@extends('en.layout.header-footer')
@section('container')
@section('nav-home', 'current')
@section('nav-english', 'current')
<!-- Content -->
<div class="content clearfix">
  <!-- Fullscreen Slider Section -->
  <section class="section-block featured-media window-height tm-slider-parallax-container">
    <div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-animation="slide" data-speed="1000" data-scale-under="960" data-nav-arrows="true" data-auto-advance data-auto-advance-interval="7000" data-progress-bar="true">
      <ul class="tms-slides">
        <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.3" data-animation="scaleOut">
          <div class="tms-content">
            <div class="tms-content-inner left v-align-middle">
              <div class="row">
                <div class="column width-6 offset-0">
                  <div class="tms-caption text-line-vertical" data-animate-in="preset:slideInUpLong;duration:1000ms;" data-no-scale>
                    <h1 class="title-large color-white lspacing-small mb-10 text">
                      <strong>We give additional value by shaping the light
                        into your property</strong>
                    </h1>
                    <p class="lead color-white text no-margin-bottom">
                      Are you planning for renovation or build
                      something?
                      <a href="#binar-hiring" class="bkg-blue-binar">Click here</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img data-src="/assets/img/slider/slide_home-page-1.jpg" data-retina src="images/blank.png" alt="" />
        </li>
        <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.3" data-animation="slideLeftRight">
          <div class="tms-content">
            <div class="tms-content-inner left v-align-middle">
              <div class="row">
                <div class="column width-6 offset-0">
                  <div class="tms-caption text-line-vertical" data-animate-in="preset:slideInUpLong;duration:1000ms;" data-no-scale>
                    <h1 class="title-xlarge color-white lspacing-small mb-10 text">
                      <strong>Join Us and<br />Be Part of Our Team</strong>
                    </h1>
                    <p class="lead color-white text-uppercase no-margin-bottom">
                      Hiring 2021 /
                      <a href="#binar-hiring" class="bkg-blue-binar">Click here</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img data-src="/assets/img/slider/slide_home-page-2.jpg" data-retina src="images/blank.png" alt="" />
        </li>
        <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.3" data-animation="slideTopBottom">
          <div class="tms-content">
            <div class="tms-content-inner left v-align-middle">
              <div class="row">
                <div class="column width-7 offset-0">
                  <div class="tms-caption text-line-vertical" data-animate-in="preset:slideInUpLong;duration:1000ms;" data-no-scale>
                    <h1 class="title-xlarge color-white lspacing-small mb-10 text">
                      <strong>Have a bleesed<br />Good Friday</strong>
                    </h1>
                    <p class="lead color-white text no-margin-bottom">
                      May Your Faith in The God, Bring Peace to Your Heart, This Good Friday and Always.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img data-src="/assets/img/slider/slide_home-page-3.jpg" data-retina src="images/blank.png" alt="" />
        </li>
      </ul>
    </div>
  </section>
  <!-- Fullscreen Slider Section End -->

  <!-- Feature Column Section -->
  <div class="section-block replicable-content bkg-blue-binar-body">
    <div class="row">
      <div class="column width-12 horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="1">
        <h3 class="mb-30 center" style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: 800;
                    font-size: 40px;
                    line-height: 156.5%;
                    text-transform: capitalize;
                  ">
          Our Services
        </h3>
      </div>
      <div class="center">
        <p>
          Binar is engaged in architectural lighting design consultancy
          that helps architect, landscape, interior design and other
          respective parties to get the right artificial lighting that
          supports and maximizes the concept that wish to be achieved.
        </p>
        <a href="{{ url('/en/services/our_service') }}" class="button bkg-blue-binar color-blue-binar color-hover-blue-binar mb-mobile-40">See details</a>
      </div>
    </div>
    <div class="row">
      <div class="column width-12 offset-0 mb-100">
        <div class="row">
          <div class="box-our_service box-icon5 column width-4">
            <div class="text-box">
              <p class="description center" style="z-index: 2">
                Architectural<br />Lighting
              </p>
            </div>
          </div>
          <div class="box-our_service box-icon6 column width-4">
            <div class="text-box">
              <p class="description center" style="z-index: 2">
                Interior<br />Lighting
              </p>
            </div>
          </div>
          <div class="box-our_service box-icon7 column width-4">
            <div class="text-box">
              <p class="description center" style="z-index: 2">
                Landscape<br />Lighting
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Column Section End -->

  <!-- Team Grid -->
  <div id="binar-hiring" class="section-block team-1 bkg-blue-binar-body2">
    <div class="row horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="0.4">
      <div class="column width-12">
        <p class="mb-50" style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: 800;
                    font-size: 40px;
                    line-height: 156.5%;
                    color: #ffffff;
                  ">
          Join us and be part of our team
        </p>
      </div>
      <div class="column width-9 offset-0">
        <div class="row content-grid-2">
          <div class="grid-item">
            <div class="team-content">
              <div class="thumbnail no-margin-bottom img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                <a class="overlay-link fade-location" href="{{ url('/en/career/drafter') }}" style="color: #ffffff">
                  <img src="/assets/img/general/recruit-drafter.png" alt="hiring drafter" width="760" height="500" />
                  <span class="overlay-info">
                    <span>
                      <span>
                        <span>See details</span>
                      </span>
                    </span>
                  </span>
                </a>
              </div>
              <div class="team-content-info">
                <h5 class="mb-5 weight-bold" style="color: #ffffff">
                  Drafter
                </h5>
                <h6 class="occupation mb-50" style="color: #ffffff">
                  Professional
                </h6>
                <p style="color: #ffffff">
                  We are looking for a Drafter to be part of our team
                </p>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="team-content">
              <div class="thumbnail no-margin-bottom img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                <a class="overlay-link fade-location" href="{{ url('/en/career/junior-architect') }}">
                  <img src="/assets/img/general/recruit-junior_architect.png" alt="hiring junior architect for internship" width="760" height="500" />
                  <span class="overlay-info">
                    <span>
                      <span>
                        <span>See details</span>
                      </span>
                    </span>
                  </span>
                </a>
              </div>
              <div class="team-content-info">
                <h5 class="mb-5 weight-bold" style="color: #ffffff">
                  Junior Architect
                </h5>
                <h6 class="occupation mb-50" style="color: #ffffff">
                  Internship
                </h6>
                <p style="color: #ffffff">
                  As a student intern or work-study lighting designer,
                  you will work on a variety project types.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Grid End -->
</div>
<!-- Content End -->

<!-- Call to Action Section -->
<div class="section-block replicable-content pt-110 pb-80 call-to-action-2 call-to-action-2-1 bkg-grey-ultralight background-cover">
  <div class="row">
    <div class="column width-8 offset-2 center color-white horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="1">
      <p>See our recent projects.</p>
    </div>
    <div class="column width-6 offset-3 center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:300ms;" data-threshold="1">
      <a href="{{ url('/en/projects') }}" class="button buy-template medium text-uppercase border-white bkg-blue-binar color-white color-hover-white left mb-50">
        More Details
      </a>
    </div>
  </div>
</div>
<!-- Call to Action Section End -->
@endsection