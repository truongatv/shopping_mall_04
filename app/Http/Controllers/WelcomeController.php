<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $counts = Product::all() -> count();
        $newArrivals = Product::orderBy('products.created_at')
                    ->paginate(3);
        $topSells = Product::orderBy('products.top_product')
                    ->paginate(6);
        return view('welcome', compact('counts', 'newArrivals', 'topSells'));
    }

}
