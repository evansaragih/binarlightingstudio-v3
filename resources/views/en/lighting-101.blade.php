@extends('en.layout.header-footer')
@section('title', 'Lighting 101')
@section('nav-lighting101', 'current')
@section('nav-english', 'current')
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
                  <div class="hero-content-inner left-on-mobile">
                    <blockquote class="border">
                      <h1>Lighting 101 Blog</h1>
                      <cite style="font-size: 11pt;">Created by BINAR A Lighting Studio Team and our
                        Partners.</cite>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img data-src="/assets/img/banner/lighting101.jpg" data-retina src="images/blank.png" alt="" />
        </li>
      </ul>
    </div>
  </section>
  <!-- Intro Title Section 2 End -->

  <!-- Masonry Blog Grid -->
  <div class="section-block content-inner blog-masonry grid-container fade-in-progressively full-width no-margins pt-30 bkg-blue-binar-body" data-layout-mode="masonry" data-grid-ratio="1" data-animate-resize data-set-dimensions data-animate-resize-duration="600">
    <div class="row">
      <div class="column width-12">
        <div class="row grid content-grid-4">
          <div class="grid-item grid-sizer wide">
            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
              <img src="images/blog/grid/blog-2-wide.jpg" alt="" />
            </div>
            <div class="content-outer">
              <span class="content-inner left">
                <span class="post-title"><a href="blog-single-post-sidebar-right.html">Collaboration with BADA Studio</a></span>
                <span class="post-info">
                  <span class="post-date">May 2020</span>/<span class="post-love"><a href="#" class="post-love"><span class="icon-pencil"></span>BINAR & BADA</a></span>
                </span>
              </span>
            </div>
          </div>
          <div class="grid-item">
            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
              <img src="images/blog/grid/blog-5-square.jpg" alt="" />
            </div>
            <div class="content-outer">
              <span class="content-inner v-align-bottom center">
                <span class="post-title"><a href="blog-single-post-sidebar-right.html">Contrast Difference Feeling</a></span>
                <span class="post-info">
                  <span class="post-date">June 2020</span>/<span class="post-love"><a href="#" class="post-love"><span class="icon-pencil"></span>BINAR</a></span>
                </span>
              </span>
            </div>
          </div>
          <div class="grid-item">
            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
              <img src="images/blog/grid/blog-3-square.jpg" alt="" />
            </div>
            <div class="content-outer">
              <span class="content-inner v-align-bottom center">
                <span class="post-title"><a href="blog-single-post-sidebar-right.html">Contrast Lighting</a></span>
                <span class="post-info">
                  <span class="post-date">June 2020</span>/<span class="post-love"><a href="#" class="post-love"><span class="icon-pencil"></span>BINAR</a></span>
                </span>
              </span>
            </div>
          </div>
          <div class="grid-item">
            <div class="content-outer bkg-charcoal">
              <span class="content-inner center">
                <span class="icon-quote large color-grey"></span>
                <span class="post-title quote">
                  <a href="blog-single-post-sidebar-right.html">Design is not just what it looks like and feels
                    like. Design is how it works...</a>
                </span>
                <span class="post-info">
                  <span class="post-date">02 Jul 2015</span>/<span class="post-love"><a href="#" class="post-love"><span class="icon-heart"></span>1,768</a></span>
                </span>
              </span>
            </div>
          </div>
          <div class="grid-item">
            <div class="content-outer bkg-charcoal">
              <span class="content-inner center">
                <span class="icon-quote large color-grey"></span>
                <span class="post-title quote">
                  <a href="blog-single-post-sidebar-right.html">Design is not just what it looks like and feels
                    like. Design is how it works...</a>
                </span>
                <span class="post-info">
                  <span class="post-date">02 Jul 2015</span>/<span class="post-love"><a href="#" class="post-love"><span class="icon-heart"></span>1,768</a></span>
                </span>
              </span>
            </div>
          </div>
          <div class="grid-item wide">
            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
              <img src="images/blog/grid/blog-6-wide.jpg" alt="" />
            </div>
            <div class="content-outer">
              <span class="content-inner right">
                <span class="post-title"><a href="blog-single-post-sidebar-right.html">Collaboration with Studio Tana</a></span>
                <span class="post-info">
                  <span class="post-date">July 2020</span>/<span class="post-love"><a href="#" class="post-love"><span class="icon-pencil"></span>BINAR & Studio
                      Tana</a></span>
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Masonry Blog Grid End -->

  <!-- Pagination Section 5 -->
  <div class="section-block pagination-3 bkg-blue-binar-body">
    <div class="row">
      <div class="column width-12">
        <ul>
          <li>
            <a class="pagination-previous icon-left-open disabled" href="#"><span class="icon-left-open-mini"></span></a>
          </li>
          <li><a class="current" href="#">1</a></li>
          <li>
            <a class="pagination-next disabled" href="#"><span class="icon-right-open-mini"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Pagination Section 5 End -->
</div>
<!-- Content End -->
@endsection