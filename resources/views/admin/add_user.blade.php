@extends('admin.user_master')
@section('user')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User
                <small>Add</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" class="user_style" style="">
            <form action('AdminController@postAddUser') method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" placeholder="Please Enter Name" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="name" placeholder="Please Enter Email" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="name" placeholder="Please Enter Password" />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" name="name" placeholder="Please Enter Phone" />
                </div>
                <div class="form-group">
                    <label>Admin/Custemor</label>
                    <input class="form-control" name="name" placeholder="Please Enter Type" />
                </div>
                <button type="submit" class="btn btn-default">User Add</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

@endsection
