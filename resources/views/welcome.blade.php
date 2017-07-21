@extends('layouts.master')
@section('text-center')
	<section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>Explore over 5.000 products!</strong></h1>
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
                            <ul class="store-menu">
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.beauty') }}</a>
                                    <ul>
                                        <li><a href="#">{{ trans('title.cosmetics') }}</a></li>
                                        <li><a href="#">{{ trans('title.men') }}</a></li>
                                        <li><a href="#">{{ trans('title.vitamin') }}</a></li>
                                        <li><a href="#">{{ trans('title.health') }}</a></li>
                                        <li><a href="#">{{ trans('title.more Beauty') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.food_drink') }}</a>
                                    <ul>
                                        <li><a href="#">{{ trans('title.rice_noodles') }}</a></li>
                                        <li><a href="#">{{ trans('title.spice_seasoning') }}</a></li>
                                        <li><a href="#">{{ trans('title.dried_canned_recooked') }}</a></li>
                                        <li><a href="#">{{ trans('title.sweets_snack') }}</a></li>
                                        <li><a href="#">{{ trans('title.tea_coffee') }}</a></li>
                                        <li><a href="#">{{ trans('title.sake') }}</a></li>
                                        <li><a href="#">{{ trans('title.more_food') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.fashion') }}</a>
                                    <ul>
                                        <li><a href="#">{{ trans('title.women_fashion') }}</a></li>
                                        <li><a href="#">{{ trans('title.men_fashion') }}</a></li>
                                        <li><a href="#">{{ trans('title.kid_fashion') }}</a></li>
                                        <li><a href="#">{{ trans('title.baby_fashion') }}</a></li>
                                        <li><a href="#">{{ trans('title.luggage') }}</a></li>
                                        <li><a href="#">{{ trans('title.more_fashion') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.electronic') }}</a>
                                    <ul>
                                        <li><a href="#">{{ trans('title.gaming') }}</a></li>
                                        <li><a href="#">{{ trans('title.camera') }}</a></li>
                                        <li><a href="#">{{ trans('title.home') }}</a></li>
                                        <li><a href="#">{{ trans('title.accessories') }}</a></li>
                                        <li><a href="#">{{ trans('title.more_electronic') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.Home_&_Living') }}</a>
                                    <ul>
                                        <li><a href="#">{{ trans('title.Home_Decor') }}</a></li>
                                        <li><a href="#">{{ trans('title.Baby_and_Kids') }}</a></li>
                                        <li><a href="#">{{ trans('title.Kitchen_&_Dining') }}</a></li>
                                        <li><a href="#">{{ trans('title.Daily_Necessities') }}</a></li>
                                        <li><a href="#">{{ trans('title.Books/Magazines_&_DVD') }}</a></li>
                                        <li><a href="#">{{ trans('title.Office_Supplies') }}</a></li>
                                        <li><a href="#">{{ trans('title.Educational_Supplies') }}</a></li>
                                        <li><a href="#">{{ trans('title.Pet_Supplies') }}</a></li>
                                        <li><a href="#">{{ trans('title.More_Home_&_Living') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.Hobby_&_Crafts') }}</a>
                                    <ul>
                                        <li><a href="#">{{ trans('title.Stationery') }}</a></li>
                                        <li><a href="#">{{ trans('title.Craft_Tools') }}</a></li>
                                        <li><a href="#">{{ trans('title.Plastic_Models_&_Figures') }}</a></li>
                                        <li><a href="#">{{ trans('title.DIY_Tools') }}</a></li>
                                        <li><a href="#">{{ trans('title.Cars_&_Motorcycles') }}</a></li>
                                        <li><a href="#">{{ trans('title.More_Hobby_&_Crafts') }}</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!-- END Store Menu -->

                        <!-- Shopping Cart -->
                        <div class="sidebar-block">
                            <div class="row">
                                <div class="col-xs-6 push-bit">
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
                    <h2 class="site-heading"><strong>New</strong> Arrivals</h2>
                    <hr>
                    <div class="row store-items">
                        <div class="col-md-4 " data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo26.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                                    <a href="ecom_product.html"><strong>Sport Shoes</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo29.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                                    <a href="ecom_product.html"><strong>Jacket</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo27.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 299</span>
                                    <a href="ecom_product.html"><strong>Watch</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <a href="{{ url('category/TopSell')}}"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- END New Arrivals -->
                    <h2 class="site-heading"><strong>Best</strong> Sellers</h2>
                    <hr>
                    <div class="row store-items">
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo25.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 109</span>
                                    <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo28.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 59</span>
                                    <a href="ecom_product.html"><strong>Gloves</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo30.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                                    <a href="ecom_product.html"><strong>Jacket</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo32.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                                    <a href="ecom_product.html"><strong>Headset</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo35.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 1.599</span>
                                    <a href="ecom_product.html"><strong>Laptop</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="store-item-image">
                                    <a href="ecom_product.html">
                                        <img src="img/placeholders/photos/photo33.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">$ 149</span>
                                    <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="#" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <a href="{{url('category/NewArrival')}}"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- END Best Sellers -->
                </div>
                <!-- END Products -->
            </div>
        </div>
    </section>
    @endsection


