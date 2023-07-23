<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $filable = [
        'user_id',
        'total_price',
    ];

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function order_status()
    {
        return $this->hasOne(OrderStatus::class);
    }

    public function paystack_detail()
    {
        return $this->hasOne(PaystackDetail::class);
    }

    public function shipping_address()
    {
        return $this->hasOne(ShippingAddress::class);
    }
    
}
