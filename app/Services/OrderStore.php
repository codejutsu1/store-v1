<?php

namespace App\Services;

use App\Models\Order;
use App\Interfaces\Storable;
use App\Interfaces\Updatable;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderStore implements Storable, Updatable
{
    public $area;

    public function store($orders, $user)
    {
        $order = Order::create([
            'order_user_id' => $user->id,
            'total_price' => floatval(Cart::subtotal()) * 1000,
            'additional_information' => $orders['data']['metadata']['billing_address']['additional_information'],
        ]); 

        $this->area = $orders['data']['metadata']['billing_address']['area'];

        $this->update($order->id);

        return $order;
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