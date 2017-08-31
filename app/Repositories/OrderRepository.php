<?php

namespace App\Repositories;

use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentType;
use App\Contracts\OrderRepositoryInterface;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{

    public function createCart(Request $request, $product_id)
    {

        $id = $request->input('ecom-addcart-quality');
            try
            {
                $product = Product::where('product_id', $product_id)->first();
                $order  = Order::where('user_id', Auth::user()->id)->orderBy('order_id', 'DESC')->first();
                $order_detail = new OrderDetail;
                $order_detail->content = 'content';
                $order_detail->quality = $id;
                $order_detail->unit_price = $product->unit_price;
                $order_detail->order_id = $order->order_id;
                $order_detail->product_id = $product_id;
                $order->total_price = $order->total_price + ($order_detail->unit_price * $id);
                DB::transaction(function () use ($order,$order_detail) {
                    $order_detail->save();
                    $order->save();
                });
                echo("<script>console.log('".$order."');</script>");

                return true;
            } catch (\Exception $e){
            return false;
        }
    }

    public function plusProduct($order_detail_id)
    {
            $order_detail = OrderDetail::where('order_detail_id', $order_detail_id)->first();
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id', 'DESC')->first();
            $order->total_price = $order->total_price + $order_detail->unit_price;
            $order_detail->quality = $order_detail->quality + 1;
            DB::transaction(function () use($order_detail, $order) {
                $order->save();
                $order_detail->save();
            });
    }

    public function minusProduct($order_detail_id)
    {
        $order_detail = OrderDetail::where('order_detail_id', $order_detail_id)->first();
        $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id', 'DESC')->first();
        if($order_detail->quality > 0) {
            $order_detail->quality -= 1;
            $order->total_price = $order->total_price - $order_detail->unit_price;
            DB::transaction(function () use($order_detail, $order) {
                $order_detail->save();
                $order->save();
            });
            return true;
        }
        if($order_detail->quality == 0) {
            return false;
        }
    }

    public function getOrder($product_id){

        $order = Order::orderBy('order_id','desc')->first();

        return $order;
    }

    public function getUserOrder()
    {
        $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == 0 || $order->status == 1) {
                DB::transaction(function () {
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
                });
            }
        return $order;
    }
    public function history(){

        $user_id = Auth::user()->id;
        $order = Order::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();

        return $order;
    }
}
