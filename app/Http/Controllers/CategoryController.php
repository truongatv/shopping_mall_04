<?php
namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\payment;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(6);
        $type = trans('title.All_Products');
        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('All_Product')->with(compact('products', 'type', 'order'));
        }
    }

    public function newArrival()
    {
        $products = Product::orderBy('products.created_at')->paginate(6);
        $type = trans('title.New_Arrival');

        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('All_Product')->with(compact('products', 'type', 'order'));
        }
    }
    public function topSell()
    {
        $type = trans('title.Top_Sell');
        $products = Product::orderBy('products.top_product')->paginate(6);

        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('All_Product')->with(compact('products', 'type', 'order'));
        }
    }
    public function test($id)
    {
        return view('group_category')->with(compact('id'));
    }
    public function typeCategory($group, $name)
    {
        $products = Product::whereIn('category_id',  function($query) use ($name) {
            $query->select('category_id')->from('categories')->where('name',  $name)->get();
        })->paginate(6);
        $type = $name;

        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('All_Product')->with(compact('products', 'type', 'order'));
        }
    }
    public function search(Request $request)
    {
        $name = $request->input('ecom-search');
        $products = Product::where('name',  $name)->paginate(6);
        if (count($products) == config('settings.error')) {
            $products = Product::whereIn('shop_product_id',  function($query) use ($name) {
                $query->select('shop_product_id')->from('shop_products')->where('shop_product_name',  $name)->get();
            })->paginate(6);
        }
        $type = $name;

        if (!Auth::check()) {
            return view('search_product')->with(compact('products',  'type'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('search_product')->with(compact('products', 'type', 'order'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
