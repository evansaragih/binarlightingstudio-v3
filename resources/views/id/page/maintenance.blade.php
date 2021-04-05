@extends('id.layout.maintenance')
@section('title', 'Tahap Perbaikan')
@section('nav-indonesian', 'current')
@section('container')
<!-- Content -->
<div class="content clearfix">
    <!-- Fullscreen Sections -->
    <section class="fullscreen-sections-wrapper no-navigation">
        <div class="section-block fullscreen-section background-cover bkg-charcoal">
            <!-- Fullscreen Image -->
            <div class="background-image-wrapper">
                <div class="background-image fullscreen-bkg-2"></div>
            </div>
            <div class="fullscreen-inner">
                <div class="row">
                    <div class="column width-8 offset-2 pt-50 center offset-1">
                        <h1 class="mb-30 no-padding-on-mobile color-white">
                            Peningkatan dan perbaikan website sedang dilakukan
                        </h1>
                    </div>
                    <div class="column width-6 offset-3 center">
                        <p class="lead mb-20 color-white">
                            Hai! Kami sedang membuat website kami lebih nyaman dan menarik
                            dari sebelumnya. Beberapa halaman mungkin masih belum tersedia. Kami akan segera menyelesaikan ini.<br />Ingin kami beritahu?
                            <a data-content="inline" data-toolbar="" data-networks="twitter;pinterest" data-modal-mode data-modal-width="600" data-lightbox-animation="fade" href="#signup-lightbox" class="lightbox-link color-white color-hover-white mb-30">Klik di sini</a>.
                        </p>
                        <div class="separator bkg-white"></div>
                        <h6 class="color-white weight-bold text-uppercase">
                            Progress saat ini
                        </h6>
                        <div class="stat maintenance-stat">
                            <div class="stat-inner color-white">
                                <p class="counter">
                                    <span class="stat-counter" data-count-from="100" data-count-to="{{$progress}}">100</span>%
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fullscreen Sections End -->

    <!-- Signup Modal End -->
    <div id="signup-lightbox" class="signup-1 pt-70 pb-50 hide">
        <div class="row">
            <div class="column width-12 left mb-20">
                <div class="signup-form-container">
                    <h3 class="mb-30 center" style="color: #081137;">Kamu akan mendapat notifikasi</h3>
                    <form class="merged-form-elements" action="/en/subscribe" method="post" novalidate>
                        @csrf
                        <div class="row">
                            <div class="column width-7 offset-1">
                                <div class="field-wrapper">
                                    <input type="email" name="email" class="form-email form-element large" placeholder="Email address" tabindex="2" required />
                                </div>
                            </div>
                            <div class="column width-4 cente-on-mobile">
                                <input id="send" type="submit" class="form-submit button large bkg-charcoal bkg-hover-theme color-white color-hover-white" />
                            </div>
                        </div>
                        <input type="text" name="honeypot" class="form-honeypot form-element" />
                    </form>
                    <div class="form-response"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signup Modal End -->
</div>
<!-- Content End -->
@endsection