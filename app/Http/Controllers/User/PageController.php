<?php

namespace App\Http\Controllers\User;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;

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
        return view('user.website.review', ['reviews' => Review::getAllReview()]);
    }

    public function settings()
    {
        return view('user.settings');
    }
}
