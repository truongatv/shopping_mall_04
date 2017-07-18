<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'unit_price',
        'rate_count',
        'total_quanity',
        'top_product',
    ]

    public function order_details()
    {
        return $this->hasMany(Order_Detail::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Categry::class);
    }

    public function shop_product()
    {
        return $this->belongsTo(Shop_Products::class);
    }
}
