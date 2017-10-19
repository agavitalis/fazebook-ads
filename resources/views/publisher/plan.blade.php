@extends('layouts.publisher.master')
@section('content')
	
<div class="price-block-main">
    	<div class="prices-head">
    		<h2>Our Advert Plans</h2>
    	</div>
    	<div class="price-tables">
	    		<div class="col-md-4 price-grid">
	    		   <div class="price-block">
		    			<div class="price-gd-top pric-clr1">
		    				<h4>Basic</h4>
		    				<h3><span class="usa-dollar">N</span>3,000<span class="per-month">/mon</span></h3>
		    				<h5>Receive N6,000 worth of ADs</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>Cashout on weekends</li>
									<li>N50 cashout charge</li>
									<li>5% Referral Bonus</li>
			    					<li>1 Advert perday</li>
			    					<li>20 referals Maximum</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr1">		    			   
		    			   	  <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2">
		    				<h4>Professional</h4>
		    				<h3><span class="usa-dollar">N</span> 5,000<span class="per-month">/mon</span></h3>
		    				<h5>Receive N10,000 worth of ADs </h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>Cashouts on weekend</li>
			    					<li>N50 cashout charge</li>
									<li>1 Advert perday</li>
									<li>5% Referral Bonus</li>
			    					<li>70 referals Maximum</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr2">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr3">
		    				<h4>Premium</h4>
		    				<h3><span class="usa-dollar">N</span>10,000<span class="per-month">/mon</span></h3>
		    				<h5>Receive N20,000 worth of ADs </h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
                                <li>Cashout on weekends</li>
                                <li>No cashout charge at month end</li>
								<li>1 Advert perday</li>
								<li>5% Referral Bonus</li>
                                <li>Infinite referals</li>
                                <li>Free advert request in 50 referals</li>
                                <li>Publisher bonus in 50 referals</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr3">
		    			   	<a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
    	       </div>
    	  <div class="clearfix"> </div>
    	  </div>
   </div>


<!--pop-up-grid-->
<div id="popup">
                        <div id="small-dialog" class="mfp-hide">
                        <div class="pop_up">
                            <div class="payment-online-form-left">
                                <form>
									<h4><span class="shoppong-pay-1"> </span>Pay at</h4>
									<p>BANK NAME: Fidelity Bank</p>
									<p>ACCOUNT NAME: BOOKADS MEDIA</p>
                                    <p>ACCOUNT NUMBER: 6060261213</p>
                                    <div class="clear"></div>
                                    <h4 class="paymenthead"><span class="payment"></span>"send payment details to: payment@facebookads.com.ng" OR></li>
              					  </h4>
                                    <div class="clear"></div>										
                                   
                                    <ul class="payment-sendbtns">
                                      
                                        <li><a href="#" class="order">Pay with Vougue Pay</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    
<!--pop-up-grid-->

<!--pop up strat here-->
<script src="{{asset('publisher/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>
<!--pop up end here-->




@endsection