<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Payment;
use App\Models\PaymentType;
use App\Contracts\OrderRepositoryInterface;
use App\Contracts\ProductRepositoryInterface;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $productRepository;
    protected $orderRepository;

    public function __construct(ProductRepositoryInterface $productRepository,
        OrderRepositoryInterface $orderRepository)
    {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
    }

    public function getProductDetails(Request $request)
    {
        $comments = $this->productRepository->getComments($request->product_id);
        $product = $this->productRepository->getProducts($request->product_id);
        $order = $this->orderRepository->getOrder($request->product_id);
        $group = "";
        $name = "";

        return view('product_details', compact(
            'product',
            'order',
            'comments',
            'group',
            'name'
            )
        );
    }

    public function getNewArrival(){
        $products = $this->productRepository->newArrivals()->paginate(6);
        $group = $name = "";
        if (!Auth::check()) {
            return view('All_Product')->with(compact(
                'products',
                'group',
                'name'
                )
            );
        }
        else {
            $order = $this->orderRepository->getUserOrder();

            return view('All_Product')->with(compact(
                'products',
                'order',
                'group',
                'name'
                )
            );

        }
    }

    public function getTopSell(){
        $products = $this->productRepository->topSells()->paginate(6);
        $group = $name = "";
        if (!Auth::check()) {
            return view('All_Product')->with(compact(
                'products',
                'group',
                'name'
                )
            );
        }
        else {
            $order = $this->orderRepository->getUserOrder();

            return view('All_Product')->with(compact(
                'products',
                'order',
                'group',
                'name'
                )
            );

        }
    }

    public function getCategoryProduct(Request $request){
        $products = $this->productRepository->categoryProduct($request->group, $request->name);
        $group = $name = "";
        if (!Auth::check()) {
            return view('All_Product')->with(compact(
                'products',
                'group',
                'name'
                )
            );
        }
        else {
            $order = $this->orderRepository->getUserOrder();

            return view('All_Product')->with(compact(
                'products',
                'order',
                'group',
                'name'
                )
            );
        }
    }

    public function search(Request $request){
        $name = $this->productRepository->search($request);
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
