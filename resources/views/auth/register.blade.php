@extends('layouts.master')

@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container">
            <h1 class="text-center animation-slideDown"><i class="fa fa-plus"></i> <strong>{{ trans('auth.signup') }}</strong></h1>
        </div>
    </section>
@endsection

@section('content')
    <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                            <div class="field-row">

                        {!! Form::open(['route' => 'register', 'id' => 'form-sign-up', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                            <!-- <form class="form-horizontal" id="form-sign-up" method="POST" action="{{ route('register') }}"> -->
                            {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            {!!Form::text('name', $value = '', ['class' => 'form-control input-lg', 'placeholder' => 'Name'])!!}
                                                <!-- <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="{{ trans('auth.name') }}" required autofocus>
 -->
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            {!!Form::email('email', $value = '', ['class' => 'form-control input-lg', 'placeholder' => 'Email'])!!}
                                             <!--  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('auth.email') }}" required> -->
                                        </div>
                                        @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            {!!Form::password('password', ['class' => 'form-control input-lg', 'id' => 'password',  'placeholder' => 'Password'])!!}
                                        </div>
                                        @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            {!!Form::password('password', ['class' => 'form-control input-lg', 'id' => 'password-confirm', 'name' => 'password_confirmation', 'placeholder' => 'Password'])!!}
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-xs-6 text-center">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> {{ trans('auth.signup') }}</button>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-primary btn">
                                            {{ trans('auth.signup_with') }}
                                        </div>
                                        <a style="font-size:24px" class="btn btn-info" href="redirect/facebook"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                 </div>
                        {!!Form::close()!!}
                        </div>
                    </div>
                </div>
@endsection
