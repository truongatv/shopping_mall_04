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
        $products = DB::table('products')
                    ->join('images','products.product_id','=','images.product_id')
                    ->paginate(6);
        $type = tran('title.All_Products');
        return view('All_Product')->with(compact('products','type'));
    }
    public function newArrival()
    {
        $products = DB::table('products')
                    ->join('images','products.product_id','=','images.product_id')
                    ->orderBy('products.created_at')
                    ->paginate(6);
        $type = tran('title.New_Arrival');
        return view('All_Product')->with(compact('products','type'));
    }
    public function topSell()
    {
        $products = DB::table('products')
                    ->join('images','products.product_id','=','images.product_id')
                    ->orderBy('products.top_product')
                    ->paginate(6);
        $type = tran('title.Top_Sell');
        return view('All_Product')->with(compact('products','type'));
    }
    public function test($id)
    {
        return view('group_category')->with(compact('id'));
    }
    public function typeCategory($group,$name)
    {
        $products = Product::whereIn('category_id', function($query) use ($name) {
            $query->select('category_id')->from('categories')->where('name', $name)->get();
        })->paginate(6);
        $type = $name;

        return view('All_Product')->with(compact('products','type'));
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
