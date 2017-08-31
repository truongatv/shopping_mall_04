@extends('admin.product_master')
@section('product')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header header2">{{ trans('admin.product') }}
                <small>{{ $product->name }}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        @if(count($errors) > 0)
            <div class = "alert alert-danger">
                @foreach($errors->all() as $err)
                    {{ $err }} <br/>
                @endforeach
            </div>
        @endif


        <div class="col-lg-7" class="user_style" style="">
            <form action="{{ action('AdminController@postEditProduct', $product->product_id) }}" method="POST" files = true enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{csrf_token()}}" />

                <div class="form-group">
                    <label>{{ trans('admin.name') }}</label>
                    <input class="form-control" name="name" placeholder="{{ trans('admin.please_enter_product_name') }}" value=" {{$product->name}}"/>
                </div>
                <div class="form-group">
                    <label>Unit Price</label>
                    <input class="form-control" name="unit_price" placeholder="{{ trans('admin.please_enter_unit_price') }}" value=" {{$product->unit_price}}"/>
                </div>
                <div class="form-group">
                    <label>Total Quanity</label>
                    <input class="form-control" name="total_quanity" placeholder="{{ trans('admin.please_enter_quanity') }}" value=" {{$product->total_quanity}}"/>
                </div>
                <div class="form-group">
                    <label>Top</label>
                    <input class="form-control" name="top_product" placeholder="{{ trans('admin.please_enter_top') }}" value="{{$product->top_product}}"/>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    {{ Html::image($product->images[0]->link, trans('title.this-is-avatar'), [
                        'class' => 'avatar  ',
                    ]) }}
                    <input type="file" name="image_link" class="form-control">
                </div>

                <button type="submit" class="btn btn-default">{{ trans('admin.edit') }}</button>
                <button type="reset" class="btn btn-default">{{ trans('admin.reset') }}</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

@endsection




