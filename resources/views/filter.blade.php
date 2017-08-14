<h2 class="site-heading"><strong>{{ $type }}</strong></h2>
<hr>
<div class="row store-items">
@foreach($products as $product)
    <div class="col-md-6 " data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
        <div class="store-item">
            <div class="store-item-rating text-warning">
                <input id="input-1" name="input-1" value="{{$product->rate_count}} " class="rating rating-loading" data-readonly = "true">
            </div>
            <div class="store-item-image">
                <a href="{{ route('product_details', $product->product_id) }}">
                    <img src={{$product->images[0]->link}} alt="" class="img-responsive">
                </a>
            </div>
            <div class="store-item-info clearfix">
                <span class="store-item-price themed-color-dark pull-right">{{ $product->unit_price }}</span>
                <a href="ecom_product.html"><strong>{{$product->name}}</strong></a><br>
                <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
        </div>
    </div>
@endforeach
{{ $products->links() }}
</div>
