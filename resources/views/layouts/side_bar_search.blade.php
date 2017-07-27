<div class="sidebar-block">
    <form action="ecom_search_results.html" method="post" class="form-horizontal">
        <h4><strong>{{ trans('title.Price_Range') }}</strong></h4>
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
        <h4><strong>{{ trans('title.filtes') }}</strong></h4>
        <div class="form-group">
            <div class="col-sm-8">
                <select id="ecom-filter-rating" name="ecom-filter-rating" class="form-control" size="1">
                    <option value="0" disabled selected>{{ trans('title.Rating') }}</option>
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Stars</option>
                </select>
            </div>
        </div>
        <h4 class="-header"><strong>{{ trans('title.Categories') }}</strong></h4>
        <div class="form-group">
            <div class="col-xs-12">
                <label class="checkbox-inline" for="ecom-filter-category1">
                    <input type="checkbox" id="ecom-filter-category1" name="ecom-filter-category1" value="1" > <strong>{{ trans('title.beauty') }}</strong> (1521)
                </label>
            </div>
            <div class="col-xs-12">
                <label class="checkbox-inline" for="ecom-filter-category2">
                    <input type="checkbox" id="ecom-filter-category2" name="ecom-filter-category2" value="2" > <strong>{{ trans('title.food_drink') }}</strong> (1223)
                </label>
            </div>
            <div class="col-xs-12">
                <label class="checkbox-inline" for="ecom-filter-category3">
                    <input type="checkbox" id="ecom-filter-category3" name="ecom-filter-category3" value="3"> <strong>{{ trans('title.Games') }}</strong> (564)
                </label>
            </div>
             <div class="col-xs-12">
                <label>
                    <input type="checkbox" id="ecom-filter-category4" name="ecom-filter-category4" value="4" > <strong>{{ trans('title.electronic') }}</strong> (754)
                </label>
            </div>
            <div class="col-xs-12">
                <label class="checkbox-inline" for="ecom-filter-category5">
                    <input type="checkbox" id="ecom-filter-category5" name="ecom-filter-category5" value="5" > <strong>{{ trans('title.Home_&_Living') }}</strong> (1514)
                </label>
            </div>
            <div class="col-xs-12">
                <label class="checkbox-inline" for="ecom-filter-category6">
                    <input type="checkbox" id="ecom-filter-category6" name="ecom-filter-category6" value="6"> <strong>{{ trans('title.Hobby_&_Crafts') }}</strong> (369)
                </label>
            </div>
        </div>
    </form>
</div>
<div class="sidebar-block">
    @if(Auth::check())
        <div class="row">
            <div class="col-xs-6">
                <span class="h3">$ {{ $order->total_price }}<br><small><em>{{ $order->order_details()->count() }} Items</em></small></span>
            </div>
            <div class="col-xs-6">
                <a href="{{ route('view_cart', Auth::user()->id) }}" class="btn btn-sm btn-block btn-success">VIEW CART</a>
                <a href="#" class="btn btn-sm btn-block btn-danger">CHECKOUT</a>
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
