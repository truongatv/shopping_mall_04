@extends('admin.user_master')
@section('user')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header header2">{{ trans('admin.user') }}
                <small>{{ trans('admin.list') }}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>{{ trans('admin.id') }}</th>
                    <th>{{ trans('admin.name') }}</th>
                    <th>{{ trans('admin.email') }}</th>
                    <th>{{ trans('admin.phone') }}</th>
                    <th>{{ trans('admin.admin_custemor') }}</th>
                    <th>{{ trans('admin.delete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                <tr class="odd gradeX" align="center">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    @if($user->role == 1)
                        <td class="center">
                            <button class="btn btn-warning" data-toggle="tooltip" title="Admin">{{ trans('admin.admin') }}</button>
                        </td>
                    @else
                        <td class="center">
                            {{ trans('admin.user') }}
                        </td>
                    @endif
                    <td class="center"><a href="{{ action('AdminController@getDeleteUser', $user->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o  fa-fw"></i>{{ trans('admin.delete') }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->

@endsection
