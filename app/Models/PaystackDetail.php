<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaystackDetail extends Model
{
    use HasFactory;

    use BelongsToOrder;

    protected $fillable = [
        'order_id',
        'id',
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
