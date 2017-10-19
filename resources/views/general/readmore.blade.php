
<!DOCTYPE HTML>
<html>
<head>
<title>Facebookads</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="facebookad" />
<!--for facebook advert-->
<meta name="discription" content="hello world to facebooads"/>
<meta property="og:url" content="http://www.facebookads.com.ng/readmore/{{$advert->id}}" />
  <meta property="og:type"  content="website" />
  <meta property="og:title" content="{{$advert->title}}" />
  <meta property="og:description" content="Share and Earn, Publish adverts from facebookads.com.ng, and make some cash..make some cash while you facebook" />
  <meta property="og:site_name" content="Facebookads.com.ng" />
  <meta property="og:image"  content="www.facebookads.com.ng/public/{{$advert->address}}" />
  <meta property="fb:app_id" content="605697173154043"/>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{asset('publisher/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{asset('publisher/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{asset('publisher/js/jquery-2.1.1.min.js')}}"></script> 
<!--icons-css-->
<link href="{{asset('publisher/css/font-awesome.css')}}" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="{{asset('publisher/js/Chart.min.js')}}"></script>
<!--//charts-->


<!--skycons-icons-->
<script src="{{asset('publisher/js/skycons.js')}}"></script>
<!--//skycons-icons-->

<!--script for thw share buttons-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=605697173154043";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!--another share tool-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5933115e3c1e902c"></script>
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="/"> <h1>FacebookADS</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<div class="clearfix"> </div>
						 </div>
						 @guest

						 @else
						 <div class="header-right">
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
														<!-- <span class="profil-img"><img  src="{{$publisher->profilepics}}" height="40px" width="40px" alt=""> </span>  -->
												<div class="user-name">
													<p>"{{$publisher->name}}"</p>
													<span>Online</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
						@endguest
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->

<div class="inner-block">
    <div class="blank">
    	<h2>Sponsored post</h2>
    	<div class="blankpage-main">
			@if(!empty($advert))
				<div>
					<img class="img-responsive" src="/public/{{$advert->address}}" alt="">
				</div>

					<div class="shoppy">
        				<h3> {{$advert->title}}</h3>
					</div>
				 <!-- Go to www.addthis.com/dashboard to customize your tools -->
				 <div class="addthis_inline_share_toolbox"></div>
       
					<div
						class="fb-like"
						data-share="true"
						data-width="450"
						data-show-faces="true">
					</div>
					<div class="fb-share-button" 
						data-href="http://www.facebookads.com.ng/readmore/{{$advert->id}}" 
						data-layout="button_count">
					</div>     
        
    				<p> <span>Read more at:<a href=" {{$advert->website}}" target="_blank"> {{$advert->website}}</a></span><br>
						{{$advert->description}} 
					</p>

				@else
					<div class="alert alert-info">
					No sponsored posts yet
					</div>

				@endif
					<div class="clearfix"> </div>
    	</div>
    </div>
</div>

<!--climate end here-->

<!--inner block end here-->
<link rel="stylesheet" type="text/css" href="{{asset('publisher/css/magnific-popup.css')}}">
			<script type="text/javascript" src="{{asset('publisher/js/nivo-lightbox.min.js')}}"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>

<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 FacbookAD. All Rights Reserved | Design by  <a href="#" target="_blank">Facebookads</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
				<li id="menu-home" ><a href="/pub"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
				<li id="menu-home" ><a href="/plan"><i class="fa fa-cogs"></i><span>Choose a plan</span></a></li>
				<li id="menu-home" ><a href="/postadd"><i class="fa fa-upload"></i><span>Post my ADs</span></a></li>
				<li id="menu-home" ><a href="/cashout"><i class="fa fa-money"></i><span>Cashout</span></a></li>
				<li id="menu-home" ><a href="/profile"><i class="fa fa-user"></i><span>Profile</span></a></li>
				<li id="menu-home" ><a href="/referal"><i class="fa fa-users"></i><span>Referal Links</span></a></li>	        
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="{{asset('publisher/js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('publisher/js/scripts.js')}}"></script>
		<!--//scrolling js-->
<script src="{{asset('publisher/js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>                     