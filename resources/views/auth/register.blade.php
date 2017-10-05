@extends('layouts.general.master')

@section('content')
<link href="{{ asset('css/register.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- main --> 
	<div class="main-agileinfo slider ">
		<div class="items-group">
			<div class="item agileits-w3layouts">
				<div class="block text main-agileits"> 
					<span class="circleLight"></span> 
		 			<!-- login form -->
					<div class="login-form loginw3-agile"> 
						<div class="agile-row">
							<h1>Register With Us</h1> 
							<div class="login-agileits-top"> 	
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                             {{ csrf_field() }}
									<p>Name </p>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif

									<p>Email </p>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif						
									<p>Phone </p>
                                    <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
									<p>Password</p>
									
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
									<span class="pass-error help-block" style="color:red;display:none;">Password should not be less than 6 characters</span>
									<span class="pass-success glyphicon glyphicon-ok" style="color:green;display:none;position: relative;left:85%;top:-26px;"></span>
									<p>Confirm Password </p>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>						
                                    <div class="radio">
                                    <label><input type="radio" value="pp" required="" name="usertype">I am a publisher</label>
                                    </div>
                                    <div class="radio">
                                    <label><input type="radio" value="aa" required="" name="usertype">I am an advertizer</label>
                                    </div>
                                    <hr>
                                    <input type="submit" value="Register" name="register"> 
								</form> 	
							</div> 
						</div>  
					</div>   
				</div>
				<div class="w3lsfooteragileits">
					<p> &copy; 2017 FacebookAds. All Rights Reserved | Design by <a href="facebookads.com.ng" target="_blank">FacebookAds</a></p>
				</div> 
			</div>   
		</div>
	</div>	 
	<!-- //main --> 
<script>
	$("#password").keydown(function() {
		var pass = $(".password").val();
		if(pass.length < 6) {
			$(".pass-error").fadeIn();
			$(".pass-success").hide();
		}else {
			$(".pass-error").fadeOut();
			$(".pass-success").fadeIn();
		}
	});
</script>
@endsection
