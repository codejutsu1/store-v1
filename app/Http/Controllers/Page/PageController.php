<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages/home');
    }

    public function aboutUs()
    {
        return view('pages/about-us');
    }

    public function privacyPolicy()
    {
        return view('pages/privacy-policy');
    }

    public function shop()
    {
        return view('pages/shop');
    }

    public function cart()
    {
        return view('pages/cart');
    }

    public function cartReview()
    {
        return view('pages/cart-review');
    }
}
