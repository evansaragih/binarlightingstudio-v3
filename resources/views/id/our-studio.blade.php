@extends('id.layout.header-footer')
@section('title', 'Studio Kami')
@section('nav-about_us', 'current')
@section('nav-our_studio', 'current')
@section('nav-indonesian', 'current')
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
                                    <h1 class="tms-caption color-white inline" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;" data-no-scale>
                                        Studio Kami
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="/assets/img/banner/our-studio.jpg" data-retina src="images/blank.png" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- Intro Title Section 2 End -->

    <!-- About Section -->
    <section class="section-block replicable-content bkg-blue-binar-body">
        <div class="row mb-50">
            <div class="column width-5 horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="1">
                <h3 class="mb-30">Pertanyaan</h3>
                <p>
                    Untuk setiap dan semua pertanyaan tentang proyek atau pertanyaan apa pun, silakan kirimkan email kepada kami.
                </p>
                <a href="mailto:customer-care@binarlightingstudio.com" class="button medium bkg-blue-binar color-blue-binar color-hover-blue-binar mb-0 mb-mobile-50">customer-care@binarlightingstudio.com</a>
            </div>
            <div class="column width-6 offset-1 horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-threshold="1">
                <h3 class="mb-30">Pres Terkait</h3>
                <p>
                    Untuk semua pertanyaan terkait pers, untuk menerima kit pers atau untuk berbicara dengan perwakilan pers, silakan kirim email kepada kami.
                </p>
                <a href="mailto:info-press" class="button medium bkg-blue-binar color-blue-binar color-hover-blue-binar mb-0">info-press@binarlightingstudio.com</a>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Hero 5 Section -->
    <div class="section-block hero-5 right show-media-column-on-mobile bkg-blue-binar-body2">
        <div class="media-column width-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15777.471944255074!2d115.1848432!3d-8.6565083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ecf6b852d8789b2!2sBINAR%20a%20Lighting%20Studio!5e0!3m2!1sid!2sid!4v1616898092773!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="row">
            <div class="column width-5">
                <div class="hero-content split-hero-content">
                    <div class="hero-content-inner left">
                        <p class="color-white">
                            Jl. Padang Griya III No.3,<br />Padang Sambian, Denpasar Barat<br />
                            Kota Denpasar, Provinsi Bali
                            80118.
                        </p>
                        <p class="color-grey-light">
                            BINAR A Lighting Studio adalah spesialis pencahayaan arsitektural
                            yang bergerak dalam pencahayaan eksterior dan fasad, interior dan
                            lanskap. Pekerjaan kami adalah mengembangkan aspek estetika dengan
                            desain iluminasi yang disesuaikan dengan tempat dan aspirasi pemilik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero 5 Section End -->

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