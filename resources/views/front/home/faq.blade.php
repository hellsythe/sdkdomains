@extends('front.layouts.app')

@section('content')
    <!--
    ======================================
        faq Section
    ======================================
    -->
    <section class="testimonail-wrap section-padding" id="faq">
        <div class="testimonial-bg" data-background="assets/img/bgshape.svg" style="background-image: url(&quot;assets/img/bgshape.svg&quot;);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1">
                    <div class="section-title text-center">
                        <span></span>
                        <h2>Frequently asked questions</h2>
                        <p>WHO? HOW? WHY? To get answers for more questions, visit our <span>documentation</span> or <span>contact us page</span>.</p>
                    </div> <!-- /.section-title -->
                </div>
            </div> <!-- /.row -->

            <div class="row pt-10">
                <div class="col-lg-6 col-12">
                    <div class="single-faq-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="faq-icon">
                            <img src="assets/img/services/ssd.png" alt="">
                        </div>
                        <div class="faq-text">
                            <h4>What is Klaud hosting?</h4>
                            <p>Klaud hosting is a hosting service for WordPress sites, which comes with an easy 1-click installation of Demo.</p>
                        </div>
                    </div>
                </div> <!-- /.single-faq-box -->
                <div class="col-lg-6 col-12">
                    <div class="single-faq-box" data-aos="fade-up" date-aos-delay="100"  data-aos-duration="800">
                        <div class="faq-icon">
                            <img src="assets/img/services/wp.png" alt="">
                        </div>
                        <div class="faq-text">
                            <h4>Why Choose Khost hosting?</h4>
                            <p>Klaud hosting is a hosting service for WordPress sites, which comes with an easy 1-click installation of Demo.</p>
                        </div>
                    </div>
                </div> <!-- /.single-faq-box -->
                <div class="col-lg-6 col-12">
                    <div class="single-faq-box" data-aos="fade-up" date-aos-delay="200" data-aos-duration="800">
                        <div class="faq-icon">
                            <img src="assets/img/services/idea.png" alt="">
                        </div>
                        <div class="faq-text">
                            <h4>Is This an Affiliate Program?</h4>
                            <p>Klaud hosting is a hosting service for WordPress sites, which comes with an easy 1-click installation of Demo.</p>
                        </div>
                    </div>
                </div> <!-- /.single-faq-box -->
                <div class="col-lg-6 col-12">
                    <div class="single-faq-box" data-aos="fade-up" date-aos-delay="300" data-aos-duration="800">
                        <div class="faq-icon">
                            <img src="assets/img/services/support.png" alt="">
                        </div>
                        <div class="faq-text">
                            <h4>What if I've problems with hosting?</h4>
                            <p>Klaud hosting is a hosting service for WordPress sites, which comes with an easy 1-click installation of Demo.</p>
                        </div>
                    </div>
                </div> <!-- /.single-faq-box -->
            </div>
        </div>
    </section>
@endsection
