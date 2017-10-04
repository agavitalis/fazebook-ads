@extends('layouts.general.master')
@section("content")
<!--top nav end here-->
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
					<h5>Growth Focused</h5>
					<p>Lorem ipsum dolor sit amet, conse etuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat massa dolore.</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>
			</div>
			<div class="col-md-8 about-right">
				
				<div class="col-md-6 ab-lft">
					<h4>ADVERTISERS</h4>
					<p>Social Media provides an unprecedented outreach for businesses. With Facebook alone boasting over two billion active monthly users, there is no better platform to meet potential customers and clients. Join the numerous advertisers already with us and watch your online presence soar, with the concomitant growth and traction.</p>
				</div>
				<div class="col-md-6 ab-lft">
					<h4>PUBLISHERS</h4>
					<p>On average, we all use Facebook, with many spending over five hours every day chatting away. How about we pay you just for a twenty-minute work online? Sounds cool, right? All you need to do is promote our clients’ companies. Simply share company ads on your timeline and make money on the go. It doesn’t get any simpler than this.</p>
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
			<p>In varius sem id aliquet rutrum. Pellentesque ut neque ligula. Fusce dapibus volutpat magna, ac feugiat dolor bibendum et. Integer dignissim gravida nunc, eget hendrerit enim. Quisque dapibus mollis finibus. Curabitur nulla enim, aliquet ac ultricies luctus, lacinia ut felis. Etiam aliquam massa nec lorem pulvinar porttitor. Maecenas in rutrum purus, eget consectetur arcu. Sed id pretium ligula, id hendrerit nunc. Nam ut tincidunt erat, sit amet accumsan risus..</p>
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