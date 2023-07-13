<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function category()
    {
        return view('user.shop.category', ['categories' => Category::getAllCategories()]);
    }

    public function product()
    {   
        return view('user.shop.product', ['products' => Product::getAllProducts()]);
    }
}
