<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface OrderRepositoryInterface extends BaseRepositoryInterface
{
    public function getOrder($product_id);

    public function getUserOrder();

    public function history();

    public function minusProduct($order_detail_id);

    public function plusProduct($order_detail_id);

    public function createCart(Request $request, $product_id);

}
