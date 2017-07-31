<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $primaryKey = 'order_detail_id';
    protected $fillable = [
        'content',
        'unit_price',
        'quality',
    ];

 	public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function oder()
    {
        return $this->belongsTo(Order::class, 'order_detail_id', 'order_detail_id');
    }
}
