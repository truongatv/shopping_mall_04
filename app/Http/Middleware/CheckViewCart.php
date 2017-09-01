<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Order;
use App\Models\User;
use Auth;

class CheckViewCart
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
        $order = Order::where('order_id', $request->id)->first();
        if($order->status == 0) {
            return response(trans('errors.order_not_done'));
        }

        return $next($request);
    }
}
