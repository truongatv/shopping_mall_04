@extends('layouts.master')
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>Explore over {{$products->total()}} products!</strong></h1>
        </div>
    </section>
    @endsection
@section('content')
    <section class="site-content site-section">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-4 col-lg-3">
                    <aside class="sidebar site-block">
                        <!-- Store Menu -->
                        <!-- Store Menu functionality is initialized in js/app.js -->
                        <div class="sidebar-block">
                            <ul class="store-menu" >
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.beauty') }}</a>
                                    <ul>
                                        <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.cosmetics') }}</a></li>
                                        <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.men') }}</a></li>
                                        <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.vitamin') }}</a></li>
                                        <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.health') }}</a></li>
                                        <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.more Beauty') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.food_drink') }}</a>
                                    <ul>
                                        <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.rice_noodles') }}</a></li>
                                        <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.spice_seasoning') }}</a></li>
                                        <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.dried_canned_recooked') }}</a></li>
                                        <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.sweets_snack') }}</a></li>
                                        <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.tea_coffee') }}</a></li>
                                        <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.sake') }}</a></li>
                                        <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.more_food') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.fashion') }}</a>
                                    <ul>
                                        <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.women_fashion') }}</a></li>
                                        <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.men_fashion') }}</a></li>
                                        <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.kid_fashion') }}</a></li>
                                        <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.baby_fashion') }}</a></li>
                                        <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.luggage') }}</a></li>
                                        <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.more_fashion') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.electronic') }}</a>
                                    <ul>
                                        <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.gaming') }}</a></li>
                                        <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.camera') }}</a></li>
                                        <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.home') }}</a></li>
                                        <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.accessories') }}</a></li>
                                        <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.more_electronic') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.Home_&_Living') }}</a>
                                    <ul>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Home_Decor') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Baby_and_Kids') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Kitchen_&_Dining') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Daily_Necessities') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Books/Magazines_&_DVD') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Office_Supplies') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Educational_Supplies') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Pet_Supplies') }}</a></li>
                                        <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.More_Home_&_Living') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.Hobby_&_Crafts') }}</a>
                                    <ul>
                                        <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Stationery') }}</a></li>
                                        <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Craft_Tools') }}</a></li>
                                        <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Plastic_Models_&_Figures') }}</a></li>
                                        <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.DIY_Tools') }}</a></li>
                                        <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Cars_&_Motorcycles') }}</a></li>
                                        <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.More_Hobby_&_Crafts') }}</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!-- END Store Menu -->

                        <!-- Shopping Cart -->
                        <div class="sidebar-block">
                            <div class="row">
                                <div class="col-xs-6">
                                    <span class="h3">$ 750<br><small><em>3 Items</em></small></span>
                                </div>
                                <div class="col-xs-6">
                                    <a href="ecom_shopping_cart.html" class="btn btn-sm btn-block btn-success">VIEW CART</a>
                                    <a href="ecom_checkout.html" class="btn btn-sm btn-block btn-danger">CHECKOUT</a>
                                </div>
                            </div>
                        </div>
                        <!-- END Shopping Cart -->
                    </aside>
                </div>
                <!-- END Sidebar -->

                <!-- Products -->
                <div class="col-md-8 col-lg-9">
                    <h2 class="site-heading"><strong>{{ $type }}</strong></h2>
                    <hr>
                    <div class="row store-items">
                    @foreach($products as $product)
                        <div class="col-md-6 " data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <input id="input-1" name="input-1" value="{{$product->rate_count}} " class="rating rating-loading" data-readonly = "true">
                                </div>
                                <div class="store-item-image">
                                    <a href="{{ route('product_details', $product->product_id) }}">
                                        <img src={{$product->link}} alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">{{ $product->unit_price }}</span>
                                    <a href="ecom_product.html"><strong>{{$product->name}}</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $products->links() }}
                    </div>
                </div>
                <!-- END Products -->
            </div>
        </div>
    </section>
    @endsection



