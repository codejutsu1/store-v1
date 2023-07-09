<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model implements HasMedia
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description',
        'show'
    ];

    protected static function getAllFeed()
    {
        return (new static)->get();
    }
}
