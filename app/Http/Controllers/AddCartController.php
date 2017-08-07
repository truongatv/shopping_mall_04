<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;

class AddCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $product_id)
    {
        //
        // $id = $request->input('')
        if(Auth::check()) {
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

                return redirect()->back()->with('add_done', trans('success.add_done', [
                        'id'=>$id ,
                        'name'=> $product->name,
                        ]
                ));
            } catch (\Exception $e)
            {

                return redirect()->back()->with('errors',trans('errors.add_cart'));
            }
        }
        else {
            return redirect('login');
        }
    }

    public function plus_product($order_detail_id)
    {
        try {
            $order_detail = OrderDetail::where('order_detail_id', $order_detail_id)->first();
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id', 'DESC')->first();
            $order->total_price = $order->total_price + $order_detail->unit_price;
            $order_detail->quality = $order_detail->quality + 1;
            DB::transaction(function () use($order_detail, $order) {
                $order->save();
                $order_detail->save();
            });
        
            return redirect()->back();    
        } catch(\Exception $e) {
            return redirect()->back()->withErrors(trans('errors.plus_product'));
        }   
    }

    public function minus_product($order_detail_id)
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

            return redirect()->back();
        }

        if($order_detail->quality == 0) {
            return redirect()->back()->with('minus_error', trans('errors.minus_product'));
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
