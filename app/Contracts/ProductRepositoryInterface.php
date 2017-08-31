<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    public function productAll();

    public function productCount();

    public function getComments($product_id);

    public function getProducts($product_id);

    public function newArrivals();

    public function topSells();

    public function categoryProduct($group, $name);

    public function search(Request $request);


}
