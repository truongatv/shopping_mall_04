@extends('layouts.master')

@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container">
            <h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>{{ trans('auth.login') }}</strong></h1>
        </div>
    </section>
@endsection

@section('content')

<section class="site-content site-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                {!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'form-log-in', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                    {!!Form::email('email', $value = '', ['class' => 'form-control input-lg', 'placeholder' => 'Email'])!!}
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
                                    {!!Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => 'Password',])!!}
                                </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-6">
                                <label class="switch switch-primary">
                                    <input type="checkbox" id="login-remember-me" name="remember" "checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><span></span>
                                </label>
                                <small>{{ trans('auth.remember_me') }}</small>
                            </div>
                            <div class="col-xs-6 text-right">
                                {!!Form::submit(trans('auth.login'), ['class' => 'btn btn-sm btn-primary'])!!}
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="text-primary btn">
                                {{ trans('auth.login_with') }}
                            </div>
                            <a style="font-size:24px" class="btn btn-info" href="redirect/facebook"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
            <hr>
        </div>
    </section>
@endsection
