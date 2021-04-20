@extends('en.layout.header-footer')
@section('title', 'Terms & Conditions')
@section('nav-about_us', 'current')
@section('nav-terms_condition', 'current')
@section('nav-english', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">

    <!-- Intro Title -->
    <section class="section-block featured-media page-intro tm-slider-parallax-container">
        <div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="1140" data-scale-min-height="300">
            <ul class="tms-slides">
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
                    <div class="tms-content">
                        <div class="tms-content-inner left">
                            <div class="row">
                                <div class="column width-12">
                                    <h1 class="tms-caption color-white inline" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;" data-no-scale>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/banner/terms-condition.jpg" data-retina src="images/blank.png" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Intro Title End -->

    <!-- Intro -->
    <div class="section-block pb-0">
        <div class="row">
            <div class="column width-10 offset-1 center">
                <p class="lead weight-regular mb-70">The development and improvement of our services cannot be separated from your input. If you want to provide feedback, suggestions, or messages, you can contact our customer care at <a href="mailto: customercare@binarlightingstudio.com">customercare@binarlightingstudio.com</a> or contact us by filling in our message form on the contact page.</p>
            </div>
            <div class="column width-12">
                <hr class="mb-70">
            </div>
        </div>
    </div>
    <!-- Intro End -->

    <!-- Accordions Style 2 -->
    <div class="section-block pt-0 pb-0">
        <div class="row">
            <div class="column width-4">
                <h3 class="mb-50">Terms and Conditions</h3>
            </div>
            <div class="column width-8">
                <div class="accordion style-2" data-toggle-icon data-toggle-multiple>
                    <ul>
                        <li class="active">
                            <a href="#accordion-4-panel-1">Did You Know?</a>
                            <div id="accordion-4-panel-1">
                                <div class="accordion-content">
                                    <p class="lead mb-20">
                                        binarlightingstudio.com is a website that is owned and operated by PT. TRIA BINAR MERAKI</p>
                                    <p>All activities and rules directly related to this website will be fully governed by the terms and conditions below.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#accordion-4-panel-2">Additional Info</a>
                            <div id="accordion-4-panel-2">
                                <div class="accordion-content">
                                    <p>In an unspecified period of time, the terms and conditions are subject to change. Your use of this website must follow any changes that are part of the agreement and be bound by the terms according to the changes without exception.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#accordion-4-panel-3">Disclaimer</a>
                            <div id="accordion-4-panel-3">
                                <div class="accordion-content">
                                    <p>BINAR a Lighting Studio is not responsible for any damage to your computer equipment or other devices and property arising from the use of the website or due to personal negligence.</p>
                                    <p>Neither the leadership and the BINAR a Lighting Studio team shall have no liability whatsoever for damages and losses arising out of or related to the use of the website and its contents.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#accordion-4-panel-4">Links from/to Third Party Web sites</a>
                            <div id="accordion-4-panel-4">
                                <div class="accordion-content">
                                    <p>BINAR a Lighting Studio provides links from/to third party websites as a service improvement and convenience in itself. Links are not necessarily governmental to provide support or services with specific linked websites.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Accordions Style 2 End -->

</div>
<!-- Content End -->
@endsection