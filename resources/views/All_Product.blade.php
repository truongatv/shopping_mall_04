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
                        <!-- Store Menu -->
                        <!-- Store Menu functionality is initialized in js/app.js -->
                        @include('layouts.side_bar')
                        <!-- END Store Menu -->
                    </aside>
                </div>
                <!-- END Sidebar -->

                <!-- Products -->
                <div class="col-md-8 col-lg-9">
                    <h2 class="site-heading"><strong>{{ $type }}</strong></h2>
                    <hr>
                    <div class="row store-items">
                    @foreach($products as $product)
                        <div class="col-md-4 " data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                            <div class="store-item">
                                <div class="store-item-rating text-warning">
                                    <input id="input-1-xs" name="input-1-xs" class="rating rating-loading" value="{{$product->rate_count}}" data-min="0" data-max="5" data-step="0.5" data-size="xs" data-show-clear="false" data-show-caption="false" data-readonly = "true">
                                </div>
                                <div class="store-item-image">
                                    <a href="{{ route('product_details', $product->product_id) }}">
                                        <img src={{$product->images[0]->link}} alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <div class="col-sm-08 namecut" rel="tooltip" title="{{ $product->name }}">
                                    <a href="{{ route('product_details', $product->product_id) }}"><strong>{{ $product->name }}</strong></a><br>
                                    </div>
                                    <div class="col-sm-04">
                                        <span class="store-item-price themed-color-dark pull-right" >{{ $product->unit_price }}</span>
                                    </div>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div>
                    {{ $products->links() }}
                    </div>
                </div>
                <!-- END Products -->
            </div>
        </div>
    </section>
    @endsection



