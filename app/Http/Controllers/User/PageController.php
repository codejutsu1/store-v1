<?php

namespace App\Http\Controllers\User;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function faq()
    {
        return view('user.website.faq', ['faqs' => Faq::getAllFaq()]);
    }

    public function review()
    {
        return view('user.website.review');
    }

    public function settings()
    {
        return view('user.settings');
    }
}
