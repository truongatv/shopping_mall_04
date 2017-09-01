<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Product;

class CheckStatusProduct
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $product = Product::where('product_id', $request->product_id)->first();
        if($product->status == 0) {
            return response(trans('errors.not_exist'), 404);
        }

        return $next($request);
    }
}
