@extends('layouts.publisher.master')
@section('content')
	
<div class="product-block">
    	<div class="pro-head">
    		<h2>ADDs for the day</h2>
    	</div>
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="images/pro1.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4>Temporibus autem</h4>
	    			<button class="btn btn-success"> <h5>Post to facbook</h5>   </button>
	    		</div>
    		</div>
    	</div>
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		   <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="images/pro2.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4>Temporibus autem</h4>
	    			<h5 class="btn btn-success">156 $</h5>
	    		</div>
    		</div>
    	</div>
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro3.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="images/pro3.jpg" alt="">
				</div>
	    		<div class="produ-cost">
	    			<h4>Temporibus autem</h4>
	    			<h5>500 $</h5>
	    		</div>
    		</div>
    	</div>
    	
    	
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro12.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="images/pro12.jpg" alt="">
				</div>
	    		<div class="produ-cost">
	    			<h4>Temporibus autem</h4>
	    			<h5>150 $</h5>
	    		</div>
    		</div>
    	</div>
      <div class="clearfix"> </div>
    </div>

	<div class="col-md-8 col-md-offset-2 compose-right">
          <div class="inbox-details-default">
              <div class="inbox-details-heading">
                  Have you posted your adds?? 
              </div>
              <div class="inbox-details-body">
                  <div class="alert alert-danger">
                      Please upload evidence to the admin
                  </div>
                  <form class="com-mail">
                      <input type="text" disabled="true" value="Admins will confirm if your really posted this advert" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Admins will confirm if your really posted this advert';}">
                      <input type="text"  value="Link to your add post" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Link to your add post';}">
                      
                         <div class="form-group">
                          <div class="btn btn-default btn-file">
                              <i class="fa fa-paperclip"> </i>Upload a snap shot
                              <input type="file" name="attachment">
                          </div>
                      </div>
                      <input type="submit" value="Upload evidence"> 
                  </form>
              </div>
          </div>
      </div>

			<div class="clearfix"> </div>     
	</div>

@endsection