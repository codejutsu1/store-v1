<?php

namespace App\Http\Controllers\User;

use App\Models\Faq;
use App\Models\Feed;
use App\Models\User;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard()
    {
        $total_revenue = Order::sum('total_price');

        $new_orders = Order::where('status', Null)->count();

        return view('user.dashboard', compact('total_revenue', 'new_orders'));
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

    public function settings()
    {
        return view('user.settings');
    }
}
