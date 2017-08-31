@extends('layouts.master')
@section('css')
    {!! Html::style('css/profile.css') !!}
    @endsection
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong> {{ trans('title.The_customer_is_always_right') }} </strong></h1>
        </div>
    </section>
@endsection
@section('content')
    <!-- Product Comparison -->
    <section class="site-content site-section">
        <div class="container">
            <div class="table-responsive site-block">
                 <thead>
                    <div class="text-center col-xs-12   ">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{ $err }} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <th class="text-center col-xs-12   row"  >
                        <p> {{ trans('title.Information\'s_Customer') }}</p>
                        <a href="img/placeholders/photos/photo35.jpg" data-toggle="lightbox-image">
                            <!-- <img src="{{$profile->avatar_image_link}}" alt="avatra" class="push-bit" style="width: 220px;"> -->
                            {{ Html::image('/assets/uploads/' . $profile->avatar_image_link, trans('title.this-is-avatar'), [
                                    'class' => 'push-bit2 ',
                            ]) }}
                        </a>
                        <div class="h1 text-primary"><strong>{{ $profile->name }}</strong></div>
                    </th>

                    </div>
                    </thead>
                <table class="table table-vcenter nav-style-table">
                    <tbody>
                        <tr>
                            <th class="h3" colspan="4">{{ trans('title.Acount') }}</th>
                        </tr>
                        <tr >
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Name') }}</td>
                            <td class="text-center col-xs-12 ">{{ $profile->name }}</td>
                        </tr>
                        <tr>
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Email') }}</td>
                            <td class="text-center col-xs-12">{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Address') }}</td>
                            <td class="text-center col-xs-12"> </td>
                        </tr>

                        @foreach($address as $add)

                            <tr>
                                <td class="active col-md-3 col-xs-12 customize"></td>
                                <td class="text-center col-xs-12">{{ $add->address }} </td>
                            </tr>
                         @endforeach

                        <tr>
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Phone') }}</td>
                            <td class="text-center col-xs-12">{{ $profile->phone }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-vcenter">
                    <tbody>
                        <tr>
                            <th class="h3" colspan="4">{{ trans('title.Subcribe') }}</th>
                        </tr>
                        <tr>
                            <td class="text-center">{{ $profile->subcribe }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-vcenter">
                    <tbody>
                        <tr>
                            <th class="h3" colspan="4">{{ trans('title.Order') }} </th>
                        </tr>
                        <tr>
                            <table class="table table-striped table-bordered table-hover" id="">
                                <thead>
                                    <tr align="center">
                                        <th>Date</th>
                                        <th>Product</th>
                                        <th>Total Price</th>
                                        <th>Order Detail</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order as $order)
                                    @if($order->total_price != 0)
                                        <tr class="odd gradeX" align="center">
                                            <td class="center">{{ $order->created_at }}</td>
                                            <td class="center">
                                                @if(count($order->order_details) === 1)
                                                    {{ $order->order_details[0]->product->name}}
                                                @endif
                                                @if(count($order->order_details) > 1)
                                                    {{ $order->order_details[0]->product->name }} ... and {{ count($order->order_details) - 1 }} products other
                                                @endif
                                            </td>
                                            <td class="center">{{ $order->total_price }}</td>
                                            <td class="center"><button class="btn btn-warning"><a class="link_order" href="{{ route('view_cart_id', $order->order_id) }}">Order Detail</a></button></td>
                                            @if($order->status != 0)
                                            <td class="center">
                                                Done
                                            </td>
                                            @else
                                            <td class="center">
                                                Doing
                                            </td>
                                            @endif
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </tr>
                   </tbody>
                </table>
                <table class="table table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <a href="{{ route('edit-profile-user') }}" class="btn btn-lg btn-primary"><i class="fa fa-shopping-cart"></i> {{ trans('title.Edit') }} </a><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
            <!-- END Product Comparison -->
    <section class="site-content site-section">
        <div class="container">
            <h2 class="site-heading"><strong>Best</strong> Sellers</h2>
            <hr>
            <div class="row store-items">
                @foreach($topSells as $product)
                    <div class="col-md-4" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <div class="store-item">
                            <div class="store-item-rating text-warning">
                                <input id="input-1-xs" name="input-1-xs" class="rating rating-loading" value="{{$product->rate_count}}" data-min="0" data-max="5" data-step="0.5" data-size="xs" data-show-clear="false" data-show-caption="false" data-readonly = "true">
                            </div>
                            <div class="store-item-image">
                                <a href="{{ route('product_details', $product->product_id) }}">
                                @if(isset($product -> images[0]))
                                    {{ Html::image(($product->images[0]->hasImage()) ? '/assets/uploads/' . $product->images[0]->link : $product->images[0]->link, trans('title.this-is-image'), [
                                        'class' => 'img-responsive',
                                    ]) }}
                                @else
                                    <img src="https://parts.ippin.com/resized_images/shops/43/28d4ee6c49a9c0785b2a15b059e17c10.png" alt="" class="img-responsive">
                                @endif
                                </a>
                            </div>
                            <div class="store-item-info clearfix">
                                <div class="col-sm-08 namecut" rel="tooltip" title="{{ $product->name }}">
                                <a href="{{ route('product_details', $product->product_id) }}"><strong>{{ $product->name }}</strong></a><br>
                                </div>
                                <div class="col-sm-04">
                                    <span class="store-item-price themed-color-dark pull-right" >${{ $product->unit_price }}</span>
                                </div>
                                <small><i class="fa fa-shopping-cart text-muted bigicon"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-right">
                    <a href="{{url('category/TopSell')}}"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
                </div>
        </div>
    </section>
@endsection
