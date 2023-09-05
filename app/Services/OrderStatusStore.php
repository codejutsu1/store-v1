<?php

namespace App\Services;

use App\Models\OrderStatus;
use App\Interfaces\Storable;

class OrderStatusStore implements Storable
{
    public function store($orderId)
    {
        OrderStatus::create([
            'order_id' => $orderId,
        ]);

    }
}