@extends('en.layout.header-footer')
@section('title', 'Work Together')
@section('nav-services', 'current')
@section('nav-work_together', 'current')
@section('nav-english', 'current')
@section('container')
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
                                    <div class="hero-content-inner left-on-mobile">
                                        <blockquote class="border">
                                            <h1>Let architects build space<br />while light creates souls</h1>
                                            <cite style="font-size: 11pt;">Architect's duty is to create the blank space, while the light
                                                creates souls,<br />filling in the blanks with life. A combination that
                                                creates balance and<br />interdependency within a system.</cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/banner/work-together.jpg" data-retina src="images/blank.png" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Full Width Slider Section -->

    <!-- Contact Form -->
    <section class="section-block replicable-content contact-2">
        <div class="row">
            <div class="column width-8 offset-2 center">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSegaHngmktsBPxWUyQV1kBVbuyVSLcF2s7Ko4Cl5z3_wzj7rw/viewform?embedded=true" width="640" height="650" frameborder="0" marginheight="0" marginwidth="0" class="bkg-blue-binar-body">Memuat…</iframe>
                <div class="contact-form-container" hidden>
                    <form class="contacts-form" action="/en/services/work-together" method="post">
                        @csrf
                        <div class="row">
                            <div class="column width-6">
                                <input type="text" name="fname" class="form-fname form-element large" placeholder="First Name*" tabindex="1" required>
                            </div>
                            <div class="column width-6">
                                <input type="text" name="lname" class="form-lname form-element large" placeholder="Last Name" tabindex="2">
                            </div>
                            <div class="column width-6">
                                <input type="email" name="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required>
                            </div>
                            <div class="column width-6">
                                <input type="text" name="company" class="form-company form-element large" placeholder="Your Company" tabindex="4">
                            </div>
                            <div class="column width-6">
                                <input type="text" name="website" class="form-website form-element large" placeholder="Your Website" tabindex="5">
                            </div>
                            <div class="column width-6">
                                <input type="text" name="location" class="form-location form-element large" placeholder="Your Location*" tabindex="6" required>
                            </div>
                            <div class="column width-6">
                                <input type="text" name="honeypot" class="form-honeypot form-element large">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column width-12">
                                <div class="field-wrapper">
                                    <textarea name="message" class="form-message form-element large" placeholder="Message*" tabindex="7" required></textarea>
                                </div>
                            </div>
                            <div class="column width-12">
                                <div class="field-wrapper pt-10 pb-10">
                                    <input id="checkbox-1" class="form-element checkbox" name="checkbox-1" type="checkbox" required>
                                    <label for="checkbox-1" class="checkbox-label">the data that I have filled in is true and can be accounted for its authenticity</label>
                                </div>
                            </div>
                            <div class="column width-12">
                                <input type="submit" value="Send Email" class="form-submit button medium bkg-theme bkg-hover-theme color-white color-hover-white">
                            </div>
                        </div>
                    </form>
                    <div class="form-response center"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Form End -->
</div>
@endsection