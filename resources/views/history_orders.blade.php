@extends('layouts.master')
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><i class="fa fa-shopping-cart"></i> <strong>History Orders</strong></h1>
        </div>
    </section>
    @endsection
@section('content')
    <section class="site-content site-section">
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center">ID order</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-right">Product</th>
                                    <th class="text-right">Price</th>
                                    <th class="text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $order as $order )
                                <tr>
                                    <td style="width: 200px;">
                                        <a href="{{ route('view_cart_id', $order->order_id) }}">{{ $order->order_id }}</a>
                                    </td>
                                    <td style="width: 200px;">
                                        {{ $order->updated_at }}
                                    </td>
                                    <td>
                                        @if(count($order->order_details) === 1)
                                            {{ $order->order_details[0]->product->name}}
                                        @endif
                                        @if(count($order->order_details) > 1)
                                            {{ $order->order_details[0]->product->name }} ... and {{ count($order->order_details) - 1 }} products other
                                        @endif
                                    </td>
                                    <td class="text-right">{{ $order->total_price }}</td>
                                    @if($order->status == 0)
                                        <td class="text-right"><strong>Not Done</strong></td>
                                    @else
                                        <td class="text-right"><strong>Done</strong></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-3">
                            <a href="{{ url('/') }}" class="btn btn-block btn-primary">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Shopping Cart -->

            <!-- Best Sellers -->
            <section class="site-content site-section">
                <div class="container">
                    <h2 class="site-heading"><strong>Best</strong> Sellers</h2>
                    <hr>
                    <div class="row store-items">
                    @foreach($topSells as $product)
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
                                    <a href="{{ route('product_details', $product->product_id) }}">
                                        <img src="{{ $product -> images[0] -> link }}" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="store-item-info clearfix">
                                    <span class="store-item-price themed-color-dark pull-right">{{ $product->unit_price }}</span>
                                    <a href=""><strong>{{ $product->name }}</strong></a><br>
                                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
    @endsection



