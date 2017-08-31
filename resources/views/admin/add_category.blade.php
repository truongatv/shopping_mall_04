@extends('admin.category_master')
@section('category')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header header2">{{ trans('admin.category') }}
                <small>{{ trans('admin.add') }}</small>
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

            <form id="form2" action= "{{ route('add_cate') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>{{ trans('admin.category_parent') }}</label>
                    {!! Form::select('category_parent_id', $categoryParent, 0, [
                        'class' => 'form-control',
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('admin.category_name') }}</label>
                    <input class="form-control" name="name" placeholder="{{ trans('admin.please_enter_category_name') }}" />
                </div>
                <button type="submit" class="btn btn-success">{{ trans('admin.category_add') }}</button>
                <button type="reset" class="btn btn-danger">{{ trans('admin.reset') }}</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

@endsection
