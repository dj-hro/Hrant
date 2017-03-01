@extends('layouts.app')

@section('content')
<div class="div_for_register">
    <form  role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}




    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label>Name</label><br>                            
            <input id="name" type="text" class="myinput" name="name" value="{{ old('name') }}" required placeholder="Name">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif                            
    </div>




    <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
        <label>Login</label><br>                            
            <input id="login" type="login" class="myinput" name="login" value="{{ old('login') }}" required placeholder="Login">
                @if ($errors->has('login'))
                    <span class="help-block">
                        <strong>{{ $errors->first('login') }}</strong>
                    </span>
                @endif                            
    </div>



    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label>E-Mail Address</label><br>                            
            <input id="email" type="email" class="myinput" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif                            
    </div>



    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label>Password</label><br>                            
            <input id="password" type="password" class="myinput" name="password" required placeholder="Password" 
                @if ($errors->has('password'))
                    <span class="help-block">
                         <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif                            
    </div>



    <div class="form-group">
        <label>Confirm Password</label><br>                            
            <input id="password-confirm" type="password" class="myinput" name="password_confirmation" required placeholder="Confirm Password">                            
    </div>

                        
    <button type="submit" class="registerbutton">Register</button>                        
    </form>
</div>
@endsection
