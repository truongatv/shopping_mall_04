@extends('admin.product_master')
@section('product')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product
                <small>Add</small>
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
                    <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                </div>
                <div class="form-group">
                    <label>Unit Price</label>
                    <input class="form-control" name="unit_price" placeholder="Please Enter Unit Price" />
                </div>
                <div class="form-group">
                    <label>Quanity</label>
                    <input class="form-control" name="total_quanity" placeholder="Please Enter Quanity" />
                </div>
                <div class="form-group">
                    <label>Top</label>
                    <input class="form-control" name="top_product" placeholder="Please Enter Top Product" />
                </div>

                <div class="form-group">
                    <label>Category Parent</label>
                    <select class="form-control" name="category_parent_id" id="category_parent">
                        @foreach($category_parent as $category_parent)
                            <option value="{{ $category_parent->category_id }}">
                                {{ $category_parent->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Category</label>
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
                <button type="submit" class="btn btn-default">Product Add</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

@endsection


