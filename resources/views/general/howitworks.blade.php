@extends('layouts.general.master')
@section("content")
<!--top nav end here-->
<!--banner start here-->
<div class="banner">
</div>
<!--banner end here-->
<!--services-->
	<div class="services w3agile" id="services">
		<div class="container">
			<h3>How it Works</h3>
			<div class="col-md-12 col-sm-12 services-left">
				<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
				<h4>Publishers</h4>
				<p>
				You register to become a member. This gives you access to your dashboard where you can set up your profile as you want. 
				As a publisher, you have three ads publishing plans to choose. You can buy the 3k, 5k or 10k plan for one month. Payment is done on the platform with your debit card or through your bank. Just click the make payment and follow the prompt. For any plan you choose, you earn 10% of the amount every day for every successful company advert shared on your timeline. You have one ad to share every weekday. You can withdraw your earnings to your bank account every weekend. Please see our Terms and Conditions.
				You have to check your dashboard for the adverts to share every morning between 9am and 12noon. You lose the earnings for the day if you fail to share these ads on your timeline within this timeframe. These are company adverts and our clients expect their products to be shared on time.
				In order to be credited, you must upload proof of shared post by taking a screenshot of the post on your timeline.
				We organize a publisher fare where lucky winners get subscription fee waiver for the following month. 
				It is not compulsory to refer anyone but just in case you decide to inform your friends about us, every publisher has a referral link and you get N1000 for every person that registers via your link. When you get ten referrals, you become a super-publisher. Basically, it means you can get up to two ads in a day.
				We offer 100% money back guarantee for unsatisfied members. A user who asks for refund within three days of registration is paid in full, provided he has not cashed out in the period.

				</p>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 services-left">
				<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
				<h4>Advertizers</h4>
				<p>
				We have made our platform as robust and scalable as possible for our advertisers – companies, bloggers, service providers, product developers to ensure maximum return on their investments. When you register as an advertiser, you choose the number of shares you want and submit your order. Our business support team contacts you and take it from there. When you are satisfied with the share to price ratio, we give you an analytics page and help you track the shares. What are you waiting for? Make your product go viral with a click now.
				</p>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
<!--services-->



<!--contact-->
<div class="contact" id="contact">
		<div class="container">
			<h3>Get In touch</h3>
			<div class="contact-info">
				<div class="col-md-8 contact-grids">
					<form action="#" method="post">
						<input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" name="telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="col-md-4 contact-grids agileinfo">
					<p>In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt velit sapien est Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>					
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							756 globel Place, Australia.
						</li>					
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							+123 2222 222
						</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<a href="mailto:example@mail.com">mail@example.com</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection