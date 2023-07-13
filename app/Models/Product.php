<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'original_price',
        'selling_price',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productImage()
    {
        return $this->hasOne(ProductImage::class);
    }

    public static function getAllProducts()
    {
        return (new static)::with(['productImage'])->get();  
    }
}
