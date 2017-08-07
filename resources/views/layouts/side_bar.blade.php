<div class="sidebar-block">
    <ul class="store-menu" >
        <li>
            <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.beauty') }}</a>
            <ul>
                <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.cosmetics') }}</a></li>
                <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.men') }}</a></li>
                <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.vitamin') }}</a></li>
                <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.health') }}</a></li>
                <li><a href="{{ url('category/beauty/voluptatem') }}">{{ trans('title.more Beauty') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.food_drink') }}</a>
            <ul>
                <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.rice_noodles') }}</a></li>
                <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.spice_seasoning') }}</a></li>
                <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.dried_canned_recooked') }}</a></li>
                <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.sweets_snack') }}</a></li>
                <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.tea_coffee') }}</a></li>
                <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.sake') }}</a></li>
                <li><a href="{{ url('category/food/voluptatem') }}">{{ trans('title.more_food') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.fashion') }}</a>
            <ul>
                <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.women_fashion') }}</a></li>
                <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.men_fashion') }}</a></li>
                <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.kid_fashion') }}</a></li>
                <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.baby_fashion') }}</a></li>
                <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.luggage') }}</a></li>
                <li><a href="{{ url('category/fashion/voluptatem') }}">{{ trans('title.more_fashion') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.electronic') }}</a>
            <ul>
                <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.gaming') }}</a></li>
                <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.camera') }}</a></li>
                <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.home') }}</a></li>
                <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.accessories') }}</a></li>
                <li><a href="{{ url('category/electronic/voluptatem') }}">{{ trans('title.more_electronic') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.Home_&_Living') }}</a>
            <ul>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Home_Decor') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Baby_and_Kids') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Kitchen_&_Dining') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Daily_Necessities') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Books/Magazines_&_DVD') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Office_Supplies') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Educational_Supplies') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.Pet_Supplies') }}</a></li>
                <li><a href="{{ url('category/home/voluptatem') }}">{{ trans('title.More_Home_&_Living') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="submenu"><i class="fa fa-angle-right"></i>{{ trans('title.Hobby_&_Crafts') }}</a>
            <ul>
                <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Stationery') }}</a></li>
                <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Craft_Tools') }}</a></li>
                <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Plastic_Models_&_Figures') }}</a></li>
                <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.DIY_Tools') }}</a></li>
                <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.Cars_&_Motorcycles') }}</a></li>
                <li><a href="{{ url('category/hobby/voluptatem') }}">{{ trans('title.More_Hobby_&_Crafts') }}</a></li>
            </ul>
        </li>

    </ul>
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
