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
                            <a href="{{ $product -> images[0] -> link }} " onclick="return false;" class="gallery-link">
                            @if(isset($product -> images[0]))
                                {{ Html::image(($product->images[0]->hasImage()) ? '/assets/uploads/' . $product->images[0]->link : $product->images[0]->link, trans('title.this-is-image'), [
                                    'class' => 'img-responsive',
                                ]) }}
                            @else
                                <img src="https://parts.ippin.com/resized_images/shops/43/28d4ee6c49a9c0785b2a15b059e17c10.png" alt="" class="img-responsive">
                            @endif
                            </a>
                            <div class="row push-bit">
                                @for($i = 0; $i<count($product -> images) &&  $i < 3; $i++)
                                    <div class="col-xs-4">
                                        <a href="{{ $product -> images[$i] -> link }}" onclick="return false;" class="gallery-link">
                                        @if(isset($product -> images[$i]))
                                            {{ Html::image(($product -> images[$i]->hasImage()) ? '/assets/uploads/' . $product -> images[$i] -> link : $product -> images[$i] -> link, trans('title.this-is-image'), [
                                                'class' => 'img-responsive',
                                            ]) }}
                                        @else
                                            <img src="https://parts.ippin.com/resized_images/shops/43/28d4ee6c49a9c0785b2a15b059e17c10.png" alt="" class="img-responsive">
                                        @endif
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <!-- END Images -->
                        <!-- Info -->
                        <div class="col-sm-6 push-bit">
                            <div class="clearfix">
                                <div class="pull-right">
                                    <span class="h2"><strong>${{ number_format($product->unit_price,2) }}</strong></span>
                                </div>
                                <span class="h4">
                                    <strong class="text-success">{{ $product->name }}</strong><br>
                                <a href="{{ route('shop_details', $product->shop_product_id) }}">
                                {{ ($product->shopProduct) ? $product->shopProduct->shop_product_name : trans('title.Name') }} shop</a><br></span>
                                <span>
                                    @if (auth()->check())
                                    <div>
                                        {!! Form::open() !!}
                                            <div class="hide" data-route="{{ url('rate') }}"></div>
                                            {!! Form::text('rate', $product->rate_count, [
                                                'id' => 'input-2',
                                                'class' => 'rating rating-xs rating-loading',
                                                'data-size' => "xs",
                                                'data-step' => "0.5",
                                                'data-show-caption' => "false",
                                                'data-show-clear' => "false",
                                            ]) !!}
                                            {!! Form::hidden('product_id', $product->product_id, [
                                                'id' => 'product_id',
                                            ]) !!}
                                            {!! Form::hidden('user_id', Auth::user()->id, [
                                                'id' => 'user_id',
                                            ]) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    @endif
                                    <a href="#reviews"class="text-warning">
                                        <i>({{ $comments->count()}} review)</i>
                                    </a>
                                </span>
                            </div>
                            <hr>
                            <p>{{ $product->information }}</p>
                            <hr>
                            <form action="{{ route('add_cart', $product->product_id) }}" method="post" class="form-inline push-bit ">
                            {{ csrf_field() }}
                                <div class="row">
                                <span id ="quality">{{ trans('title.Quality') }} : </span>
                                <input type="text" name="ecom-addcart-quality" value="1">
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                        <!-- END Info -->
                        <!-- More Info Tabs -->
                        <!-- More Info Tabs -->
                        <div class="col-xs-12 site-block">
                            <div class="nav nav-tabs push-bit" data-toggle="">
                                <strong class ="text-warning pull-left" id="reviews">{{ trans('title.Comments') }}</strong>
                            </div>
                            <div class="push-bit">
                            @if (auth()->check())
                            {!! Form::open() !!}
                            <div class="urlcomment" data-route="{{ url('comment') }}"></div>
                            {!! Form::hidden('user_id', Auth::user()->id, [
                                'id' => 'user_id',
                            ]) !!}
                            {!! Form::hidden('product_id', $product["product_id"], [
                                'id' => 'product_id',
                            ]) !!}
                            {!! Form::textarea('content', null, [
                                'class' => 'form-control fix-comment',
                                'id' => "comment1",
                                'placeholder' =>trans('auth.type-comment'),
                                'cols' => '50',
                                'rows' => '3',
                            ]) !!}
                            {!! Form::close() !!}
                            @endif
                            </div>
                            <div class="line fix-line"></div>
                            <div class="content">
                                <div class="tab-pane active" id="product-reviews">
                                    <div id="edit-comment-aria"></div>
                                    <div id="before-comment"></div>
                                    @foreach($comments as $comment)
                                    <div id='location-comment{{ $comment->comment_id }}'>
                                        <div class="media">
                                            <a href="javascript:void(0)" class="pull-left">
                                            {{ Html::image(($comment->user->avatar_image_link) ? '/assets/uploads/' . $comment->user->avatar_image_link : config('settings.avatar_default_path'), trans('title.this-is-avatar'), ['class' => 'customer-avatar ',]) }}
                                            </a>
                                            <a href="">
                                                <strong>{{ $comment->user->name }}</strong>
                                            </a><br>
                                            <span class="text-muted pull-right">
                                            @if (auth()->check() && (Auth::user()->id == $comment->user_id))
                                                <a href="" class=" text-muted edit-comment" id="{{ $comment->comment_id }}"> <i class="fa fa-pencil"></i></a>
                                                <a href="{{ action('CommentController@destroy', $comment->comment_id) }}" class="delete-comment text-muted"> <i class="fa fa-trash"></i></a>
                                            @endif
                                            @if (auth()->check())
                                            <a href="" class=" text-muted reply-comment" id="{{ $comment->comment_id }}">{{ trans('comment.reply') }}</a>
                                            @endif
                                            </span>
                                            <span class="text-muted"><small><em>{{ $comment->created_at }}</em></small></span>
                                            <div id='content-comment' data-content-comment = "{{ $comment->content }}"></div>
                                            <p id="content-comment{{ $comment->comment_id }}">{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                    @if (auth()->check())
                                    {!! Form::open() !!}
                                        <div class="urlreplycomment" data-route="{{ url('replyComment') }}"></div>
                                        {!! Form::hidden('user_reply_id', Auth::user()->id, [
                                            'id' => 'user_reply_id',
                                        ]) !!}

                                        {!! Form::hidden('comment_id', $comment["comment_id"], [
                                            'id' => 'comment_parent_id',
                                        ]) !!}
                                    {!! Form::close() !!}
                                    @endif
                                    @if ( $comment->replies )
                                        <div id="reply-comment-aria{{ $comment->comment_id  }}">
                                        </div>
                                        <div id="before-reply-comment{{ $comment->comment_id }}"></div>
                                        @foreach($comment->replies as $rep1)
                                            <div id='location-comment{{ $rep1->comment_id }}' class="reply1">
                                                <div class="media">
                                                    <a href="javascript:void(0)" class="pull-left">
                                                    {{ Html::image(($rep1->user->avatar_image_link) ? '/assets/uploads/' . $rep1->user->avatar_image_link : config('settings.avatar_default_path'), trans('title.this-is-avatar'), ['class' => 'customer-avatar ',]) }}
                                                    </a>
                                                    <a href="">
                                                        <strong>{{ $rep1->user->name }}</strong>
                                                    </a><br>
                                                    <span class="text-muted pull-right">
                                                    @if (auth()->check() && (Auth::user()->id == $rep1->user_id))
                                                    <a href="" class=" text-muted edit-comment" id="{{ $rep1->comment_id }}"> <i class="fa fa-pencil"></i></a>
                                                    <a href="{{ action('CommentController@destroy', $rep1->comment_id) }}" class="delete-comment text-muted"> <i class="fa fa-trash"></i></a>
                                                    @endif
                                                    </span>
                                                    <span class="text-muted"><small><em>{{ $rep1->created_at }}</em></small></span>
                                                    <div id='content-comment' data-content-comment = "{{ $rep1->content }}"></div>
                                                    <p id="content-comment{{ $rep1->comment_id }}">{{ $rep1->content }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    @endforeach
                                    <div>{{ $comments->render() }}</div>
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
