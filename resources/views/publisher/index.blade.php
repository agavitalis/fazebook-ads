@extends('layouts.publisher.master')
@section('content')
	<!--market updates updates-->
	<div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3>N:{{$publisher->balance}}</h3>
						<h4>Account Balance</h4>
						<p>Your earning so far</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					 @if($publisher->plan == 1)
					<h3>Basic</h3>
					<h4>Plan</h4>
					<p>You current Plan</p>
					@elseif($publisher->plan == 2)
					<h3>Professional</h3>
					<h4>Plan</h4>
					<p>You current Plan</p>
					@elseif($publisher->plan == 3)
					<h3>Premium</h3>
					<h4>Plan</h4>
					<p>You current Plan</p>
					@else
					<h3>Inactive</h3>
					<h4>Account</h4>
					<p>Please choose a Plan</p>
					@endif
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>N:{{$publisher->referal_balance}}</h3>
						<h4>Referal Balance</h4>
						<p>Your Bonuses due to referals</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-tasks"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		
	<div class="main-page-charts">
		<div class="main-page-chart-layer1">
				<div class="col-md-6 col-md-offset-3 chart-layer1-right"> 
					<hr>
					<div class="user-marorm">
					<div class="malorum-top">				
					</div>
					<div class="malorm-bottom">
					@if($publisher->profilepics != null)
					<span class="malorum-pro"><img class="user-image img-responsive img-circle" src="{{$publisher->profilepics}}" alt="cover picture"></span>
					@else
					<span class="malorum-pro"><img class="user-image img-responsive img-circle" src="images/default.png" alt="cover picture"></span>
					@endif
						<h4>Hello</h4>
						<h2>{{$publisher->name}}</h2>
						<p>Welcome to FacebookAd, A good place to be.</p>
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