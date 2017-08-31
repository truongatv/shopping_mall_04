<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use App\Contracts\OrderRepositoryInterface;

class AddCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $product_id)
    {
        if(Auth::check()) {
            $create = $this->orderRepository->createCart($request, $product_id);
            if($create) {
                return redirect()->back()->with('add_done', trans('success.add_done')
                );
            }
            else{
                return redirect()->back()->with('errors',trans('errors.add_cart'));
            }
        }
        else{
            return redirect('login');
        }
    }

    public function plus_product($order_detail_id)
    {
        try {
        $this->orderRepository->plusProduct($order_detail_id);
            return redirect()->back();
        } catch(\Exception $e) {
            return redirect()->back()->withErrors(trans('errors.plus_product'));
        }
    }

    public function minus_product($order_detail_id)
    {
        $minus = $this->orderRepository->minusProduct($order_detail_id);
        if ($minus) {
            return redirect()->back();
        }
        else{
            return redirect()->back()->with('minus_error', trans('errors.minus_product'));
        }
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
