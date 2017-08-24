@extends('layouts.master')
@section('text-center')
	<section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>Explore over {{ $products->total() }} products!</strong></h1>
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
                                <!-- Refine Search -->
                                @include('layouts.side_bar_search')
                                <!-- END Refine Search -->
                                <!-- Shopping Cart -->
                            </aside>
                        </div>
                        <!-- END Sidebar -->

                <div class="col-md-8 col-lg-9" id="search_content">
                    <h2 class="site-heading" id="product_name"><strong>{{ $type }}</strong></h2>
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
                                        {{ Html::image(($product->images[0]->hasImage()) ? '/assets/uploads/' . $product->images[0]->link : $product->images[0]->link, trans('title.this-is-image'), [
                                            'class' => 'img-responsive',
                                        ]) }}
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
                        <!-- END Product Details -->
            </div>
        </div>
    </section>
    @endsection



