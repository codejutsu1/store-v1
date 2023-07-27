<?php

namespace App\Models;

use App\Traits\BelongsToOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    use BelongsToOrder;

    protected $fillable = [
        'order_id',
        'product_name',
        'category',
        'selling_price',
        'original_price',
        'quantity',
        'delivery_fee',
        'total_price',
    ];
}
