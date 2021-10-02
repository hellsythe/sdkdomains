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
                <img src="images/shape/1.png" height="60" class="shape shape1" alt="">
                <img src="images/shape/2.png" height="60" class="shape shape2" alt="">
                <img src="images/shape/2.png" height="60" class="shape shape3" alt="">
                <img src="images/shape/1.png" height="60" class="shape shape4" alt="">
                <img src="images/shape/2.png" height="60" class="shape shape5" alt="">
                <img src="images/shape/1.png" height="60" class="shape shape6" alt="">
                <img src="images/shape/2.png" height="60" class="shape shape7" alt="">
                <img src="images/shape/2.png" height="60" class="shape shape8" alt="">
                <img src="images/shape/1.png" height="60" class="shape shape9" alt="">
                <img src="images/shape/2.png" height="60" class="shape shape10" alt="">
                <img src="images/shape/2.png" height="60" class="shape shape11" alt="">
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
                            <h1 class="fs-lg mb-20">@lang('app.find-best-domain')</h1>
                            <p>@lang('app.find-best-domain-sub')</p>

                            <div class="domain-search-box mt-40">
                                <div class="search-box-inner">
                                    <form action="{{route('search.result')}}">
                                        <input name="domain" type="text" placeholder="@lang('app.find-domain')">
                                        <span></span>
                                        <button type="submit">@lang('app.search')</button>
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
                @foreach ($domains as $key => $domain)
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                        <div class="single-domain-name text-center">
                            <h3>.{{$domain->tld}}</h3>
                            <span>${{number_format($domain->price_mx, 2)}}</span>
                            <div class="domain-icon">
                                <img src="{{'assets/img/domain' . $key + 1 . '.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
