<?php
namespace App\Http\Controllers;

use Auth;
use Log;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentType;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::orderBy('order_id', 'desc')->first();
        $products = Product::paginate(6);
        $type = trans('title.All_Products');
        $group = $name = "";
        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type', 'group', 'name'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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
            return view('All_Product')->with(compact('products', 'type', 'order','group', 'name'));
        }
    }

    public function newArrival()
    {
        $order = Order::orderBy('order_id', 'desc')->first();
        $products = Product::orderBy('products.created_at')->paginate(6);
        $type = trans('title.New_Arrival');
        $group = $name = "";

        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type', 'group', 'name'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('All_Product')->with(compact('products', 'type', 'order', 'group', 'name'));
        }
    }
    public function topSell()
    {
        $order = Order::orderBy('order_id', 'desc')->first();
        $type = trans('title.Top_Sell');
        $products = Product::orderBy('products.top_product')->paginate(6);
        $group = $name = "";

        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type', 'group', 'name'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('All_Product')->with(compact('products', 'type', 'order', 'group', 'name'));
        }
    }
    public function test($id)
    {
        $order = Order::orderBy('order_id', 'desc')->first();
        return view('group_category')->with(compact('id', 'oder'));
    }

    public function typeCategory($group, $name)
    {
        $products = Product::whereIn('category_id',  function($query) use ($name) {
            $query->select('category_id')->from('categories')->where('name',  $name)->get();
        })->paginate(6);
        $type = $name;

        if (!Auth::check()) {
            return view('All_Product')->with(compact('products',  'type', 'group', 'name'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('All_Product')->with(compact('products', 'type', 'order', 'group', 'name'));
        }
    }
    public function search(Request $request)
    {
        $order = Order::orderBy('order_id', 'desc')->first();
        $name = $request->input('ecom-search');

        return redirect()->route('search_name',$name);
    }

    public function searchName(Request $request, $name)
    {
        if($request->ajax()) {
            $type = $request['keyword'];
            $min = $request['min'];
            $max = $request['max'];
            $star = $request['star'];
            $beauty = $request['beauty'];
            $drink = $request['drink'];
            $game = $request['game'];
            $electronic = $request['electronic'];
            $home = $request['home'];
            $hobby = $request['hobby'];
            if($star == 0) {
                if($beauty != null || $drink != null || $game != null || $electronic != null || $home != null || $home != null || $hobby != null){
                    $products = Product::whereIn('category_id',  function($query) use ($beauty, $drink, $game, $electronic, $home, $hobby) {
                                    $query->select('category_id')->from('categories')->where('name',  $beauty)
                                                    ->orWhere('name', $drink)
                                                    ->orWhere('name', $game)
                                                    ->orWhere('name', $electronic)
                                                    ->orWhere('name', $home)
                                                    ->orWhere('name', $hobby)->get();
                                })
                                ->where('name', $type)
                                ->where('unit_price', '>', $min)
                                ->where('unit_price', '<', $max)
                                ->paginate(6);
                }
                else {
                    $products = Product::where('name', $type)
                                ->where('unit_price', '>', $min)
                                ->where('unit_price', '<', $max)
                                ->paginate(6);
                }
            }
            else {
                if($beauty != null || $drink != null || $game != null || $electronic != null || $home != null || $home != null || $hobby != null){
                    $products = Product::whereIn('category_id',  function($query) use ($beauty, $drink, $game, $electronic, $home, $hobby) {
                                    $query->select('category_id')->from('categories')->where('name',  $beauty)
                                                    ->orWhere('name', $drink)
                                                    ->orWhere('name', $game)
                                                    ->orWhere('name', $electronic)
                                                    ->orWhere('name', $home)
                                                    ->orWhere('name', $hobby)->get();
                                })
                                ->where('name', $type)
                                ->where('unit_price', '>', $min)
                                ->where('unit_price', '<', $max)
                                ->where('rate_count', $star)
                                ->paginate(6);
                }
                else {
                    $products = Product::where('name', $type)
                                ->where('unit_price', '>', $min)
                                ->where('unit_price', '<', $max)
                                ->where('rate_count', $star)
                                ->paginate(6);
                }
            }
            $htmlFilter = view('search.filter', compact('type', 'products'))->render();
            $result = [
                    'success' => true,
                    'search_result' => $htmlFilter
            ];

            return response()->json($result);
        }
       $products = Product::where('name',  $name)->paginate(6);
        if (count($products) == config('settings.error')) {
            $products = Product::whereIn('shop_product_id',  function($query) use ($name) {
                $query->select('shop_product_id')->from('shop_products')->where('shop_product_name',  $name)->get();
            })->paginate(6);
        }
        $type = $name;
        $group = $name = "";

        if (!Auth::check()) {
            return view('search_product')->with(compact('products',  'type', 'group', 'name'));
        }
        else {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('order_id',  'DESC')->first();
            if (count($order) == config('settings.done') || $order->status == config('settings.error')) {
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

            return view('search_product')->with(compact('products', 'type', 'order', 'group', 'name'));
        }
    }

    public function searchFilter(Request $request)
    {
        if($request->ajax()) {
            $range = $request['range'];
            // $key = $request['keyword'];
            $products = Product::where('name','nemo unde')->paginate(6);
                                // ->where('unit_price','<',10)
                                // ->paginate(6);
            $htmlFilter = view('search.filter', compact('products'));
            $result = [
                    'success' => true,
                    // 'keyword' => key,
                    'search_result' => $htmlFilter
            ];

            return response()->json($result);
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
