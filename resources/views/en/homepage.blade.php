@extends('en.layout.header-footer')
@section('title', 'Homepage')
@section('nav-home', 'current')
@section('nav-english', 'current')
@section('container')
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
                    <h1 class="title-medium color-white lspacing-small mb-10 text">
                      <strong>Light changes the soul of an object</strong>
                    </h1>
                    <p class="lead color-white text no-margin-bottom">
                      Are you planning for renovation or build
                      something?
                      <a href="{{ url('/en/services/work-together') }}" class="bkg-blue-binar">Click here</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img data-src="/assets/img/slider/slide_home-page-1.svg" data-retina src="images/blank.png" alt="" />
        </li>
        <li class="tms-slide" data-image data-as-bkg-image data-force-fit data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.3" data-animation="slideLeftRight">
          <div class="tms-content">
            <div class="tms-content-inner left v-align-middle">
              <div class="row">
                <div class="column width-6 offset-0">
                  <div class="tms-caption text-line-vertical" data-animate-in="preset:slideInUpLong;duration:1000ms;" data-no-scale>
                    <h1 class="title-medium color-white lspacing-small mb-10 text">
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
                <div class="column width-6 offset-0">
                  <div class="tms-caption text-line-vertical" data-animate-in="preset:slideInUpLong;duration:1000ms;" data-no-scale>
                    <h1 class="title-medium color-white lspacing-small mb-10 text">
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
        <a href="{{ url('/en/services/our-service') }}" class="button bkg-blue-binar color-blue-binar color-hover-blue-binar mb-mobile-40">See details</a>
      </div>
    </div>
    <div class="row">
      <div class="column width-12 offset-0 mb-10">
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


  <!-- Call to Action Section -->
  <div class="section-block replicable-content pt-110 pb-80 call-to-action-2 call-to-action-2-1 bkg-grey-ultralight background-cover" hidden>
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

  <!-- Call to Action Section -->
  <div class="section-block replicable-content pt-110 pb-80 call-to-action-2 call-to-action-2-1 bkg-grey-ultralight background-cover">
    <div class="row horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="0.4">

      <div class="column width-12 offset-0">
        <div class="row content-grid-2">

          <div class="grid-item">
            <p class="mb-10" style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 30px;
                    text-align: left;
                    line-height: 156.5%;
                    color: #ffffff;
                  ">
              We provide value added to your premises by orchestrating the art of lighting.
            </p>
            <p style="font-size: 16px; text-align: left;">
              we provide services that accommodate client needs while addressing the problem as best as possible, in the most creative way possible, using all available resources, to complete work properly, following the time agreed.
            </p>
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
                <br>
                <h3 class="mb-5 weight-bold mb-10" style="color: #ffffff">
                  A Homey Abode
                </h3>
                <h5 class="occupation mb-30" style="color: #ffffff">
                  Tunon Residence
                </h5>
                <p class="mb-50" style="color: #ffffff; text-align: left; font-size: 12pt;">
                  Located just off the riverbank overlooking the lush greenery of the paddy fields, a white modern modest building stands. Combining nature using lighting design was planned to enhance the beauty of the architectural building and its surroundings.
                </p>
              </div>
            </div>
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
                <br>
                <h3 class="mb-5 weight-bold mb-10" style="color: #ffffff">
                  The Mixbowl of Accentuation and Ambience
                </h3>
                <h5 class="occupation mb-30" style="color: #ffffff">
                  Hotel Harris Tuban
                </h5>
                <p style="color: #ffffff; text-align: left; font-size: 12pt;">
                  Located nearby airport, this well-known chain hotel offered practicality, hype and fun concept for its architecture interior line. It displays boldness yet gently offset by curves and natural color choices with some striking decorative accents for its interior.
                </p>
              </div>
            </div>
          </div>

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
                <br>
                <h3 class="mb-5 weight-bold mb-10" style="color: #ffffff">
                  Let The Light Colour Your Mood
                </h3>
                <h5 class="occupation mb-30" style="color: #ffffff">
                  K Residence
                </h5>
                <p style="color: #ffffff; text-align: left; font-size: 12pt;">
                  The renovation of this villa try to bring fresh new ambience to feel. Maintaning the shape of its architecture yet adding new touch of style in its interior, balancing old and new atmosphere.
                </p>
              </div>
            </div>
          </div>
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
                <br>
                <h3 class="mb-5 weight-bold mb-10" style="color: #ffffff">
                  Hi.. No Tagline
                </h3>
                <h5 class="occupation mb-30" style="color: #ffffff">
                  Kappa Ubud
                </h5>
                <p style="color: #ffffff; text-align: left; font-size: 12pt;">
                  None
                </p>
              </div>
            </div>
          </div>

          <div class="column width-12 offset-0 center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:300ms;" data-threshold="1">
            <a href="{{ url('/en/projects') }}" class="button buy-template medium text-uppercase border-white bkg-blue-binar color-white color-hover-white left mb-50">
              See More Projects
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Call to Action Section End -->

  <!-- Team Grid -->
  <div class="section-block team-1 bkg-blue-binar-body2">
    <div class="row horizon mb-50" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="0.4">
      <div class="column width-6">
        <p class="mb-20" style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 40px;
                    line-height: 156.5%;
                    color: #ffffff;
                  ">
          Why Choose Us?
        </p>
      </div>
      <div class="column width-12 offset-0">
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
            </div>
          </div>
          <div class="grid-item">
            <div class="team-content">
              <div class="team-content-info">
                <h3 class="mb-20 weight-bold" style="color: #ffffff">
                  Experienced Designer
                </h3>
                <p style="color: #ffffff">
                  We have a value that underlies all company activities, "To provide services that accommodate client needs while addressing the problem as best as possible, in the most creative way possible, using all available resources, to complete work properly, following the time agreed."
                </p>
              </div>

              <div class="team-content-info">
                <h3 class="mb-20 weight-bold" style="color: #ffffff">
                  Flexible in Creativity
                </h3>
                <p style="color: #ffffff">
                  Our main & essential activity lies in the field of architectural lighting design, where we produces lighting designs that support architects, interior designers, & artists/landscape designers to show the best side of their creations. Lighting design is made to strengthen the aesthetic value of the whole space (building/interior/ landscape) smoothly, without contradicting or reducing the original purpose & basic functions of itself.
                </p>
              </div>

              <div class="team-content-info">
                <h3 class="mb-20 weight-bold" style="color: #ffffff">
                  Communicative Team
                </h3>
                <p style="color: #ffffff">
                  We translate client needs into an idea developed with dozens of brainstorming processes, amplifying clients based designs into something much broader, creating a visually pleasing impression, even through concepts. We also follows trends, updating resources & references by always studying the latest technologies, comprehending unique solutions to lighting engineering, & perceiving new artistic & functional design. All to be the best lighting consultant pick for you to choose.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="0.4">
      <div class="column width-12 offset-0">
        <div class="row content-grid-2">
          <div class="grid-item">
            <div class="team-content">
              <div class="team-content-info">
                <p class="mb-20" style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 40px;
                    line-height: 156.5%;
                    color: #ffffff;
                  ">
                  We are Hiring<br>new Talents!
                </p>
                <p style="color: #ffffff">
                  BINAR always welcome young talents who have great potential and passion. BINAR is the best place to start your career in lighting design.
                  We are looking for Lighting Designer and Drafter. <br> <b>Let's join with us and be our team!</b>
                </p>
              </div>
            </div>
          </div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Grid End -->

  <!-- Team Grid -->
  <div id="binar-hiring" class="section-block team-1 bkg-blue-binar-body">
    <div class="row horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="0.4">
      <div class="column width-12">
        <p class="mb-50" style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 40px;
                    line-height: 156.5%;
                    color: #ffffff;
                  ">
          Stay updated<br>with the latest lighting
        </p>
      </div>
      <div class="column width-12 offset-0">
        <div class="row content-grid-3">
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
                <h5 class="mb-5" style="color: #ffffff">
                  May 2020
                </h5>
                <h3 class="weight-bold" style="color: #ffffff">
                  Stay Creative at Home #1
                </h3>
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
                <h5 class="mb-5" style="color: #ffffff">
                  June 2020
                </h5>
                <h3 class="weight-bold" style="color: #ffffff">
                  Contrast Difference Feeling
                </h3>
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
                <h5 class="mb-5" style="color: #ffffff">
                  June 2020
                </h5>
                <h3 class="weight-bold" style="color: #ffffff">
                  Contrast Lighting
                </h3>
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
@endsection