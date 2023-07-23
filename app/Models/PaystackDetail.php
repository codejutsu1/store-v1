<?php

namespace App\Models;

use App\Traits\BelongsToOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaystackDetail extends Model
{
    use HasFactory;

    use BelongsToOrder;

    protected $fillable = [
        'order_id',
        'paystack_id',
        'domain',
        'status',
        'reference',
        'amount',
        'gateway_response',
        'ip_address',
        'fees',
        'authorization_code',
        'brand',
        'card_type',
        'bank',
    ];
}
