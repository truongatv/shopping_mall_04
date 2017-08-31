<div class="sidebar-block">
    <ul class="store-menu" id="menu">
        <li class="{{ $group == "beauty" ? 'open':'' }}" >
        {{-- {{dd($group)}} --}}
            <a href="#" class="submenu "><i class="fa fa-angle-right"></i>{{ trans('title.beauty') }}</a>
            <ul>
                <li class="submenuli"><a href="{{ url('category/beauty/cosmetics') }}" class="{{ $name == "cosmetics" ? 'active':'' }}">{{ trans('title.cosmetics') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/beauty/men') }}" class="{{ $name == "men" ? 'active':'' }} ">{{ trans('title.men') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/beauty/vitamin') }}" class="{{ $name == "vitamin" ? 'active':'' }}">{{ trans('title.vitamin') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/beauty/health') }}" class="{{ $name == "health" ? 'active':'' }}">{{ trans('title.health') }}</a></li>
                <li ><a href="{{ url('category/beauty/more_Beauty') }}" class="{{ $name == "more Beauty" ? 'active':'' }}">{{ trans('title.more Beauty') }}</a></li>
            </ul>
        </li>
        <li class="{{ $group == "food" ? 'open':'' }}" >
            <a href="#" class="submenu submenua"><i class="fa fa-angle-right"></i>{{ trans('title.food_drink') }}</a>
            <ul>
                <li class="submenuli"><a href="{{ url('category/food/rice_noodles') }}" class="{{ $name == "rice_noodles" ? 'active':'' }}">{{ trans('title.rice_noodles') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/food/spice_seasoning') }}" class="{{ $name == "spice_seasoning" ? 'active':'' }}">{{ trans('title.spice_seasoning') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/food/dried_canned_recooked') }}" class="{{ $name == "dried_canned_recooked" ? 'active':'' }}">{{ trans('title.dried_canned_recooked') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/food/sweets_snack') }}" class="{{ $name == "sweets_snack" ? 'active':'' }}">{{ trans('title.sweets_snack') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/food/tea_coffee') }}" class="{{ $name == "tea_coffee" ? 'active':'' }}">{{ trans('title.tea_coffee') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/food/sake') }}" class="{{ $name == "sake" ? 'active':'' }}">{{ trans('title.sake') }}</a></li>
                <li><a href="{{ url('category/food/more_food') }}" class="{{ $name == "more_food" ? 'active':'' }}">{{ trans('title.more_food') }}</a></li>
            </ul>
        </li>
        <li class="{{ $group == "fashion" ? 'open':'' }}">
            <a href="#" class="submenu submenua"><i class="fa fa-angle-right"></i>{{ trans('title.fashion') }}</a>
            <ul>
                <li class="submenuli"><a href="{{ url('category/fashion/women_fashion') }}" class="{{ $name == "women_fashion" ? 'active':'' }}">{{ trans('title.women_fashion') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/fashion/men_fashion') }}" class="{{ $name == "men_fashion" ? 'active':'' }}">{{ trans('title.men_fashion') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/fashion/kid_fashion') }}" class="{{ $name == "kid_fashion" ? 'active':'' }}">{{ trans('title.kid_fashion') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/fashion/baby_fashion') }}" class="{{ $name == "baby_fashion" ? 'active':'' }}">{{ trans('title.baby_fashion') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/fashion/luggage') }}" class="{{ $name == "luggage" ? 'active':'' }}">{{ trans('title.luggage') }}</a></li>
                <li><a href="{{ url('category/fashion/more_fashion') }}" class="{{ $name == "more_fashion" ? 'active':'' }}">{{ trans('title.more_fashion') }}</a></li>
            </ul>
        </li>
        <li class="{{ $group == "electronic" ? 'open':'' }}">
            <a href="#" class="submenu submenua"><i class="fa fa-angle-right"></i>{{ trans('title.electronic') }}</a>
            <ul>
                <li class="submenuli"><a href="{{ url('category/electronic/gaming') }}" class="{{ $name == "gaming" ? 'active':'' }}">{{ trans('title.gaming') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/electronic/camera') }}" class="{{ $name == "camera" ? 'active':'' }}">{{ trans('title.camera') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/electronic/electronic_home') }}" class="{{ $name == "electronic_home" ? 'active':'' }}">{{ trans('title.home') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/electronic/voluptatem') }}" class="{{ $name == "voluptatem" ? 'active':'' }}">{{ trans('title.accessories') }}</a></li>
                <li><a href="{{ url('category/electronic/voluptatem') }}" class="{{ $name == "voluptatem" ? 'active':'' }}">{{ trans('title.more_electronic') }}</a></li>
            </ul>
        </li>
        <li class="{{ $group == "home" ? 'open':'' }}">
            <a href="#" class="submenu submenua"><i class="fa fa-angle-right"></i>{{ trans('title.Home_&_Living') }}</a>
            <ul>
                <li class="submenuli"><a href="{{ url('category/home/Home_Decor') }}" class="{{ $name == "Home_Decor" ? 'active':'' }}">{{ trans('title.Home_Decor') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/home/Baby_and_Kids') }}" class="{{ $name == "Baby_and_Kids" ? 'active':'' }}">{{ trans('title.Baby_and_Kids') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/home/Kitchen_&_Dining') }}" class="{{ $name == "Kitchen_&_Dining" ? 'active':'' }}">{{ trans('title.Kitchen_&_Dining') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/home/Daily_Necessities') }}" class="{{ $name == "Daily_Necessities" ? 'active':'' }}">{{ trans('title.Daily_Necessities') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/home/Books') }}" class="{{ $name == "Books" ? 'active':'' }}">{{ trans('title.Books/Magazines_&_DVD') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/home/Office_Supplies') }}" class="{{ $name == "Office_Supplies" ? 'active':'' }}">{{ trans('title.Office_Supplies') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/home/Educational_Supplies') }}" class="{{ $name == "Educational_Supplies" ? 'active':'' }}">{{ trans('title.Educational_Supplies') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/home/Pet_Supplies') }}" class="{{ $name == "Pet_Supplies" ? 'active':'' }}">{{ trans('title.Pet_Supplies') }}</a></li>
                <li><a href="{{ url('category/home/More_Home') }}" class="{{ $name == "More_Home" ? 'active':'' }}">{{ trans('title.More_Home_&_Living') }}</a></li>
            </ul>
        </li>
        <li class="{{ $group == "hobby" ? 'open':'' }}">
            <a href="#" class="submenu submenua"><i class="fa fa-angle-right"></i>{{ trans('title.Hobby_&_Crafts') }}</a>
            <ul>
                <li class="submenuli"><a href="{{ url('category/hobby/Stationery') }}" class="{{ $name == "Stationery" ? 'active':'' }}">{{ trans('title.Stationery') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/hobby/Craft_Tools') }}" class="{{ $name == "Craft_Tools" ? 'active':'' }}">{{ trans('title.Craft_Tools') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/hobby/Plastic_Models') }}" class="{{ $name == "Plastic_Models" ? 'active':'' }}">{{ trans('title.Plastic_Models_&_Figures') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/hobby/DIY') }}" class="{{ $name == "DIY" ? 'active':'' }}">{{ trans('title.DIY_Tools') }}</a></li>
                <li class="submenuli"><a href="{{ url('category/hobby/Cars') }}" class="{{ $name == "Cars" ? 'active':'' }}">{{ trans('title.Cars_&_Motorcycles') }}</a></li>
                <li><a href="{{ url('category/hobby/More_Hobby') }}" class="{{ $name == "More_Hobby" ? 'active':'' }}">{{ trans('title.More_Hobby_&_Crafts') }}</a></li>
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

