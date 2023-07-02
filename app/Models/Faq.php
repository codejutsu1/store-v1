<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'priority_id'];

    public static function getAllFaq()
    {
        return (new static)->get();
    }
}
