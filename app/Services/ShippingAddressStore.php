<?php

namespace App\Services;

use App\Interfaces\Storable;
use App\Models\ShippingAddress;

class ShippingAddressStore implements Storable
{
    public function store($orderId, $orders)
    {
        ShippingAddress::create([
            'order_id' => $orderId,
            'lodge' => $orders['data']['metadata']['billing_address']['lodge'],
            'area' => $orders['data']['metadata']['billing_address']['area'],
            'phone' => $orders['data']['metadata']['billing_address']['tel'],
            'state' => 'Imo'
        ]);
    }
}