<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use App\Traits\BelongsToOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderStatus extends Model
{
    use HasFactory;

    use BelongsToOrder;

    use BelongsToUser;

    protected $fillable = [
        'order_id',
        'status',
        'user_id'
    ];
}
