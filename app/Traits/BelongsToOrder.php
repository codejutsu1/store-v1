<?php

namespace App\Traits;

use App\Models\Order;

trait BelongsToOrder {
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}