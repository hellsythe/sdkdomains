@extends('front.layouts.app')

@section('content')
    @include('front.home._search')

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

<style media="screen">
    .single-hero-slide {
        min-height: 600px !important;
    }
</style>
