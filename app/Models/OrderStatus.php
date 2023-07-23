<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;
    
    use BelongsToOrder;

    protected $fillable = [
        'order_id',
        'status',
        'user_id'
    ];
}
