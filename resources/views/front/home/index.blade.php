@extends('front.layouts.app')

@section('content')
    @include('front.home._search')

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
