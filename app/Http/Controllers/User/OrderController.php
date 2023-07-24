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
        $orders = User::select(['id', 'name'])
                        ->with([
                            'order' => function($query) {$query->select(['id', 'user_id']);},
                            'order_details' => function($query) {$query->select(['order_id']);},
                            'order_status'
                            ])
                            ->get(); 

        return view('user.order.index', compact('orders'));
    }
}
