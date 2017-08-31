<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Contracts\OrderRepositoryInterface;
use App\Contracts\ProductRepositoryInterface;

class HistoryOrdersController extends Controller
{
    protected $orderRepository;
    protected $productRepository;

    public function __construct(OrderRepositoryInterface $orderRepository,
        ProductRepositoryInterface $productRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
    }

    public function showHistory(){

    	$order = $this->orderRepository->history();
        $topSells = $this->productRepository->topSells();

    	return view('history_orders', compact(
            'order',
            'topSells'
            )
        );
    }
}
