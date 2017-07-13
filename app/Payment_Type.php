<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Type extends Model
{
    protected $fillable = [
    'information'
    ]

	public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

}
