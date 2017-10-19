@extends('layouts.general.master')
@section("content")
<!--banner start here-->
<div class="banner">
</div>
<!--banner end here-->

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-4 about-left">
				<div class="ab-top">
					<h3>100%</h3>
					<h5>Customer Support</h5>
					<p>We are very much concerned with the growth of our advertisers and publishers. For advertisers, we provide a platform to reach organic traffic and gain as many customers as possible. </p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>
			</div>
			<div class="col-md-8 about-right">
				
				<div class="col-md-6 ab-lft">
					<h4>Connecting Brands to Consumers</h4>
					<p>Facebookads.com.ng is an online rewards platform that pays members cash for their online and mobile activities. We connect consumers and advertisers in a way that benefits both. We reward members for their everyday activities such as reading posts and sharing on their timelines, signing up for offers. We leverage this loyalty platform to create effective customer acquisition and brand engagement campaigns for advertisers and market research partners.</p>	</div>
				<div class="col-md-6 ab-lft">
					<h4>Flexible and Performance-Based</h4>
					<p>Our advertisers and market research partners pay only for the results we deliver, and our members receive cash, not points, for their activities. This flexible, profitable model has resulted in thousands paid to members since incorporation. Advertisers and market research partners receive an efficient way to reach motivated and targeted online and mobile audiences.
					Contact us for more details about how we can engage our members with your brand.
				</div>
				<div class="clearfix"></div>
				<div class="abt-bottom">
					
				
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--about-->
  <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Pellentesque vehicula</h4>
		  </div>
		  <div class="modal-body">
		  <p>Socal media has over a third of the world population and there couldn’t be a better place to find your customers. You can be sure that every product, service, offer, advert, promo and discount get to the intended people. We provide analytic dashboard to track the shares on your listings. Our publishers are verified Facebook users and have a lot of reach and friends. Your posts are shared and kept on their timelines.
		  Our emoluments are enticing for our publishers. They are rewarded for each posts shared and retained on their timeline. This ensures that both parties benefit from the programme.
		  </p>
		  </div>
		</div>
	</div>
  </div>
  <!--// Modal -->

<!--services-->
	<div class="services w3agile" id="services">
		<div class="container">
			<h3>Services Overview</h3>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
				<h4>Hardware</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
				<h4>Networking</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				<h4>Innovation</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>Development</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
				<h4>Communication</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
				<h4>Marketing</h4>
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