<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Address;
use App\Models\Payment;
use App\Models\PaymentType;
use App\Models\Product;

class CheckOutController extends Controller
{
    public function checkout_addresses(Request $request,$user_id,$order_id)
    {
    	$this->validate($request, [
    		'checkout-shipping-name' => 'required|max:50',
    		'checkout-shipping-address1' => 'required',
    		'checkout-shipping-address2' =>'required',
    		'checkout-shipping-postal' =>'required|numeric',
    		'checkout-shipping-phone' =>'required|numeric',
    		'checkout-shipping-city' => 'required',
    		],[
    		'checkout-shipping-name.required' => trans('errors.name'),
    		'checkout-shipping-name.max' => trans('errors.name_lenght'),
    		'checkout-shipping-address1.required' => trans('errors.address1'),
    		'checkout-shipping-address2.required' => trans('errors.address2'),
    		'checkout-shipping-postal.required' => trans('errors.postal_code'),
    		'checkout-shipping-postal.numeric' => trans('errors.postal_code_error'),
    		'checkout-shipping-phone.required' => trans('errors.phone'),
    		'checkout-shipping-phone.numeric' => trans('errors.phone_error'),
    		'checkout-shipping-city.required' => trans('errors.city')
    		]);
    	$order = Order::where('order_id',$order_id)->first();
    	try {
    		$order->address = $request->input('checkout-shipping-address1').' | '.$request->input('checkout-shipping-address2').' | '.$request->input('checkout-shipping-city').' | '.$request->input('checkout-shipping-postal');
    		$order->information = $request->input('checkout-shipping-name').' | '.$request->input('checkout-shipping-phone');
    		DB::transaction(function () use($order) {
    			$order->save();
    		});
    		return redirect()->route('checkout_payment', $order_id);
    	} catch (\Exception $e)
    	{
    		return redirect()->back()->withErrors(trans('errors.add_addresses'));
    	}
    }

    public function checkout_payment(Request $request,$user_id,$order_id)
    {
    	if($request->checkout_payments == 'prepaid') {
    		try {
    			$order = Order::where('order_id', $order_id)->first();
				$payment = Payment::where('payment_id', $order->payment_id)->orderBy('payment_id', 'DESC')->first();
				$payment_types = PaymentType::where('payment_type_id', $payment->payment_type_id)->orderBy('payment_type_id', 'DESC')->first();
				$payment_types->information = "1";
				DB::transaction(function () use($payment_types) {
					$payment_types->save();
				});

    			return redirect()->route('checkout_confirm', $order_id);
    		} catch(\Exception $e) {
    			return redirect()->back()->withErrors(trans('errors.add_payment'));
    		}
    	}
    	if($request->checkout_payments != 'prepaid') {
    		// dd($request->checkout_payments);
    		$this->validate($request, [
    			'checkout_payment_name' => 'required|max:50',
    			'checkout_payment_number' => 'required|numeric',
    			'checkout_payment_cvc' => 'required|numeric',
    			'checkout_payment_expire' => 'required|date_format:"m/Y"'
    			],[
    			'checkout_payment_name.required' => trans('errors.name'),
    			'checkout_payment_number.required' => trans('errors.cart_number'),
    			'checkout_payment_number.numeric' => trans('errors.number'),
    			'checkout_payment_cvc.required' => trans('errors.cvc'),
    			'checkout_payment_cvc.numeric' => trans('errors.cvc_number'),
    			'checkout_payment_expire.required' => trans('errors.expire'),
    			'checkout_payment_expire.date_format' => trans('errors.expire_number')
    			]);
    		try {
    			$order = Order::where('order_id', $order_id)->first();
				$payment = Payment::where('payment_id', $order->payment_id)->orderBy('payment_id','DESC')->first();
				$payment_types = PaymentType::where('payment_type_id', $payment->payment_type_id)->orderBy('payment_type_id', 'DESC')->first();
				$payment_types->information = $request->checkout_payment_name.' | '.$request->checkout_payment_number;
				DB::transaction(function () use($payment_types) {
					$payment_types->save();
				});

				return redirect()->route('checkout_confirm', $order_id);
    		} catch(\Exception $e) {
    			return redirect()->back()->withErrors('errors.add_payment');
    		}
    	}
    }

    public function checkout_confirm($order_id)
    {
    	$order = Order::where('order_id', $order_id)->first();
    	$order_details = $order->order_details()->get();

    	return view('checkout/checkout_confirm',compact('order_details'));
    }

    public function checkout_comfirm_done(Request $request, $user_id, $order_id)
    {
    	try {
    		$order = Order::where('order_id', $order_id)->first();
    		$order->status = 1;
    		DB::transaction(function () use($order) {
    			$order->save();
    		});
    		$order = new Order;
	    	$payment_type = new PaymentType;
	    	$payment = new Payment;
	    	DB::transaction(function () use($order, $payment_type, $payment) {
	    		$payment_type->information = "1";
	            $payment_type->save();
	            $payment_type = PaymentType::orderBy('payment_type_id','DESC')->first();
	            $payment->payment_type_id = $payment_type->payment_type_id;
	            $payment->save();
	            $payment = Payment::orderBy('payment_id', 'desc')->first();
	            $order = new Order;
	            $order->total_price = 0;
	            $order->content = 'null';
	            $order->user_id = Auth::user()->id;
	            $order->payment_id = $payment->payment_id;
	            $order->save();
	    	});
    		$counts = Product::all() -> count();
	        $newArrivals = Product::orderBy('products.created_at')
	                    ->paginate(3);
	        $topSells = Product::orderBy('products.top_product')
	                    ->paginate(6);

    		return redirect()->route('welcome')->with(compact('counts', 'newArrivals', 'topSells', 'order'))->with('done_payment', trans('success.done_payment'));
    	} catch(\Exception $e) {
    		return redirect()->back()->withErrors(trans('errors.confirm'));
    	}
    }
}
