@extends('admin.category_master')
@section('category')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category
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

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif

            <form action= "{{ route('add_cate') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label>Category Parent</label>
                    <!-- <select class="form-control">
                        <option value="">NONE</option>
                    </select> -->
                    {!! Form::select('category_parent_id', $categoryParent, null, [
                        'class' => 'form-control',
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>Category Name</label>
                    <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                </div>
                <button type="submit" class="btn btn-default">Category Add</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

@endsection
