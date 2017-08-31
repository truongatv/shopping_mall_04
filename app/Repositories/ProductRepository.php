<?php

namespace App\Repositories;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Payment;
use App\Models\PaymentType;
use App\Contracts\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function productAll(){
        $products = Product::paginate(6);

        return $products;
    }

    public function productCount(){
        $counts = Product::all() -> count();

        return $counts;
    }

    public function getComments($product_id)
    {
        $comments = Comment::where('product_id', $product_id)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return $comments;
    }

    public function getProducts($product_id){
        $product = Product::findOrFail($product_id);

        return $product;
    }

    public function getOrder($product_id){
        $order = Order::orderBy('order_id','desc')->first();

        return $order;
    }

    public function newArrivals(){
        $newArrivals = Product::orderBy('products.created_at');

        return $newArrivals;
    }

    public function topSells(){
        $topSells = Product::orderBy('products.top_product');

        return $topSells;
    }

    public function categoryProduct($group, $name){
        $products = Product::whereIn('category_id',  function($query) use ($name) {
            $query->select('category_id')->from('categories')->where('name',  $name)->get();
        })->paginate(6);

        return $products;
    }

    public function search(Request $request)
    {
        $name = $request->input('ecom-search');

        return $name;
    }
}
