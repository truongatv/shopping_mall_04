<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'content',
        'unit_price',
        'quality',
    ];

 	public function product()
    {
        return $this->belongsTo(Product::class,'product_id','product_id');
    }

    public function oder()
    {
        return $this->belongsTo(Order::class,'order_id','order_id');
    }
}
