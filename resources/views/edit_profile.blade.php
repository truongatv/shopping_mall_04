@extends('layouts.master')
@section('css')
    {!! Html::style('css/profile.css') !!}
    @endsection
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong> {{ trans('title.The_customer_is_always_right') }} </strong></h1>
        </div>
    </section>
@endsection
@section('content')
    <div class="container">
        <h1 style= "margin-left: 50px";> {{ trans('title.Edit_Profile') }} </h1>
        <hr>
        <form class="row " action="{{ route('sua_profile') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-3">
                <div class="text-center">
                    <!-- <img src="{{ public_path(). '/assets/uploads/' . '1500444120_Untitled.png'}}"  class="avatar img-circle" alt="avatar" > -->
                    {{ Html::image('/assets/uploads/' . $profile->avatar_image_link, trans('title.this-is-avatar'), [
                        'class' => 'avatar img-circle ',
                    ]) }}
                    <h6> {{ trans('title.Upload_a_different_photo...') }}</h6>
                    <input type="file" name="avatar_image_link" class="form-control">
                </div>
            </div>
            <div class="col-md-9 personal-info">
                <div class="form-group">
                    <label class="col-lg-3 control-label"> {{ trans('title.Email') }} : </label>
                    <div class="col-lg-8">
                        <input name="email" class="form-control" type="text" value="{{$profile->email}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label"> {{ trans('title.Phone') }} : </label>
                    <div class="col-lg-8">
                        <input name="phone" class="form-control" type="text" value="{{$profile->phone}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label"> {{ trans('title.Address') }} : </label>
                    <div class="col-lg-8">
                        <input name="address" class="form-control" type="text" value=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label"> {{ trans('title.Subcribe') }} : </label>
                    <div class="col-lg-8">
                        <input name="subcribe" class="form-control" type="text" value="{{$profile->subcribe}}">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">{{ trans('title.Name') }} : </label>
                    <div class="col-md-8">
                        <input name="name" class="form-control" type="text" value="{{$profile->name}}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label"> {{ trans('title.Password') }} : </label>
                    <div class="col-md-8">
                        <input name="password" class="form-control" type="password" >
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('passwordAgain') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label"> {{ trans('title.Confirm_Password') }} : </label>
                    <div class="col-md-8">
                        <input name="passwordAgain" class="form-control" type="password" >
                        @if ($errors->has('passwordAgain'))
                            <span class="help-block">
                                <strong>{{ $errors->first('passwordAgain') }}</strong>
                            </span>
                        @endif
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <button type="sumit" class="btn btn-primary" value="Save Changes"> {{ trans('title.Save') }} </button>
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
@endsection
