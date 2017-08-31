@extends('admin.category_master')
@section('category')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header header2">Category Parent
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
                    <th>{{ trans('admin.id') }}</th>
                    <th>{{ trans('admin.name') }}</th>
                    <th>{{ trans('admin.category_child') }}</th>
                    <th>{{ trans('admin.delete') }}</th>
                    <th>{{ trans('admin.edit') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $cate)
                    @if($cate->category_parent_id == NULL)
                        <tr class="odd gradeX" align="center">
                            <td>{{$cate->category_id}}</td>
                            <td>{{ $cate->name }}</td>
                            <td><a class="link_order btn btn-success" href="{{ route('cate_list_child', $cate->category_id) }}">{{ trans('admin.category_child') }}</a></td>
                            <td class="center"><a href="{{ action('AdminController@getDelete', $cate->category_id) }}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o  fa-fw"></i>{{ trans('admin.delete') }}</a></td>
                            <td class="center"><a href="{{ action('AdminController@getEdit', $cate->category_id) }}" class="btn btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil fa-fw"></i>{{ trans('admin.edit') }}</a></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>


        </table>
    </div>
    <!-- /.row -->

@endsection
