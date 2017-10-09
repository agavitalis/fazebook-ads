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
			<h3>Private Policy</h3>
			<div class="col-md-12 col-sm-12 services-left">
				<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
				<h4>Our Private Policy</h4>
				<p>
				The purpose of this Privacy Policy is to let you know what kinds of information we may gather about you, how we may use that information, whether we disclose it to anyone, and the choices you have regarding our use of the information. 

                We hold only a minimal amount of information on each registered client. In order to register, we only require a name, email address, username and a password. Prior to sending any payments, we may also require address verification.

                We only hold information in order to allow users to log into and run their accounts. 

                - We store your personal data securely 
                - We DO NOT pass your personal data to third parties, unless you specifically ask us to for a particular purpose (e.g. a competition) or as required by law 
                - We do not send junk mail (or spam). We send occasional site updates by email, and you can choose the type of mailings you receive by editing your profile. 

                Users may request to see any information that we hold on them. This may include transaction information, account totals, contact details and other information. Users may request this information from our support/contact us page. 

                If you feel Facebookads.com.ng is not following its stated information policy, then they may inform us through our support ticket page. 

                <h4> Cookies</h4>
                We recommend that all users enable cookies in their internet browsers in order to make full use of the site and in order to ensure that any transactions on third party sites are recorded. Cookies are small pieces of information that are stored by your browser on your computer's hard drive and they are used to record how you navigate this website on each visit. The information cannot be seen by any other websites (so the information is secure) and is used by us to provide features to aid the use of our services. If users do not have cookies enabled, it is likely that some of the features of the site may not work properly.

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