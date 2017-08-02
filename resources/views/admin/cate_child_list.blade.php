@extends('admin.category_master')
@section('category')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Category Child
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
                <!-- <th>Category Parent</th>
                <th>Status</th> -->
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $cate)
            <tr class="odd gradeX" align="center">
                <td>{{ $cate->category_id }}</td>
                <td>{{ $cate->name }}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ action('AdminController@getDelete', $cate->category_id) }}" > Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ action('AdminController@getEdit', $cate->category_id) }}"> Edit </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- /.row -->

@endsection


