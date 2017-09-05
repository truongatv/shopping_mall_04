<div class="sidebar-block">
    <form action="{{ route('search', 'filter_99') }}" method="get" class="form-horizontal">
        <h4><strong>{{ trans('title.order_by') }}</strong></h4>
        <div class="form-group">
            <div class="col-sm-8">
                <select id="filter_orderby" name="ecom-filter-rating" class="form-control" size="1" value = "asc">
                    <option value="asc">Low to High</option>
                    <option value="desc">High to Low</option>
                </select>
            </div>
        </div>
        <h4><strong>{{ trans('title.Price_Range') }}</strong></h4>
        <div class="form-group push-bit">
            <div class="col-xs-12">
                <form action="{{ url('search') }}" method="post" class="quick-search">
                    <div>
                        <label class="radio-inline" for="inline_radio1" >
                            <input type="radio" class="cost_filter" id="inline_radio1" name="inline_radios" value="option1"> $0 - $99
                        </label>
                    </div>
                    <div>
                        <label class="radio-inline" for="inline_radio2">
                            <input type="radio" class="cost_filter" id="inline_radio2" name="inline_radios" value="option2"> $100 - $299
                        </label>
                    </div>
                    <div>
                        <label class="radio-inline" for="inline_radio3">
                            <input type="radio" class="cost_filter" id="inline_radio3" name="inline_radios" value="option3"> > $300
                        </label>
                    </div>
                    <div>
                        <label class="radio-inline" for="inline_radio4" >
                            <input type="radio" class="cost_filter" id="inline_radio4" name="inline_radios" value="option4"> All Products
                        </label>
                    </div>
                </form>
            </div>
        </div>
        <h4><strong>{{ trans('title.filtes') }}</strong></h4>
        <div class="form-group">
            <div class="col-sm-8">
                <select id="filter_rating" name="ecom-filter-rating" class="form-control" size="1" value = "0">
                    <option value="0" disabled selected>{{ trans('title.Rating') }}</option>
                    <option value="0">All Products</option>
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Stars</option>
                </select>
            </div>
        </div>
    </form>
    <br>
    <br>
    <br>
</div>

<div class="sidebar-block">
    @if(Auth::check())
        <div class="row">
            <div class="col-xs-6">
                <span class="h3">$ {{ $order->total_price }}<br><small><em>{{ $order->order_details()->count() }} Items</em></small></span>
            </div>
            <div class="col-xs-6">
                <a href="{{ route('view_cart', Auth::user()->id) }}" class="btn btn-sm btn-block btn-success">VIEW CART</a>
                <a href="{{ route('checkout_addresses', $order->order_id) }}" class="btn btn-sm btn-block btn-danger">CHECKOUT</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-xs-6">
                <span class="h3">$0 <br><small> <em>0 Items</em></small></span>
            </div>
            <div class="col-xs-6">
                <a href="{{ route('login') }}" class="btn btn-sm btn-block btn-success">VIEW CART</a>
                <a href="{{ route('login') }}" class="btn btn-sm btn-block btn-danger">CHECKOUT</a>
            </div>
        </div>
    @endif
</div>
