@extends('layouts.master')
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><i class="fa fa-shopping-cart"></i> <strong>Shopping Cart</strong></h1>
        </div>
    </section>
    @endsection
@section('content')
    <section class="site-content site-section">
    @if(session('minus_error'))
        <div class="alert alert-danger">
            {{session('minus_error')}}
        </div>
    @endif
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th class="text-center">QTY</th>
                                    <th class="text-right">Unit Price</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sub_total = 0;
                                $vat = 0;
                                $sum = 0;
                            ?>
                            @foreach ($order_details as $order_detail)
                                <tr>
                                    <td style="width: 200px;">
                                        <img src={{ $order_detail->product->images[0]->link }} alt="" style="width: 180px;">
                                    </td>
                                    <td>
                                        <strong></strong><br>{{ $order_detail->product->name }}<br>
                                        <strong class="text-success">In stock</strong> - 24h Delivery
                                    </td>
                                    <td class="text-center">
                                        <strong>{{ $order_detail->quality }}</strong>
                                        @if( $order->status == 0 )
                                            <a href="{{ route('add_product', $order_detail->order_detail_id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
                                            <a href="{{ route('minus_product', $order_detail->order_detail_id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove"><i class="fa fa-minus"></i></a>
                                        @endif
                                    </td>
                                    <td class="text-right">${{ $order_detail->product->unit_price }}</td>
                                        <?php
                                            $total = $order_detail->quality * $order_detail->product->unit_price;
                                            $sub_total += $total;
                                            $vat += $total*20/100;  
                                            $sum += $sub_total + $vat;
                                        ?>
                                    <td class="text-right"><strong>${{ $total }}</strong></td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td colspan="4" class="text-right h4"><strong>Sub Total</strong></td>
                                    <td class="text-right h4"><strong>${{ $sub_total }}</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right h4"><strong>VAT (20%)</strong></td>
                                    <td class="text-right h4"><strong>${{ $vat }}</strong></td>
                                </tr>
                                <tr class="active">
                                    <td colspan="4" class="text-right text-uppercase h4"><strong>Total Price</strong></td>
                                    <td class="text-right text-success h4"><strong>${{ $sum }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-3">
                            <a href="{{ url('/') }}" class="btn btn-block btn-primary">Continue Shopping</a>
                        </div>
                        <div class="col-xs-5 col-md-3 col-md-offset-6">
                        @if($order->status == 0)
                            <a href="{{ route('checkout_addresses', $order->order_id) }}" class="btn btn-block btn-danger">Checkout</a>
                        @endif
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



