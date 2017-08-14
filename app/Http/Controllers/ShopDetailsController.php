<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShopProduct;

class ShopDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDetails($shop_product_id)
    {
        $shop_product = ShopProduct::findOrFail($shop_product_id);
        $group = "";
        $name = "";

        return view('shop_details', compact('shop_product', 'group', 'name'));
    }

}
