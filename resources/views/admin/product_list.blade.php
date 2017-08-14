@extends('admin.product_master')
@section('product')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        @if(session('thongbao1'))
            <div class="alert alert-success">
                {{ session('thongbao1') }}
            </div>
        @endif
        @if(session('thongbao'))
            <div class="alert alert-success">
                {{ session('thongbao') }}
            </div>
        @endif
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Unit Price</th>
                    <th>Total Quality</th>
                    <th>Category</th>
                    <th>Shop Product</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $sp)
                <tr class="odd gradeX" align="center">
                    <td>{{ $sp->product_id }}</td>
                    <td>{{ $sp->name }}</td>
                    <td>{{ $sp->unit_price }}</td>
                    <td>{{ $sp->total_quanity }}</td>

                    <td>{{ ($sp->category) ? $sp->category->name : ''}} </td>
                    <td>{{ ($sp->shopProduct) ? $sp->shopProduct->shop_product_name : ''}}</td>
                    <td>
                        {{ Html::image(($sp->images[0]->hasImage()) ? '/assets/uploads/' . $sp->images[0]->link : $sp->images[0]->link, trans('title.this-is-image'), [
                            'class' => 'image_product',
                        ]) }}
                    </td>

                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ action('AdminController@getDeleteProduct', $sp->product_id) }}" > Delete</a>
                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ action('AdminController@getEditProduct', $sp->product_id) }}"> Edit </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->

@endsection
