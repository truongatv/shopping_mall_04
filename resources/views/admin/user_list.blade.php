@extends('admin.user_master')
@section('user')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Admin/Custemor</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                <tr class="odd gradeX" align="center">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->role }}</td>

                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ action('AdminController@getDeleteUser', $user->id) }}" > Delete</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->

@endsection
