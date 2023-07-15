<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'image',
        'facebook',
        'tiktok',
        'instagram',
        'twitter'
    ];

    public static function getAllReview()
    {
        return (new static)->get();
    }
}
