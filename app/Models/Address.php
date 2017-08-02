<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = 'address_id';

    protected $fillable = [
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
