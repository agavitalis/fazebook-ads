@extends('layouts.publisher.master')
@section('content')
<div class="pro-head">
	<h2>ADDs for the Day, share picture ads and the links</h2>
</div>
<div id="fb-root"></div>
@foreach($adverts as $advert)
	@if($advert->state == 1)
    	<div class="col-md-4 col-md-offset-4 product-grid">
    		<div class="product-items">
	    		   <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="/storage/{{$advert->address}}"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="/storage/{{$advert->address}}" alt="">
					</div>
	    		<div class="produ-cost">
					<h4>{{$advert->website}}</h4>
	    			<h5><button class="btn btn-success"><a href="/readmore/{{$advert->id}}">  Read more and Share</a></button></h5>
	    		</div>
				
		
    		</div>
    	</div>
	@else
	<div class="col-md-4 col-md-offset-4 product-grid">
		<div class="alert alert-danger">
			You dont have any add yet
		</div>
	</div>

	@endif
@endforeach


	<div class="col-md-6 col-md-offset-3 compose-right">


   
		  <div class="inbox-details-default">
              <div class="inbox-details-heading">
                  Have you posted your adds?? 
              </div>
              <div class="inbox-details-body">
                  <div class="alert alert-danger">
                      Please upload evidence to the admin,NOTE Admins will check to see if your reall posted this Advert
                  </div>
                  <form enctype="multipart/form-data" method="post" action="/postadd/{{$publisher->id}}" class="com-mail">
				  {{csrf_field()}}
				                    
				
                    <input type="text" name="link"  value="Link to where you posted the advert" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Link to you posted your advert';}">                     
					<div class="form-group">
                    	<label for="exampleInputFile">Upload a  snapshot</label>
                        <input type="file"  class="form-control" id="exampleInputFile" name="advert" >
                    </div>
                      <input type="submit" value="Upload evidence"> 
                  </form>
              </div>
          </div>
      </div>

			<div class="clearfix"> </div>     
	

@endsection