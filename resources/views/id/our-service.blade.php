@extends('id.layout.header-footer')
@section('nav-services', 'current')
@section('nav-our_services', 'current')
@section('nav-indonesian', 'current')
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
                                        Layanan
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
                            Pencahayaan Arsitektural
                        </h4>
                        <p>
                            Kami bekerja sama dengan para arsitek dalam mengembangkan konsep bangunan dan sekitarnya untuk mendapatkan visualisasi yang tepat dari fasad dan area eksterior, dengan aspek sekitar tingkat pencahayaan, kontras kecerahan, aspek keselamatan, pemandangan mata, dan khususnya pada malam hari.
                        </p>
                    </div>
                </div>
            </div>
            <div class="column width-4 bkg-blue-binar-body2">
                <div class="feature-column small pt-80 pb-50 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:200ms;" data-threshold="0.5">
                    <div class="feature-text">
                        <h4 class="color-white" style="font-weight: bold">
                            Pencahayaan Interior
                        </h4>
                        <p>
                            Kami berkolaborasi dengan desainer interior untuk mendapatkan suasana pencahayaan yang tepat dan sesuai berdasarkan desain ruang untuk menghitung tingkat pencahayaan, kontras kecerahan, pemandangan mata, dan aspek keselamatan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="column width-4 bkg-blue-binar-body">
                <div class="feature-column small pt-80 pb-50 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:300ms;" data-threshold="0.5">
                    <div class="feature-text">
                        <h4 class="color-white" style="font-weight: bold">
                            Pencahayaan Lanskap
                        </h4>
                        <p>
                            Lebih ke aspek desain pencahayaan yang tidak berwujud, desain lanskap mendukung nilai arsitektur bangunan tersebut, oleh karena itu, kami berkolaborasi dengan desainer lanskap untuk memahami jumlah pencahayaan yang tepat yang diperlukan untuk membangun rasa kenyamanan, keamanan, dan keseimbangan.
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
                <h2 class="color-white">Cara Kerja Kami</h2>
            </div>
            <div class="column width-5 offset-1">
                <div class="hero-content split-hero-content">
                    <div class="hero-content-inner left color-white">
                        <p class="lead">
                            Binar bergerak di bidang konsultan desain pencahayaan arsitektural yang membantu arsitek, lansekap, desain interior dan pihak terkait lainnya untuk mendapatkan pencahayaan buatan yang tepat yang mendukung dan memaksimalkan konsep yang ingin dicapai.
                        </p>
                        <p>
                            Binar menangkap esensi dari apa yang ingin divisualisasikan oleh masing-masing pihak sesuai dengan kebutuhan dan keinginan pemilik dan penghuni tempat untuk memastikan kebutuhan standar pencahayaan dapat dipenuhi dengan estetika yang tepat. Cakupan layanan Binar meliputi eksterior, interior, dan lanskap di bidang perumahan, perhotelan, komersial, pendidikan, dan proyek keagamaan.
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
                <h3 class="mb-50">Klien Kami</h3>
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