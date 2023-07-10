<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function category()
    {
        return view('user.shop.category');
    }

    public function product()
    {
        return view('user.shop.product');
    }
}
