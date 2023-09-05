<?php

namespace App\Services;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderStore
{
    public $area;

    public function store($orders, $user)
    {
        $order = Order::create([
            'order_user_id' => $user->id,
            'order_id' => '',
            'total_price' => floatval(Cart::subtotal()) * 1000,
            'additional_information' => $orders['data']['metadata']['billing_address']['additional_information'],
        ]); 

        return $order;

        $this->area = $orders['data']['metadata']['billing_address']['area'];
    }

    public function update($orderId)
    {
        $createdOrderId = $this->createOrderId($this->area, $orderId);

        Order::findOrFail($orderId)->update([
            'order_id' => $createdOrderId,
        ]);

        return '';
    }

    public function createOrderId($order_address, $order_id){

        $alpha = "ABCDEFGHIJ123456";

        $number = substr(str_shuffle("28013"), 0, 2);

        $new_alpha = substr(str_shuffle($alpha), 0, 4);

        $location = strtoupper(substr($order_address, 0, 1));

        $orderId = 'KS'.$location.'-' . $new_alpha . '-' . $order_id . $number;

        return $orderId;
    }
}