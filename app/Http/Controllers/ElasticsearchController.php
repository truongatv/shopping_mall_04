<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Payment;
use App\Models\PaymentType;
use App\Contracts\OrderRepositoryInterface;
use App\Contracts\ProductRepositoryInterface;

class ElasticsearchController extends Controller
{
	protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository,
        OrderRepositoryInterface $orderRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function elasticSearch(Request $request)
    {
    	$name = $this->productRepository->search($request);
    	
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
                                    $query->select('category_id')->from('categories')->where('name', 'LIKE',"{$beauty} & %")
                                                    ->orWhere('name', 'LIKE',"{$drink} & %")
                                                    ->orWhere('name', 'name', 'LIKE',"{$game} & %")
                                                    ->orWhere('name', 'name', 'LIKE',"{$electronic} & %")
                                                    ->orWhere('name', 'name', 'LIKE',"{$home} & %")
                                                    ->orWhere('name', 'name', 'LIKE',"{$hobby} & %")->get();
                                })
                                ->where('name', 'LIKE', "%$type%")
                                ->where('unit_price', '>', $min)
                                ->where('unit_price', '<', $max)
                                ->paginate(6);
                }
                else {
                    $products = Product::where('name', 'LIKE', "%$type%")
                                ->where('unit_price', '>', $min)
                                ->where('unit_price', '<', $max)
                                ->paginate(6);
                }
            }
            else {
                if($beauty != null || $drink != null || $game != null || $electronic != null || $home != null || $home != null || $hobby != null){
                    $products = Product::whereIn('category_id',  function($query) use ($beauty, $drink, $game, $electronic, $home, $hobby) {
                                    $query->select('category_id')->from('categories')->where('name', 'LIKE',"{$beauty} & %")
                                                    ->orWhere('name', 'LIKE',"{$drink} & %")
                                                    ->orWhere('name', 'LIKE',"{$game} & %")
                                                    ->orWhere('name', 'LIKE',"{$electronic} & %")
                                                    ->orWhere('name', 'LIKE',"{$home} & %")
                                                    ->orWhere('name', 'LIKE',"{$hobby} & %")->get();
                                })
                                ->where('name', 'LIKE', "%$type%")
                                ->where('unit_price', '>', $min)
                                ->where('unit_price', '<', $max)
                                ->where('rate_count', $star)
                                ->paginate(6);
                }
                else {
                    $products = Product::where('name', 'LIKE', "%$type%")
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
        if(!$name){
        	$products = Product::where('product_id', '>', 0)->paginate(6);
        }
        else {
        	$products = Product::search($name)
    				->where('name', $name)
    				->paginate(6);
	    	if($products->total() == 0) {
	    		$products = Product::search($name)
	    					->where('information', $name)
	    					->paginate(6);
	    	}
        }
        $type = $name;
        $group = $name = "";
        if (!Auth::check()) {
            return view('search_product')->with(compact(
                'type',
                'products',
                'group',
                'name'
                )
            );
        }
        else {
            $order = $this->orderRepository->getUserOrder();

            return view('search_product')->with(compact(
                'type',
                'products',
                'order',
                'group',
                'name'
                )
            );
        }
    }
}
