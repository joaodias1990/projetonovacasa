@extends('layouts.app')

@section('body')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Nova</b>Casa</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login</p>

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

        @if ($errors->has('email'))
        <span class="glyphicon glyphicon-envelope form-control-feedback">
            {{ $errors->first('email') }}
        </span>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
        @if ($errors->has('password'))
        <span class="glyphicon glyphicon-lock form-control-feedback">
            {{ $errors->first('password') }}
        </span>
        @endif
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
      
    </form>

    

    <a href="{{ route('password.request') }}">Recuperar password</a><br>
    <a href="{{ route('register') }}" class="text-center">Registar</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
