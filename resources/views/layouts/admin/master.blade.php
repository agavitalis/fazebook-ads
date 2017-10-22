
<!DOCTYPE HTML>
<html>
<head>
<title >{{$title or "FaceBook Ads"}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FacebookAd" />
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
<!--//skycons-icons-->
</head>
<body>  
<div class="page-container">    
   <div class="left-content">
       <div class="mother-grid-inner">
            <!--header start here-->
            
                <div class="header-main">
                    <div class="header-left">
                            <div class="logo-name">
                                     <a href="#"> <h1>FaceBookADs</h1> 
                                    <!--<img id="logo" src="" alt="Logo"/>--> 
                                  </a>                              
                            </div>
                            <!--search-box-->
                                  <div class="clearfix"> </div>
                         </div>
                         <div class="header-right">
                            <div class="profile_details_left"><!--notifications of menu start -->
                            <ul class="nofitications-dropdown">
                           
                        </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <!--notification menu end -->
                            <div class="profile_details">       
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">   
                                                <span class="prfil-img"><img src="{{asset('images/p1.png')}}" alt=""> </span> 
                                                <div class="user-name">
                                                    <p>{{ Auth::user()->name }}</p>
                                                    <span>Administrator</span>
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
@if ($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('success') }}
          </div>
        @endif

        @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('error') }}
          </div>
		@endif
@yield('content')
</div>

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
     <p>© 2017 FaceBookAds. All Rights Reserved | Design by  <a href="#" target="_blank">Facebookads</a> </p>
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
                <li id="menu-home" ><a href="#"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-cogs"></i><span>Ads</span><span class="fa fa-angle-right" style="float: right"></span></a>
                  <ul>
                    <li><a href="{{ route('addads') }}">Add Ads</a></li>
                    <li><a href="{{ route('adminindex') }}">View Ads</a></li>                    
                    <li><a href="{{ route('publishedad') }}">Published Ads</a></li>                    
                  </ul>
                </li>
                
                  
                
                
                 <li><a href="#"><i class="fa fa-cog"></i><span>Confirm Evidence</span><span class="fa fa-angle-right" style="float: right"></span></a>
                     <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href=" {{ route('confirmads') }} ">Credit & Confirm</a></li>
                         </ul>
                 </li>
                 <li id="menu-home" ><a href="/transferpayment"><i class="fa fa-money"></i><span>Activate Pubs</span></a></li>
                 <li id="menu-home" ><a href="/seecashouts"><i class="fa fa-money"></i><span>Cashouts</span></a></li>
             
                 <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Advertisers</span><span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="/viewadvertizer">Manage Advertizers</a></li>
                        <li id="menu-academico-boletim" ><a href="#">Price</a></li>
                     </ul>
                 </li>
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
<script src="{{asset('publisher/js/bootstrap.js') }}"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
                        
