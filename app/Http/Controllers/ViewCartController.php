<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class ViewCartController extends Controller
{
    //
    public function viewCart($user_id)
    {	
    	if (Auth::user()->id == $user_id) {
    		$order = Order::where('user_id', $user_id)->orderBy('order_id', 'DESC')->first();
    		if(count($order) == 0 || $order->status == 1) {
                $payment_type = new PaymentType;
                $payment_type->information = "1";
                $payment_type->save();
                $payment_type = PaymentType::orderBy('payment_type_id', 'DESC')->first();
                $payment = new Payment;
                $payment->payment_type_id = $payment_type->payment_type_id;
                $payment->save();
                $payment = Payment::orderBy('payment_id', 'desc')->first();
                $order = new Order;
                $order->total_price = 0;
                $order->content = 'null';
                $order->user_id = Auth::user()->id;
                $order->payment_id = $payment->payment_id;
                $order->save();
            }
    	}
    	$order_details = $order->order_details()->get();
    	$topSells = Product::orderBy('products.top_product')
                    ->paginate(3);

    	return view('view_cart', compact('order_details', 'topSells', 'order'));

    }

    public function viewCartWithId($id)
    {
            $order = Order::where('order_id', $id)->orderBy('order_id', 'DESC')->first();
            if(count($order) == 0) {
                DB::transaction(function () {
                    $payment = new Payment;
                    $payment->payment_type_id = 1;
                    $payment->save();
                    $payment = Payment::orderBy('payment_id', 'desc')->first();
                    $order = new Order;
                    $order->total_price = 0;
                    $order->content = 'null';
                    $order->user_id = Auth::user()->id;
                    $order->payment_id = $payment->payment_id;
                    $order->save();
                });
            }
        $order_details = $order->order_details()->get();
        $topSells = Product::orderBy('products.top_product')
                    ->paginate(3);
        return view('view_cart',compact('order_details', 'topSells', 'order'));
    }
}
