<h2 class="site-heading" id="product_name"><strong>{{ $type }}</strong></h2>
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
                    <span class="store-item-price themed-color-dark pull-right">{{ $product->unit_price }}</span>
                    <a href="ecom_product.html"><strong>{{$product->name}}</strong></a><br>
                    <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
            </div>
        </div>
    @endforeach
    {{ $products->links() }}
    </div>
