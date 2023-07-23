<?php

namespace App\Models;

use App\Traits\BelongsToOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShippingAddress extends Model
{
    use HasFactory;
    
    use BelongsToOrder;

    protected $fillable = [
        'order_id',
        'lodge',
        'area',
        'phone',
        'state'
    ];
}
