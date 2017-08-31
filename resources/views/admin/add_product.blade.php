@extends('admin.product_master')
@section('product')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header header2">{{ trans('admin.product') }}
                <small>{{ trans('admin.add') }}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors) > 0)
                <div class = "alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{ $err }} <br/>
                    @endforeach
                </div>
            @endif
            <form action = "{{ route('add_product_post') }}" method="POST" files = true enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" placeholder="{{ trans('admin.please_enter_product_name') }}" />
                </div>
                <div class="form-group">
                    <label>Unit Price</label>
                    <input class="form-control" name="unit_price" placeholder="{{ trans('admin.please_enter_unit_price') }}" />
                </div>
                <div class="form-group">
                    <label>Quanity</label>
                    <input class="form-control" name="total_quanity" placeholder="{{ trans('admin.please_enter_quanity') }}" />
                </div>
                <div class="form-group">
                    <label>Top</label>
                    <input class="form-control" name="top_product" placeholder="{{ trans('admin.please_enter_top') }}" />
                </div>

                <div class="form-group">
                    <label>{{ trans('admin.category_parent') }}</label>
                    <select class="form-control" name="category_parent_id" id="category_parent">
                        @foreach($category_parent as $category_parent)
                            <option value="{{ $category_parent->category_id }}">
                                {{ $category_parent->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ trans('admin.category') }}</label>
                    <select class="form-control" name="category_id" id="category_child">
                        @foreach($category as $category)
                            <option value="{{ $category->category_id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Shop Product</label>
                    <select class="form-control" name="shop_product_id">
                        @foreach($shop_product as $shop_product)
                            <option value="{{$shop_product->shop_product_id}}">
                                {{ $shop_product->shop_product_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image_link" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">{{ trans('admin.product_add') }}</button>
                <button type="reset" class="btn btn-danger">{{ trans('admin.reset') }}</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

@endsection


