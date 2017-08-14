<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;
use App\Models\Comment;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDetails($product_id)
    {
        $comments = Comment::where('product_id', $product_id)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        $product = Product::findOrFail($product_id);
        $order = Order::orderBy('order_id','desc')->first();
        $group = "";
        $name = "";

        return view('product_details', compact('product', 'order','comments', 'group', 'name'));
    }

}
