@extends('layouts.app')

@section('content')
    @guest
        <div class="d-md-flex flex-row-reverse">
          <div class="signin-right">

            <div class="signin-box">
              <h2 class="signin-title-primary">Welcome back!</h2>
              <h3 class="signin-title-secondary">Sign in to continue.</h3>
              <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" name="login" id="login">
                  @csrf
                  <div class="form-group">
                    <input class="form-control" placeholder="Enter your email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div><!-- form-group -->
                  <div class="form-group mg-b-50">
                    <input class="form-control" placeholder="Please enter your password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  </div><!-- form-group -->
                  <a href="http://dasboard.variusworldtech.com/user/index.html"><button class="btn btn-primary btn-block btn-signin">Sign In</button></a>
                  <p class="mg-b-0">Don't have an account? <a href="#" onclick="document.getElementById('login').submit();">Sign Up</a></p>
               </form>
            </div>

          </div><!-- signin-right -->
          <div class="signin-left">
            <div class="signin-box">
              <h2 class="slim-logo"><a href="index.html">Varius World Tech</a></h2>

              <p>Varius World Technology are excited to launch our new ICO raising funds to developer our inductsty specific Distributed Ledger Technology protocol. </p>

              <p>Browse our site and see for yourself why you should invest in VWT!</p>

              <p><a href="http://vwt.bet" class="btn btn-outline-secondary pd-x-25">Learn More</a></p>

              <p class="tx-12">&copy; Copyright 2018. All Rights Reserved.</p>
            </div>
          </div><!-- signin-left -->
        </div><!-- d-flex -->
    @else
       
    @endguest
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
