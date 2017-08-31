<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Contracts\ProductRepositoryInterface;
use App\Contracts\OrderRepositoryInterface;

class WelcomeController extends Controller
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

    public function index()
    {
        $topSells = $this->productRepository->topSells()->paginate(3);
        $newArrivals = $this->productRepository->newArrivals()->paginate(3);
        $counts = $this->productRepository->productCount();
        if (Auth::check()) {
            $order = $this->orderRepository->getUserOrder();
            $group = "";
            $name = "";

            return view('welcome',  compact(
                'counts',
                'newArrivals',
                'topSells',
                'order',
                'group',
                'name'
                )
            );
        }
        else {
            $group = "";
            $name = "";

            return view('welcome', compact(
                'counts',
                'newArrivals',
                'topSells',
                'group',
                'name'
                )
            );
        }
    }

}
