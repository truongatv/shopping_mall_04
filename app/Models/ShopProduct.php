<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $primaryKey = 'shop_product_id';
    protected $fillable = [
        'shop_product_name',
        'introdution',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'shop_product_id', 'shop_product_id');
    }
}
