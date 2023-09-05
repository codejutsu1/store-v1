<?php

namespace App\Services;

use App\Models\OrderUser;
use App\Interfaces\Storable;

class OrderUserStore implements Storable
{
    public function store($orders)
    {
        $user_name = $orders['data']['metadata']['billing_address']['first_name'] . ' ' . $orders['data']['metadata']['billing_address']['last_name'];
        $user_email = $orders['data']['metadata']['billing_address']['email'];

        $user = OrderUser::create([
            'name' => $user_name,
            'email' => $user_email,
        ]);

        return $user;
    }
}