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
	    			<h4>{{$advert->description}}</h4>
					<h4>{{$advert->website}}</h4>
	    			<h5><button class="btn btn-success"><a href="/storage/{{$advert->address}}">  Download</a></button></h5>
	    		</div>
				<!-- I got these buttons from simplesharebuttons.com -->
				<div id="share-buttons">
					
					<!-- Buffer -->
					<a href="https://bufferapp.com/add?url={{$advert->website}}&amp;text=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
					</a>
					
					<!-- Digg -->
					<a href="http://www.digg.com/submit?url={{$advert->website}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
					</a>
					
				
					<!-- Facebook -->
					<a href="http://www.facebook.com/sharer.php?u={{$advert->website}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
					</a>
					
					<!-- Google+ -->
					<a href="https://plus.google.com/share?url={{$advert->website}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
					</a>
					
					<!-- LinkedIn -->
					<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{$advert->website}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
					</a>
					
					
					
					<!-- Reddit -->
					<a href="http://reddit.com/submit?url={{$advert->website}};title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
					</a>
					
					<!-- StumbleUpon-->
					<a href="http://www.stumbleupon.com/submit?url={{$advert->website}}&amp;title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
					</a>
					
					<!-- Tumblr-->
					<a href="http://www.tumblr.com/share/link?url={{$advert->website}}&amp;title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
					</a>
					
					<!-- Twitter -->
					<a href="https://twitter.com/share?url={{$advert->website}}&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
					</a>
					
					<!-- VK -->
					<a href="http://vkontakte.ru/share.php?url={{$advert->website}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
					</a>
					
					<!-- Yummly -->
					<a href="http://www.yummly.com/urb/verify?url={{$advert->website}}&amp;title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
					</a>

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

<style type="text/css">
 
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 
</style>
   
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