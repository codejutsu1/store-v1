<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function faq()
    {
        return view('user.faq');
    }
}
