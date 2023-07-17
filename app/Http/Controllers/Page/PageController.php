<?php

namespace App\Http\Controllers\Page;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

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

    public function shop(Category $category)
    {
        $products = Product::with('productImage')->where('category_id', $category->id)->get();

        return view('pages/shop', compact('products'));
    }

    public function cart()
    {
        $cart_contents = Cart::content();

        return view('pages/cart', compact('cart_contents'));
    }

    public function cartReview()
    {
        return view('pages/cart-review');
    }

    public function checkout()
    {
        return view('pages/checkout');
    }
}
