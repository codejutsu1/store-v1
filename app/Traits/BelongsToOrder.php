<?php

namespace App\Traits;

use App\Models\Order;

trait belongsToOrder {
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}