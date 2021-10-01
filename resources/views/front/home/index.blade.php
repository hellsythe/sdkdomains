@extends('front.layouts.app')

@section('content')
    <!--
    ======================================
        Hero Section
    ======================================
    -->
    <section class="hero-wrapper">
        <div class="single-hero-slide">
            <div class="hero-shape-wrap">
                <img src="assets/img/shape/9.png" class="shape shape1" alt="">
                <img src="assets/img/shape/10.png" class="shape shape2" alt="">
                <img src="assets/img/shape/11.png" class="shape shape3" alt="">
                <img src="assets/img/shape/12.png" class="shape shape4" alt="">
                <img src="assets/img/shape/13.png" class="shape shape5" alt="">
                <img src="assets/img/shape/14.png" class="shape shape6" alt="">
                <img src="assets/img/shape/15.png" class="shape shape7" alt="">
                <img src="assets/img/shape/16.png" class="shape shape8" alt="">
                <img src="assets/img/shape/17.png" class="shape shape9" alt="">
                <img src="assets/img/shape/17.png" class="shape shape10" alt="">
                <img src="assets/img/shape/17.png" class="shape shape11" alt="">
            </div>

            <div class="slide-bg">
                <svg
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                <linearGradient id="PSgrad_0" x1="0%" x2="70.711%" y1="0%" y2="70.711%">
                  <stop offset="0%" stop-color="rgb(21,61,87)" stop-opacity="1" />
                  <stop offset="100%" stop-color="rgb(43,34,81)" stop-opacity="1" />
                </linearGradient>

                </defs>
                <path fill-rule="evenodd"  fill="none"
                 d="M-0.000,0.001 L1920.000,-0.000 L1920.000,680.000 C1920.000,680.000 1439.999,830.000 959.998,830.000 C479.998,830.000 -0.000,680.000 -0.000,680.000 L-0.000,0.001 Z"/>
                <path fill="url(#PSgrad_0)"
                 d="M-0.000,0.001 L1920.000,-0.000 L1920.000,680.000 C1920.000,680.000 1439.999,830.000 959.998,830.000 C479.998,830.000 -0.000,680.000 -0.000,680.000 L-0.000,0.001 Z"/>
                </svg>
            </div> <!-- /.slide-bg -->

            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 text-center">
                        <div class="hero-content">
                            <h1 class="fs-lg mb-20">Find your best domain name and create a Site</h1>
                            <p>Up to 50% Off Domain and Hosting, Starting from $ 2.50/Month <br>Free SSL Certificate,  Money Back Gurantee.</p>

                            <div class="domain-search-box mt-40">
                                <div class="search-box-inner">
                                    <form action="#">
                                        <input type="text" placeholder="Find your new domain name">
                                        <span>
                                            <select class="domain-list select_design">
                                            <option value="1">.com</option>
                                            <option value="1">.net</option>
                                            <option value="1">.org</option>
                                        </select>
                                        </span>
                                        <button type="submit">search</button>
                                    </form>
                                </div>
                            </div> <!-- /.domain-search-box -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.single-hero-slide -->
    </section>

    <!--
    ======================================
        Featured Domain Offer Section
    ======================================
    -->
    <section class="featured-domain-offer" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="single-domain-name text-center">
                        <h3>.com</h3>
                        <span>$10.5</span>

                        <div class="domain-icon">
                            <img src="assets/img/domain1.png" alt="">
                        </div>
                    </div><!-- /.single-domain-name -->
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="single-domain-name text-center">
                        <h3>.info</h3>
                        <span>$4.5</span>

                        <div class="domain-icon">
                            <img src="assets/img/domain2.png" alt="">
                        </div>
                    </div><!-- /.single-domain-name -->
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="single-domain-name text-center">
                        <h3>.net</h3>
                        <span>$6.75</span>

                        <div class="domain-icon">
                            <img src="assets/img/domain3.png" alt="">
                        </div>
                    </div><!-- /.single-domain-name -->
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="single-domain-name text-center">
                        <h3>.store</h3>
                        <span>$11.5</span>

                        <div class="domain-icon">
                            <img src="assets/img/domain4.png" alt="">
                        </div>
                    </div><!-- /.single-domain-name -->
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="single-domain-name text-center">
                        <h3>.mobi</h3>
                        <span>$1.95</span>

                        <div class="domain-icon">
                            <img src="assets/img/domain5.png" alt="">
                        </div>
                    </div><!-- /.single-domain-name -->
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="single-domain-name text-center">
                        <h3>.biz</h3>
                        <span>$5.5</span>

                        <div class="domain-icon">
                            <img src="assets/img/domain6.png" alt="">
                        </div>
                    </div><!-- /.single-domain-name -->
                </div>
            </div>
        </div>
    </section>
@endsection
