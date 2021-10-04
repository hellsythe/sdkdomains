@extends('front.layouts.app')

@section('content')
    <!--
    ======================================
        Contact Us Section
    ======================================
    -->
    <section class="contact-us-wrap section-padding" id="contact">
        <div class="contact-shape-wrap">
            <img src="assets/img/shape/1.png" class="shape shape1" alt="">
            <img src="assets/img/shape/2.png" class="shape shape2" alt="">
            <img src="assets/img/shape/3.png" class="shape shape3" alt="">
            <img src="assets/img/shape/4.png" class="shape shape4" alt="">
            <img src="assets/img/shape/5.png" class="shape shape5" alt="">
            <img src="assets/img/shape/6.png" class="shape shape6" alt="">
            <img src="assets/img/shape/7.png" class="shape shape7" alt="">
            <img src="assets/img/shape/8.png" class="shape shape8" alt="">
            <img src="assets/img/shape/1.png" class="shape shape9" alt="">
            <img src="assets/img/shape/2.png" class="shape shape10" alt="">
            <img src="assets/img/shape/3.png" class="shape shape11" alt="">
            <img src="assets/img/shape/4.png" class="shape shape12" alt="">
            <img src="assets/img/shape/5.png" class="shape shape13" alt="">
            <img src="assets/img/shape/6.png" class="shape shape14" alt="">
            <img src="assets/img/shape/7.png" class="shape shape15" alt="">
            <img src="assets/img/shape/8.png" class="shape shape16" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1">
                    <div class="section-title text-center text-white">
                        <span></span>
                        <h2>Drop us as a message</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div> <!-- /.section-title -->
                </div>
            </div> <!-- /.row -->

            <div class="form-wrap">
                <form action="mail.php" class="row" id="contact-form" method="POST">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-input">
                            <label for="fname">First name (required)</label>
                            <input type="text" id="fname" name="fname" placeholder="first name">
                        </div>
                    </div> <!-- /.single-input -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-input">
                            <label for="lname">Last name (required)</label>
                            <input type="text" id="lname" name="lname" placeholder="Last name">
                        </div>
                    </div> <!-- /.single-input -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-input">
                            <label for="email">Your email  (required)</label>
                            <input type="text" id="email" name="email" placeholder="Your mail">
                        </div>

                        <div class="single-input">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Subject">
                        </div>
                    </div> <!-- /.single-input -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-input">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" placeholder="message"></textarea>
                        </div>
                    </div> <!-- /.single-input -->
                    <div class="col-12 col-lg-12 text-center mt-40">
                        <button type="submit" class="theme-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
