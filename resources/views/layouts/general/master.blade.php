<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to FacebookAds</title>
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery-1.11.0.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />


<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FacebookAds, Facebook, Online ads, Online advertisement, is facebookads real, is facebookads legit, make money with facebookads,
Make Money online, Make money from Facebook, Easy ways to make money online, facebookads, facebookads, Easy way to make money online, Facebook ads, Things to do online, sites to make money online,  Passive income, One easy way to make money online, Make money now online" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:900,800,700,600" type="text/css" media="all">
</head>
<body>
<!--header start here-->
<div class="header">
	<div class="container">
		<div class="header-main">
		<div class="header-right">
				   <div class="logo">
				   	   <h1><a href="/">FacebookAds</a></h1>
				   </div>
				
					 <div class="phone">
						<h2>FAD<span class="ph-numb"></span></h2>
					</div>
					<div class="form-group">
					<form action="#" method="post">
					<input type="text" name="text" class="form-control" placeholder="Search">
					<button type="submit" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
					</form>
				</div>
		    <div class="clearfix"> </div>
	     </div>	   
	        <!---->
     </div>
   </div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hvr-bounce-to-bottom active"><a href="/">Home</a></li>
						<li class="hvr-bounce-to-bottom"><a href="/howitworks">How It Works</a></li>
						<li class="hvr-bounce-to-bottom"><a href="/about">About Us</a></li>
						<li class="hvr-bounce-to-bottom"><a href="/marketplace">Marketplace</a></li>
						
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
						
					
				</div>	
			</div>
		</nav>		
	</div>	

    @yield('content')

	<div class="footer">
			<div class="container">	
				<div class="social">
			<h3>Follow Us</h3>
			<ul>
				<li><a href="#"><i class="facebok"> </i></a></li>
				<li><a href="#"><i class="twiter"> </i></a></li>
				<li><a href="#"><i class="inst"> </i></a></li>
				<li><a href="#"><i class="goog"> </i></a></li>
			</ul>
		</div>
				<p>&copy; 2017 FacebookAds . All Rights Reserved | Design by <a href="https://facebookads.com.ng">FacebookAds</a></p>				
			</div>
		</div>
	</div>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!--contact-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
       <script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>

<!-- //end-smoth-scrolling -->
<!--script-->
<script src="{{ asset('js/modernizr.custom.97074.js')}}"></script>
<script src="{{ asset('js/jquery.chocolat.js')}}"></script>
		<link rel="stylesheet" href="{{ asset('css/chocolat.css')}}" type="text/css"  media="all">
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!--script-->
</body>
</html>