<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDetails($product_id)
    {
        $product = Product::findOrFail($product_id);
        $order = Order::orderBy('order_id','desc')->first();

        return view('product_details', compact('product','order'));
    }

}
