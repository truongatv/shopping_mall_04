<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Product;
use App\Models\User;

class RateController extends Controller
{
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $inputs = $request->only('product_id', 'point', 'user_id');
            $rating = Rate::where('product_id', $inputs['product_id'])->where('user_id', $inputs['user_id'])->first();;
            if ($rating) {
                $product =Product::findOrFail($inputs['product_id']);
                $oldpoint = $rating['point'];
                $product['rate_count'] = ( $product['sum_point'] * $product['rate_count'] - $oldpoint + $inputs['point'] ) / $product['sum_point'];
                $product->save();
                Rate::where('product_id', $inputs['product_id'])
                    ->where('user_id', $inputs['user_id'])
                    ->update($inputs);
            } else {
                $sum_rate = Rate::where('product_id', $inputs['product_id'])->get()->count();
                $product =Product::findOrFail($inputs['product_id']);
                $product['rate_count'] = ( $sum_rate * $product['rate_count'] + $inputs['point'] ) / ( $sum_rate + 1 );
                $product['sum_point'] = $sum_rate + 1;
                $product->save();
                $rate = new Rate;
                $rate['user_id'] = $inputs['user_id'];
                $rate['product_id'] = $inputs['product_id'];
                $rate['point'] = $inputs['point'];
                $rate->save();
            }
        }
    }
}
