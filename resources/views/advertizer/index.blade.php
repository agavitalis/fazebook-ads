@extends('layouts.advertizer.master')
@section('content')
	<!--market updates updates-->
	<div class="main-page-charts">
		<div class="main-page-chart-layer1">
				<div class="col-md-6 col-md-offset-3 chart-layer1-right"> 
					<hr>
					<div class="user-marorm">
					<div class="malorum-top">				
					</div>
					<div class="malorm-bottom">
					
					<span class="malorum-pro"><img class="user-image img-responsive img-circle" src="images/default.png" alt="cover picture"></span>
					
						<h4>Hello</h4>
						<h2>{{$publisher->name}}</h2>
						<p>Welcome to FacebookAds, We help you spread your words.</p>
						<ul class="malorum-icons">
							<li><a href="#"><i class="fa fa-facebook"> </i>
								<div class="tooltip"><span>Facebook</span></div>
							</a></li>
							<li><a href="#"><i class="fa fa-twitter"> </i>
								<div class="tooltip"><span>Twitter</span></div>
							</a></li>
							<li><a href="#"><i class="fa fa-google-plus"> </i>
								<div class="tooltip"><span>Google</span></div>
							</a></li>
						</ul>
					</div>
				</div>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--main page chart layer2-->

@endsection