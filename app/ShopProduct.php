<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $fillable = [
    	'shop_product_name',
    	'introdution',
    ];

	public function products()
    {
        return $this->hasMany(Product::class);
    }
}
