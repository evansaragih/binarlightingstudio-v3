@extends('en.layout.header-footer')
@section('nav-service', 'current')
@section('nav-our_service', 'current')
@section('nav-english', 'current')
@section('container')
<div class="content clearfix">
    <!-- Full Width Slider Section -->
    <section class="section-block intro-title-2 tm-slider-parallax-container">
        <div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="1140" data-scale-min-height="300">
            <ul class="tms-slides">
                <li class="tms-slide" data-image data-as-bkg-image data-force-fit>
                    <div class="media-column width-6"></div>
                    <div class="row">
                        <div class="column width-5 push-7">
                            <div class="hero-content split-hero-content no-margin-top">
                                <div class="hero-content-inner left-on-mobile">
                                    <blockquote class="border">
                                        <p style="font-size: 16pt;">Let architects build space while light creates souls</p>
                                        <cite style="font-size: 11pt;">Architect's duty is to create the blank space, while the light
                                            creates souls, filling in the blanks with life. A combination that
                                            creates balance and interdependency within a system</cite>
                                    </blockquote>
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
    <!-- Hero Section 5 -->
    <div class="section-block hero-5 hero-5-contact-1 color-white">
        <div class="media-column width-6"></div>
        <div class="row">
            <div class="column width-5 push-7">
                <div class="hero-content split-hero-content no-margin-top">
                    <div class="hero-content-inner left-on-mobile">
                        <blockquote class="border">
                            <p style="font-size: 16pt;">Let architects build space while light creates souls</p>
                            <cite style="font-size: 11pt;">Architect's duty is to create the blank space, while the light
                                creates souls, filling in the blanks with life. A combination that
                                creates balance and interdependency within a system</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section 5 End -->

    <!-- Hero 4 Section -->
    <div class="section-block hero-4 hero-4-1 clear-height right">
        <div class="row">
            <div class="column width-6">
                <h2 class="color-white"></h2>
            </div>
            <div class="column width-5 offset-1">
                <div class="hero-content split-hero-content">
                    <div class="hero-content-inner left color-white">
                        <blockquote class="border">
                            <p style="font-size: 16pt;">Let architects build space while light creates souls</p>
                            <cite style="font-size: 11pt;">Architect's duty is to create the blank space, while the light
                                creates souls, filling in the blanks with life. A combination that
                                creates balance and interdependency within a system</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero 4 Section End -->

    <!-- Contact Form -->
    <section class="section-block replicable-content contact-2">
        <div class="row">
            <div class="column width-8 offset-2 center">
                <h2 class="mb-30">Let's Work Together</h2>
                <div class="contact-form-container">
                    <form class="contact-form" action="php/send-email.php" method="post" novalidate>
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
                                <input type="text" name="website" class="form-website form-element large" placeholder="Website" tabindex="4">
                            </div>
                            <div class="column width-6">
                                <div class="form-select form-element large">
                                    <select name="options" class="form-aux" data-label="Options" tabindex="5">
                                        <option selected="selected" value="">Project Budget</option>
                                        <option value="">Less than $1000</option>
                                        <option value="">$1000 - $2000</option>
                                        <option value="">$2000 - $5000</option>
                                        <option value="">$5000 - $7000</option>
                                        <option value="">$10000 &amp; up</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column width-6">
                                <div class="form-select form-element large">
                                    <select name="options" class="form-aux" data-label="Options" tabindex="5">
                                        <option selected="selected" value="">How'd You Find Sartre</option>
                                        <option value="">From a friend</option>
                                        <option value="">Found Sartre online</option>
                                        <option value="">Previous client</option>
                                        <option value="">Through advertising</option>
                                    </select>
                                </div>
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