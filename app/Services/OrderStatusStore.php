<?php

namespace App\Services;

use App\Models\OrderStatus;

class OrderStatusStore 
{
    public function store($orderId)
    {
        OrderStatus::create([
            'order_id' => $orderId,
        ]);

    }
}