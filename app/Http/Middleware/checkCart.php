<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Order;

class checkCart
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
        $order = Order::where('order_id', $request->order_id)->first();;
        if($order->total_price == 0){
            return redirect()->back()->with('error', trans('errors.checkout'));
        }

        return $next($request);
    }
}
