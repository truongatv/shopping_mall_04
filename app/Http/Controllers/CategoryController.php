<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;

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

        return view('All_Product')->with(compact('products', 'type'));
    }
    public function newArrival()
    {
        $products = Product::orderBy('products.created_at')->paginate(6);
        $type = trans('title.New_Arrival');

        return view('All_Product')->with(compact('products', 'type'));
    }
    public function topSell()
    {
        $type = trans('title.Top_Sell');
        $products = Product::orderBy('products.top_product')->paginate(6);

        return view('All_Product')->with(compact('products', 'type'));
    }
    public function test($id)
    {
        return view('group_category')->with(compact('id'));
    }
    public function typeCategory($group, $name)
    {
        $products = Product::whereIn('category_id', function($query) use ($name) {
            $query->select('category_id')->from('categories')->where('name', $name)->get();
        })->paginate(6);
        $type = $name;

        return view('All_Product')->with(compact('products','type'));
    }
    public function search(Request $request)
    {
        $name = $request->input('ecom-search');
        $products = Product::where('name', $name)->paginate(6);
        if (count($products) == 0) {
            $products = Product::whereIn('shop_product_id', function($query) use ($name) {
                $query->select('shop_product_id')->from('shop_products')->where('shop_product_name', $name)->get();
            })->paginate(6);
        }
        $type = $name;

        return view('search_product')->with(compact('products', 'type'));
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
    public function update(Request $request, $id)
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
