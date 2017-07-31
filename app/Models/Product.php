<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name',
        'unit_price',
        'rate_count',
        'total_quanity',
        'top_product',
        'category_id',
        'shop_product_id',
    ];

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'product_id');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id', 'product_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function shopProduct()
    {
        return $this->belongsTo(ShopProduct::class, 'shop_product_id', 'shop_product_id');
    }
}
