<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.index');
    }

    public function about()
    {
        return view('front.home.about');
    }

    public function domains()
    {
        return view('front.home.domains');
    }

    public function features()
    {
        return view('front.home.features');
    }

    public function pricing()
    {
        return view('front.home.pricing');
    }

    public function services()
    {
        return view('front.home.services');
    }

    public function testimonial()
    {
        return view('front.home.testimonial');
    }

    public function contact()
    {
        return view('front.home.contact');
    }

    public function faq()
    {
        return view('front.home.faq');
    }
}
