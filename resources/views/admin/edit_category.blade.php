@extends('admin.category_master')
@section('category')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category
                <small>{{ $category->name }}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" class="user_style" style="">
            @if(count($errors) > 0)
                <div class = "alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{ $err }} <br/>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
            <form action="{{ action('AdminController@postEdit', $category->category_id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group">
                    <label>Category Name</label>
                    <input class="form-control" name="name" placeholder="Please Enter Category Name" value="{{ $category->name }}"/>
                </div>
                <button type="submit" class="btn btn-default">Edit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

@endsection
