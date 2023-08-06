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

        $order = Order::with(['order_details', 'order_status', 'shipping_address',])
                        ->with('paystack_detail', function($query) {
                            $query->select(['id','status', 'reference', 'card_type', 'bank']);
                        })
                        ->where('id', $order->id)
                        ->first();

        $delivery_name = User::where('id', $order->order_status->user_id)->value('name');

        return view('user.order.show', compact('user', 'order', 'delivery_name'));
    }
}
