<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('order_details', 'order_status')->select(['id', 'created_at'])->get();

        return view('user.order.index', compact('orders'));
    }
}
