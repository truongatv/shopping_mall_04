<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
	protected $primaryKey = 'payment_type_id';
    protected $fillable = [
        'information'
    ];

	public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_type_id', 'payment_type_id');
    }

}
