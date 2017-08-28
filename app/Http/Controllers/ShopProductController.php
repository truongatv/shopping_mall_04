<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentType;

class ShopProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show_product($id)
    {
        $counts = Product::where('shop_product_id', $id) -> count();
        $newArrivals = Product::where('shop_product_id', $id)
                    ->orderBy('products.created_at')
                    ->paginate(6);
        $topSells = Product::where('shop_product_id', $id)
                    ->orderBy('products.top_product')
                    ->paginate(12);
        if (Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == 0 || $order->status == 1) {
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
            $group = "";
            $name = "";

            return view('product_shop',  compact('counts',  'newArrivals',  'topSells', 'order', 'group', 'name'));
        }else {
            $group = "";
            $name = "";

            return view('product_shop', compact('counts', 'newArrivals', 'topSells', 'group', 'name'));
        }
    }
}
