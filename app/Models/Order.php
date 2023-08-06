<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    // use BelongsToUser;

    protected $fillable = [
        'order_user_id',
        'order_id',
        'status',
        'total_price',
        'additional_information'
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

    public function order_user()
    {
        return $this->belongsTo(OrderUser::class);
    }
}
