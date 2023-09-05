<?php

namespace App\Services;

use App\Models\PaystackDetail;

class PaystackDetailStore 
{
    public function store($orderId, $orders)
    {
        PaystackDetail::create([
            'order_id' => $orderId,
            'paystack_id' => $orders['data']['id'],
            'domain' => $orders['data']['domain'],
            'status' => $orders['data']['status'],
            'reference' => $orders['data']['reference'],
            'amount' => $orders['data']['amount'],
            'gateway_response' => $orders['data']['gateway_response'],
            'ip_address' => $orders['data']['ip_address'],
            'fees' => $orders['data']['fees'],
            'authorization_code' => $orders['data']['authorization']['authorization_code'],
            'brand' => $orders['data']['authorization']['brand'],
            'card_type' => $orders['data']['authorization']['card_type'],
            'bank' => $orders['data']['authorization']['bank'],
        ]);

        return true;
    }
}