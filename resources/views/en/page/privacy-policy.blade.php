@extends('en.layout.header-footer')
@section('title', 'Privacy Policy')
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
                    <img data-src="/assets/img/banner/privacy-policy.jpg" data-retina src="images/blank.png" alt="" />
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
                <h3 class="mb-50">Privacy Policy</h3>
            </div>
            <div class="column width-8">
                <div class="accordion style-2" data-toggle-icon data-toggle-multiple>
                    <ul>
                        <li class="active">
                            <a href="#accordion-4-panel-1">did you know</a>
                            <div id="accordion-4-panel-1">
                                <div class="accordion-content">
                                    <p class="lead mb-20">We <a href="https://binarlightingstudio.com">www.binarlightingstudio.com</a> take your privacy very seriously.</p>
                                    <p>We believe that electronic privacy is very important to the confidence of the internet. We believe that this information only and should be used to assist us in providing a better service.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#accordion-4-panel-2">policy summary</a>
                            <div id="accordion-4-panel-2">
                                <div class="accordion-content">
                                    <p>In general, when you visit our website at <a href="https://binarlightingstudio.com">www.binarlightingstudio.com</a> and access information, you will remain anonymous. Before we ask you to fill out the information, we will explain how this information will be used. We will not share your personal information with other companies or individuals without your permission. There is a section where we will ask for additional information. We do this to better understand your needs and provide you with services we believe are valuable to you.Some examples of website information that we need are name, email, address, and some personal information. We give you the freedom to choose not to provide material information to us.</p>
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