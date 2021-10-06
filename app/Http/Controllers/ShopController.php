<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DomainPrice;
use App\Models\Domain;

class ShopController extends Controller
{
    public function pay(Request $request)
    {
        session(['cart' => $request->input('domain')]);
        return view('front.home.pay');
    }
}
