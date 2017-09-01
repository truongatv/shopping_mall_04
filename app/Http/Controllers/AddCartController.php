<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use App\Contracts\OrderRepositoryInterface;

class AddCartController extends Controller
{

    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
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
        if(Auth::check()) {
            $id = $request->input('ecom-addcart-quality');
            $product = Product::where('product_id', $product_id)->first();
            // check if quanity in stock not enough !
            if($id > $product->total_quanity) {
                return redirect()->back()->with('errors', trans('errors.over_quanity'));
            }
            if($product->status == 0) {
                return redirect()->back()->with('errors', trans('errors.not_exist'));
            }
            try
            {
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
        $out = $this->orderRepository->plusProduct($order_detail_id);
        if($out[0] == 1) {
            return redirect()->back();
        }
        else {
            return redirect()->back()->with('plus_error', trans($out[1]));
        }
    }

    public function minus_product($order_detail_id)
    {
        if($this->orderRepository->minusProduct($order_detail_id)) {
            return redirect()->back();
        }
        else {
            return redirect()->back()->with('minus_error', trans('errors.minus_product'));
        }
    }

    public function delete_product($order_detail_id)
    {
        DB::transaction(function() use($order_detail_id) {
            $order_detail = OrderDetail::find($order_detail_id);
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id', 'DESC')->first();
            $order->total_price -= $order_detail->quality * $order_detail->unit_price;
            $order->save();
            $order_detail->delete();
        });

        return redirect()->back();
    }
}
