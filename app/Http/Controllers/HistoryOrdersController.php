<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class HistoryOrdersController extends Controller
{
    //
    public function showHistory(){

    	$user_id = Auth::user()->id;
    	$order = Order::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();
    	$topSells = Product::orderBy('products.top_product')->paginate(3);
    	
    	return view('history_orders', compact('order', 'topSells'));
    }
}
