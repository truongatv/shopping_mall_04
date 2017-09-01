<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface CheckoutRepositoryInterface extends BaseRepositoryInterface
{
    public function savePaymentType($token, $order_id, $payment_info);


}
