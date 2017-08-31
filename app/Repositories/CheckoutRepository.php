<?php

namespace App\Repositories;

use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Payment;
use App\Models\PaymentType;
use App\Contracts\CheckoutRepositoryInterface;

class CheckoutRepository extends BaseRepository implements CheckoutRepositoryInterface
{
    public function savePaymentType($token, $order_id, $payment_info){
    	$order = Order::where('order_id', $order_id)->first();
		$payment = Payment::where('payment_id', $order->payment_id)->orderBy('payment_id','DESC')->first();
		$payment_types = PaymentType::where('payment_type_id', $payment->payment_type_id)->orderBy('payment_type_id', 'DESC')->first();
		$payment_types->information = $payment_info;
		DB::transaction(function () use($payment_types) {
			$payment_types->save();
		});
    }
}
