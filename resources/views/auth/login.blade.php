@extends('layouts.app')

@section('content')

<div class="div_for_login">
    <form  role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                <label>Login</label><br>                          
                    <input class="myinput" id="login" type="login"  name="login" value="{{ old('login') }}" required placeholder="Login">
                        @if ($errors->has('login'))
                            <span class="help-block">
                                <strong>{{ $errors->first('login') }}</strong>
                            </span>
                        @endif                            
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label>Password</label><br>                         
                    <input class="myinput" id="password" type="password"  name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                            
            </div>         
                <button type="submit" class="loginbutton">Login</button>
                
                <a class="viafacebook" href="{{url('login/facebook')}}">Login Via Facebook</a>
                <a class="viagoogle" href="{{url('login/google')}}">Login Via Google</a>
                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>  -->
                    </form>
                </div>    


@endsection
