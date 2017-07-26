@extends('layouts.master')
@section('text-center')
	<section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>{{ $product -> name }}</strong></h1>
        </div>
    </section>
   	@endsection
@section('content')
	<section class="site-content site-section">
        <div class="container">
            <div class="row">
            @if(session('errors'))
                <div class = "alert alert-danger">
                    {{ $errors}}
                </div>
            @endif
            @if(session('add_done'))
                <div class="alert alert-success">
                    {{session('add_done')}}
                </div>
            @endif
                <!-- Sidebar -->
                <div class="col-md-4 col-lg-3">
                    <aside class="sidebar site-block">
                        @include('layouts.side_bar')
                        <!-- Store Menu -->
                        <!-- Store Menu functionality is initialized in js/app.js -->
                        <!-- END Store Menu -->
                    </aside>
                </div>
                <!-- END Sidebar -->
                <!-- Product Details -->
                <div class="col-md-8 col-lg-9">
                    <div class="row" data-toggle="lightbox-gallery">
                        <!-- Images -->
                        <div class="col-sm-6 push-bit">
                            <a href="{{ $product -> images[0] -> link }}" class="gallery-link"><img src="{{ $product -> images[0] -> link }}" alt="" class="img-responsive push-bit"></a>
                            <div class="row push-bit">
                                <div class="col-xs-4">
                                    <a href="{{ $product -> images[0] -> link }}" class="gallery-link"><img src="{{ $product -> images[0] -> link }}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="{{ $product -> images[0] -> link }}" class="gallery-link"><img src="{{ $product -> images[0] -> link }}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="{{ $product -> images[0] -> link }}" class="gallery-link"><img src="{{ $product -> images[0] -> link }}" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                        </div>
                        <!-- END Images -->
                        <!-- Info -->
                        <div class="col-sm-6 push-bit">
                            <div class="clearfix">
                                <div class="pull-right">
                                    <span class="h2"><strong>${{ $product -> unit_price }}</strong></span>
                                </div>
                                <span class="h4"><strong class="text-success">{{ $product->name }}</strong><br>
                                <a href="{{ route('shop_details', $product->shop_product_id) }}">
                                {{ ($product->shopProduct) ? $product->shopProduct->shop_product_name : trans('title.Name') }}</a><br></span>
                                <span>
                                    <a href="#"class="text-warning pull-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class = "review" href="#">(0 review)</i>
                                    </a>
                                </span>
                            </div>
                            <hr>
                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.</p>
                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.</p>
                            <hr>
                            <form action="{{ route('add_cart', $product->product_id) }}" method="post" class="form-inline push-bit text-right">
                            {{ csrf_field() }}
                                {{-- <select id="ecom-addcart-size" name="ecom-addcart-size" class="form-control" size="1">
                                    <option value="0" disabled selected>SIZE</option>
                                    <option value="xs">XS</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                    <option value="xxl">XXL</option>
                                </select> --}}
                                <input type="text" name="ecom-addcart-quality" placeholder="Quality">
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                        <!-- END Info -->

                        <!-- More Info Tabs -->
                        <div class="col-xs-12 site-block">
                            <ul class="nav nav-tabs push-bit" data-toggle="tabs">
                                <li class="active"><a href="#product-specs">Specs</a></li>
                                <li><a href="#product-description">Description</a></li>
                                <li><a href="#product-reviews">Reviews (3)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="product-specs">
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Main Features</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 120px;"><strong>Feature #1</strong></td>
                                                <td>Details</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Feature #2</strong></td>
                                                <td>Details</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Feature #3</strong></td>
                                                <td>Details</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Dimensions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 120px;"><strong>Height</strong></td>
                                                <td>85cm</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Width</strong></td>
                                                <td>40cm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">More Info</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 120px;"><strong>Info #1</strong></td>
                                                <td>Details</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Info #2</strong></td>
                                                <td>Details</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Info #3</strong></td>
                                                <td>Details</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="product-description">
                                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                                    <p>Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.</p>
                                    <p>Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales!</p>
                                </div>
                                <div class="tab-pane" id="product-reviews">
                                    <ul class="media-list push">
                                        <li class="media">
                                            <a href="javascript:void(0)" class="pull-left">
                                                <img src="" alt="Avatar" class=" img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="text-warning pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="javascript:void(0)"><strong>Customer</strong></a><br>
                                                <span class="text-muted"><small><em>2 hours ago</em></small></span>
                                                <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="javascript:void(0)" class="pull-left">
                                                <img src="img/placeholders/avatars/avatar10.jpg" alt="Avatar" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="text-warning pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="javascript:void(0)"><strong>Customer</strong></a><br>
                                                <span class="text-muted"><small><em>2 hours ago</em></small></span>
                                                <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="javascript:void(0)" class="pull-left">
                                                <img src="img/placeholders/avatars/avatar14.jpg" alt="Avatar" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="text-warning pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="javascript:void(0)"><strong>Customer</strong></a><br>
                                                <span class="text-muted"><small><em>2 hours ago</em></small></span>
                                                <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END More Info Tabs -->
                    </div>
                </div>
                <!-- END Product Details -->
            </div>
        </div>
    </section>
    @endsection



