<?php

namespace App\Http\Controllers\User;

use App\Models\Faq;
use App\Models\Feed;
use App\Models\User;
use App\Models\Review;
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

    public function feed()
    {
        return view('user.website.feed',  ['feeds' => Feed::getAllFeed()]);
    }

    public function review()
    {
        return view('user.website.review', ['reviews' => Review::getAllReview()]);
    }

    public function staff()
    {
        $staff = User::with('roles')->role(['secretary', 'admin', 'rider'])->get();  
        // dd($staff);

        return view('user.staff', compact('staff'));
    }

    public function settings()
    {
        return view('user.settings');
    }
}
