@extends('en.layout.header-footer')
@section('title', 'About Us')
@section('nav-about_us', 'current')
@section('nav-our_philosophy', 'current')
@section('nav-english', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
  <!-- Full Width Slider Section -->
  <section class="section-block featured-media page-intro tm-slider-parallax-container">
    <div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="1140">
      <ul class="tms-slides">
        <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
          <div class="tms-content">
            <div class="tms-content-inner left">
              <div class="row">
                <div class="column width-12">
                  <h1 class="tms-caption color-white inline" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;" data-no-scale>
                    About BINAR
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <img data-src="/assets/img/banner/about_us.svg" data-retina src="images/blank.png" alt="" />
        </li>
      </ul>
    </div>
  </section>
  <!-- Full Width Slider Section -->

  <!-- Service Section -->
  <section class="section-block replicable-content bkg-blue-binar-body">
    <div class="row">
      <div class="column width-8 offset-2">
        <h5 class="mb-70" style="line-height: 30px; text-align: center;">
          The fundamental Philosophy of BINAR is taken from the meaning
          of word <i>BINAR</i> (in Bahasa), or a twinkle (in English),
          which means "emission of light". This combined with the
          character itself, which is flexible, does not require a
          propagation medium, can spread the colour spectrum when it
          passes through a prism, can reflect when it meets a mirror,
          can be formed, and can fill spaces and fields. BINAR is
          independent and can always develop and follow situations and
          conditions flexibly.
        </h5>
      </div>
    </div>
    <div class="row">
      <div class="column width-12">
        <h2 class="mb-50" style="text-align: center;">Our Story</h2>
        <div class="row">
          <div class="column width-6">
            <p>
              The story initially began in 2019 by 3 Co-founder co-operating to work on lighting &
              architectural projects. After much discussion & consideration, the three agreed to continue
              this collaboration on behalf of themselves and finally formed Binar. Currently, Binar is based
              in Bali to catch up with the Central & East Indonesia market.
            </p>
          </div>
          <div class="column width-6">
            <p class="mb-100">
              The main & essential activity of Binar lies in the field of architectural lighting design, where
              Binar produces lighting designs that support architects, interior designers, &
              artists/landscape designers to show the best side of their creations. Lighting design is made
              to strengthen the aesthetic value of the whole space (building/interior/ landscape)
              smoothly, without contradicting or reducing the original purpose & basic functions of itself
            </p>
          </div>
        </div>
      </div>
      <div class="column width-12">
        <div class="row content-grid-3 flex">
          <div class="grid-item no-margin-bottom">
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Vision</h4>
            <p style="text-align: center;">
              Binar has the vision to become a trusted
              lighting consultant & to assist project
              correspondent by providing design services &
              other forms of cooperation, produce the best
              solutions to produce a design that can be
              enjoyed by all.
            </p>
          </div>
          <div class="grid-item no-margin-bottom">
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Missions</h4>
            <p style="text-align: center;">
              To train and maintain Binar's
              competence in the field of
              lighting design, by growing &
              developing following the
              rising trends in the field.
            </p>
          </div>
          <div class="grid-item no-margin-bottom">
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Values</h4>
            <p style="text-align: center;">
              Binar has a value that underlies all company activities, "To provide services that
              accommodate client needs while addressing the problem as best as possible, in the most
              creative way possible, using all available resources, to complete work properly, following
              the time agreed."
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section End -->

  <!-- About Section -->
  <section class="section-block replicable-content bkg-blue-binar-body2">
    <div class="row">
      <div class="column width-12">
        <h2 class="mb-50" style="text-align: center;">Our Strength</h2>
      </div>
      <div class="column width-6 offset-3">
        <div class="row content-grid-1 flex">
          <div class="grid-item no-margin-bottom">
            <img class="mb-50" src="/assets/img/general/recruit-drafter.png" alt="hiring drafter" width="100%" />
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Experienced Designer</h4>
            <p style="text-align: center;" class="mb-80">
              We provide services that accommodate client needs while addressing the problem as best as possible, in the most creative way possible, using all available resources, to complete work properly, following the time agreed.
            </p>
          </div>
          <div class="grid-item no-margin-bottom">
            <img class="mb-50" src="/assets/img/general/recruit-drafter.png" alt="hiring drafter" width="100%" />
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Flexible in Creativity</h4>
            <p style="text-align: center;" class="mb-80">
              Our main & essential activity lies in the field of architectural lighting design, where we produces lighting designs that support architects, interior designers, & artists/landscape designers to show the best side of their creations. Lighting design is made to strengthen the aesthetic value of the whole space (building/interior/ landscape) smoothly, without contradicting or reducing the original purpose & basic functions of itself.
            </p>
          </div>
          <div class="grid-item no-margin-bottom">
            <img class="mb-50" src="/assets/img/general/recruit-drafter.png" alt="hiring drafter" width="100%" />
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Communicative Team</h4>
            <p style="text-align: center;" class="mb-80">
              We translate client needs into an idea developed with dozens of brainstorming processes, amplifying clients based designs into something much broader, creating a visually pleasing impression, even through concepts. We also follows trends, updating resources & references by always studying the latest technologies, comprehending unique solutions to lighting engineering, & perceiving new artistic & functional design. All to be the best lighting consultant pick for you to choose.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Team Grid -->
  <div id="binar-hiring" class="section-block team-1 bkg-blue-binar-body">
    <div class="row horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="0.4">
      <div class="column width-8 offset-2" style="text-align: center;">
        <h2 class="mb-30">Our Service</h2>
        <p class="mb-80">
          Architect's duty is to create the blank space, while the light creates souls,
          filling in the blanks with life. A combination that creates balance and
          interdependency within a system.
        </p>
      </div>
      <div class="column width-12">
        <div class="row content-grid-3 flex">
          <div class="grid-item no-margin-bottom">
            <img class="mb-50" src="/assets/img/general/recruit-drafter.png" alt="hiring drafter" width="100%" />
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Architectural Lighting</h4>
            <p style="text-align: center;" class="mb-80">
              We collaborate with the architect(s) in developing the concept of the building and its surroundings to get the right visualisation of the façade and exterior area, with aspects around lighting level, brightness contrast, safety aspect, eye sights and in particularly during evening time.
            </p>
          </div>
          <div class="grid-item no-margin-bottom">
            <img class="mb-50" src="/assets/img/general/recruit-drafter.png" alt="hiring drafter" width="100%" />
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Interior Lighting</h4>
            <p style="text-align: center;" class="mb-80">
              Moving into the building, we collaborate with interior designer to get the right suitable lighting ambiance based on the designed space to calculate the lighting level, brightness contrast, eye sights and safety aspect.
            </p>
          </div>
          <div class="grid-item no-margin-bottom">
            <img class="mb-50" src="/assets/img/general/recruit-drafter.png" alt="hiring drafter" width="100%" />
            <h4 class="mb-30 weight-bold text-uppercase" style="text-align: center;">Landscape Lighting</h4>
            <p style="text-align: center;" class="mb-80">
              More to intangible aspect of lighting design, the landscape design supports the architectural value of the premises, thus, we collaborate with the landscape designer to understand the right amount of the lighting needed to build senses of comfort, safety and balance.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Grid End -->
</div>
<!-- Content End -->
@endsection