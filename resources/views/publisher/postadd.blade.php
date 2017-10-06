@extends('layouts.publisher.master')
@section('content')
<div class="pro-head">
	<h2>ADDs for the Day</h2>
</div>

<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="images/pro1.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4>Temporibus autem</h4>
	    			<h5>256 $</h5>
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
	    			<h5><button class="btn btn-success">Post to Facebook</button></h5>
	    		</div>
    		</div>
    	</div>

	<div class="col-md-8 col-md-offset-2 compose-right">
          <div class="inbox-details-default">
              <div class="inbox-details-heading">
                  Have you posted your adds?? 
              </div>
              <div class="inbox-details-body">
                  <div class="alert alert-danger">
                      Please upload evidence to the admin,NOTE Admins will check to see if your reall posted this Advert
                  </div>
                  <form class="com-mail">
                     
                      <input type="text"  value="Link to your add post" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Link to your add post';}">
                      
					  <div class="form-group">
                    		<label for="exampleInputFile">Upload a  snapshot</label>
                           <input type="file"  class="form-control" id="exampleInputFile" name="image" >
                    </div>
                      <input type="submit" value="Upload evidence"> 
                  </form>
              </div>
          </div>
      </div>

			<div class="clearfix"> </div>     
	

@endsection