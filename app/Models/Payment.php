<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[]

 	public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function payment_types()
    {
        return $this->hasMany(Payment_Type::class);
    }
}
