@extends('front.layouts.app')

@section('content')
    <section class="hero-wrapper">
        <div class="single-hero-slide" style="min-height: 600px">
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
                            <h1 class="fs-lg mb-20">@lang('app.find-best-domain')</h1>
                            <p>@lang('app.find-best-domain-sub')</p>

                            <div class="domain-search-box mt-40">
                                <div class="search-box-inner">
                                    <form action="{{route('search.result')}}">
                                        <input value="{{$domain}}" name="domain" type="text" placeholder="@lang('app.find-domain')">
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

    <section class="testimonail-wrap section-padding" id="testimonial" style="padding-top: 50px">
        <div class="testimonial-bg" data-background="assets/img/bgshape.svg">
        </div> <!-- /.testimonial-bg -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1">
                    <div class="section-title text-center text-white">
                        <span></span>
                        <h2>@lang('app.best_prices')</h2>
                        <p>@lang('app.reseller.join_us')</p>
                        <p> <a href="#">@lang('app.join_us')</a> </p>
                    </div> <!-- /.section-title -->
                </div>
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1">
                    <div class="section-title text-center text-white">
                        <span></span>
                        @if ($result[0]['available'])
                            <h3>@lang('models.domain.available_domain', ['domain' => $result[0]['domain']])</h3>
                            <p>@lang('models.domain.available_subtitle')</p>
                        @else
                            <h3>@lang('models.domain.notavailable_domain', ['domain' => $result[0]['domain']])</h3>
                            <p>@lang('models.domain.notavailable_subtitle')</p>
                        @endif
                    </div> <!-- /.section-title -->
                </div>
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-lg-12 col-12">
                    <table>
                        <tr>
                            <td>@lang('models.domain.singular')</td>
                            <td>@lang('models.domain.availability')</td>
                            <td>@lang('models.domain.period')</td>
                            <td>@lang('models.domain.price')</td>
                            <td></td>
                        </tr>
                        @foreach ($result as $key => $domain)
                            @if ($domain['available'])
                                <tr>
                                    <td>{{$domain["domain"]}}</td>
                                    <td>{{$domain["status"]}}</td>
                                    <td>{{$domain["period"]}}</td>
                                    <td>${{number_format($domain["price"], 2)}}</td>
                                    <td>
                                        <form class="" action="index.html" method="post">
                                            <button type="submit" name="button">@lang('base::models.shopping-cart.add')</button>
                                            <button type="submit" name="button">@lang('base::models.sale.buy')</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>

                    <form class="" action="index.html" method="post">
                        <button type="button" name="button">@lang('base::models.sale.proceed_to_payment')</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
