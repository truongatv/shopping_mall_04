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
                                    <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Clothes</a>
                                    <ul>
                                        <li><a href="javascript:void(0)">Women</a></li>
                                        <li><a href="javascript:void(0)">Men</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Electronics</a>
                                    <ul>
                                        <li><a href="javascript:void(0)">PCs</a></li>
                                        <li><a href="javascript:void(0)">Laptops</a></li>
                                        <li class="open">
                                            <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Tablets</a>
                                            <ul>
                                                <li><a href="javascript:void(0)">Android</a></li>
                                                <li><a href="javascript:void(0)">iOS</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Headsets</a></li>
                                        <li><a href="javascript:void(0)">Mobile Phones</a></li>
                                        <li><a href="javascript:void(0)">Mp3 Players</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Games</a>
                                    <ul>
                                        <li><a href="javascript:void(0)">PC</a></li>
                                        <li><a href="javascript:void(0)">PS4</a></li>
                                        <li><a href="javascript:void(0)">Xbox One</a></li>
                                        <li><a href="javascript:void(0)">Wii U</a></li>
                                        <li><a href="javascript:void(0)">PS Vita</a></li>
                                        <li><a href="javascript:void(0)">3Ds</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Sports</a></li>
                                <li><a href="javascript:void(0)">Kids</a></li>
                                <li><a href="javascript:void(0)">Home</a></li>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <a href="ecom_product_list.html"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
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
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <a href="ecom_product_list.html"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- END Best Sellers -->
                </div>
                <!-- END Products -->
            </div>
        </div>
    </section>
    @endsection



