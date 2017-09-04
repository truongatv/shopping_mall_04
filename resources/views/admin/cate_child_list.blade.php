@extends('admin.category_master')
@section('category')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header header2">{{ trans('admin.category_parent') }}
            <small>{{ trans('admin.list') }}</small>
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
                <th>{{ trans('admin.id') }}</th>
                <th>{{ trans('admin.name') }}</th>
                <th>{{ trans('admin.delete') }}</th>
                <th>{{ trans('admin.edit') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $cate)
            <tr class="odd gradeX" align="center">
                <td>{{ $cate->category_id }}</td>
                <td>{{ $cate->name }}</td>
                <td class="center"><a href="{{ action('AdminController@getDelete', $cate->category_id) }}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o  fa-fw"></i>{{ trans('admin.delete') }}</a></td>
                <td class="center"><a href="{{ action('AdminController@getEdit', $cate->category_id) }}" class="btn btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil fa-fw"></i>{{ trans('admin.edit') }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- /.row -->

@endsection


