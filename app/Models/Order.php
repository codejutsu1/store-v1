<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'total_price',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

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
