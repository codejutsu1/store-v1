<?php

namespace App\Services;

class ShippingAddressStore 
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