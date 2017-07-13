<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_Product extends Model
{
    protected $fillable = [
    'shop_product_name',
    'introdution',
    ]   

	public function products()
    {
        return $this->hasMany(Product::class);
    }
}
