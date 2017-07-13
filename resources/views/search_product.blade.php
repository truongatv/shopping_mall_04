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
                                <!-- Refine Search -->
                                <div class="sidebar-block">
                                    <form action="ecom_search_results.html" method="post" class="form-horizontal">
                                        <div class="form-group push-bit">
                                            <div class="col-xs-12">
                                                <div class="input-group">
                                                    <input type="text" id="ecom-search" name="ecom-search" class="form-control" placeholder="Search Store.." value="Gift">
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4><strong>Price Range</strong></h4>
                                        <div class="form-group push-bit">
                                            <div class="col-xs-12">
                                                <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> $0 - $99
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> $100 - $299
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio3">
                                                    <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> > $300
                                                </label>
                                            </div>
                                        </div>
                                        <h4><strong>Filters</strong></h4>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <select id="ecom-filter-condition" name="ecom-filter-condition" class="form-control" size="1">
                                                    <option value="0" disabled selected>Condition</option>
                                                    <option value="new">New</option>
                                                    <option value="used">Used</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <select id="ecom-filter-rating" name="ecom-filter-rating" class="form-control" size="1">
                                                    <option value="0" disabled selected>Rating</option>
                                                    <option value="5">5 Stars</option>
                                                    <option value="4">4 Stars</option>
                                                    <option value="3">3 Stars</option>
                                                    <option value="2">2 Stars</option>
                                                    <option value="1">1 Stars</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group push-bit">
                                            <div class="col-sm-8">
                                                <select id="ecom-filter-color" name="ecom-filter-color" class="form-control" size="1">
                                                    <option value="0" disabled selected>Color</option>
                                                    <option value="1">Red (15)</option>
                                                    <option value="2">Blue (15)</option>
                                                    <option value="3">Yellow (23)</option>
                                                    <option value="4">Black (95)</option>
                                                    <option value="5">Grey (52)</option>
                                                    <option value="5">Not Specified (690)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h4 class="-header"><strong>Categories</strong></h4>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category1">
                                                    <input type="checkbox" id="ecom-filter-category1" name="ecom-filter-category1" value="1" checked> <strong>Clothes</strong> (1521)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category2">
                                                    <input type="checkbox" id="ecom-filter-category2" name="ecom-filter-category2" value="2" checked> <strong>Electronics</strong> (1223)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category3">
                                                    <input type="checkbox" id="ecom-filter-category3" name="ecom-filter-category3" value="3" checked> <strong>Games</strong> (564)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category4">
                                                    <input type="checkbox" id="ecom-filter-category4" name="ecom-filter-category4" value="4" checked> <strong>Sports</strong> (754)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category5">
                                                    <input type="checkbox" id="ecom-filter-category5" name="ecom-filter-category5" value="5" checked> <strong>Kids</strong> (1514)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category6">
                                                    <input type="checkbox" id="ecom-filter-category6" name="ecom-filter-category6" value="6" checked> <strong>Home</strong> (369)
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Refine Search -->

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

                <div class="col-md-8 col-lg-9">
                            <div class="row" data-toggle="lightbox-gallery">
                                <!-- Images -->
                                <div class="col-sm-6 push-bit">
                                    <a href="/img/placeholders/photos/photo31.jpg" class="gallery-link"><img src="/img/placeholders/photos/photo31.jpg" alt="" class="img-responsive push-bit"></a>
                                    <div class="row push-bit">
                                        <div class="col-xs-4">
                                            <a href="/img/placeholders/photos/photo30.jpg" class="gallery-link"><img src="/img/placeholders/photos/photo30.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="/img/placeholders/photos/photo29.jpg" class="gallery-link"><img src="/img/placeholders/photos/photo29.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="/img/placeholders/photos/photo28.jpg" class="gallery-link"><img src="/img/placeholders/photos/photo28.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Images -->

                                <!-- Info -->
                                <div class="col-sm-6 push-bit">
                                    <div class="clearfix">
                                        <div class="pull-right">
                                            <span class="h2"><strong>$ 69</strong></span>
                                        </div>
                                        <span class="h4"><strong class="text-success">NAME PRODUCT</strong><br><a href="#">Name shop</a><br></span>
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
                                    <form action="ecom_shopping_cart.html" method="post" class="form-inline push-bit text-right">
                                        <select id="ecom-addcart-size" name="ecom-addcart-size" class="form-control" size="1">
                                            <option value="0" disabled selected>SIZE</option>
                                            <option value="xs">XS</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                            <option value="xxl">XXL</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                </div>
                                <!-- END Info -->

                                <!-- More Info Tabs -->
                                <div class="col-xs-12 site-block">
                                    <ul class="nav nav-tabs push-bit" data-toggle="tabs">
                                        <li class="active"><a class="submenu" href="javascript:void(0)">Specs</a></li>
                                        <li><a class = "submenu" href="javascript:void(0)">Sell detail</a></li>
                                        <li><a class = "submenu" href="javascript:void(0)">Features details</a></li>
                                        <li><a class="submenu" href="#product-reviews">Reviews (3)</a></li>
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
                                                        <img src="img/placeholders/avatars/avatar1.jpg" alt="Avatar" class="img-circle">
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



