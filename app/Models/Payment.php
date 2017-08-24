<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'payment_id';

    protected $fillable=[];

 	public function order()
    {
        return $this->belongsTo(Order::class, 'payment_id', 'payment_id');
    }

    public function payment_types()
    {
        return $this->hasMany(PaymentType::class, 'payment_type_id', 'payment_type_id');
    }
}
