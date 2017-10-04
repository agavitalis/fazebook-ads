@extends('layouts.general.master')
@section("content")

<div class="main-agileinfo slider ">
    <div class="items-group">
        <div class="item agileits-w3layouts">
            <div class="block text main-agileits"> 
                <span class="circleLight"></span> 
                <!-- login form -->
                <div class="login-form loginw3-agile"> 
                    <div class="agile-row">
                        <h1>Welcome</h1> 
                        <div class="login-agileits-top"> 	
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                                <p>Email </p>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>     

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <p>Password</p>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif  
                                <label class="anim">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>   
                                <input type="submit" value="Login" name="login"> 
                            </form> 	
                        </div> 
                        <div class="login-agileits-bottom wthree"> 
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                        </a>
                        </div> 
                    </div>  
                </div>  
            </div>
            <div class="w3lsfooteragileits">
                <p> &copy; 2017 FacebookAds. All Rights Reserved | Design by <a href="facebookads.com.ng" target="=_blank">FacebookAds</a></p>
            </div> 
        </div>   
    </div>
</div>	 
@endsection