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
        return view('user.order.index');
    }

    public function show(Order $order)
    {
        $user = User::where('id', $order->user_id)->select(['name', 'email'])->first();

        $order = Order::with(['order_details', 'order_status', 'shipping_address'])->where('id', $order->id)->first();
        // dd($order);

        return view('user.order.show', compact('user', 'order'));
    }
}
