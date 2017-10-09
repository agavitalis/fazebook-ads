@extends('layouts.publisher.master')
@section('content')

<style type="text/css">
 
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 
</style>
<div class="pro-head">
	<h2>ADDs for the Day, share ads and earn</h2>
</div>
<div id="fb-root"></div>
<!--climate start here-->
<div class="climate">
	@if($advert != null)
	<div class="col-md-8 col-md-offset-2 climate-grids">
		<div class="climate-grid2">
            <img class="image-responsive" src="/storage/{{$advert->address}}" alt="">
		</div>
		<div class="shoppy">
        <h3>The beauty of facebook ad?</h3>
        <!-- I got these buttons from simplesharebuttons.com -->
				<div id="share-buttons"> Share:
					
					<!-- Buffer -->
					<a href="https://bufferapp.com/add?url={{$advert->id}}&amp;text=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
					</a>
					
					<!-- Digg -->
					<a href="http://www.digg.com/submit?url={{$advert->id}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
					</a>
					
				
					<!-- Facebook -->
					<a href="http://www.facebook.com/sharer.php?u={{$advert->id}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
					</a>
					
					<!-- Google+ -->
					<a href="https://plus.google.com/share?url={{$advert->id}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
					</a>
					
					<!-- LinkedIn -->
					<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{$advert->id}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
					</a>
					
					
					
					<!-- Reddit -->
					<a href="http://reddit.com/submit?url={{$advert->id}};title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
					</a>
					
					<!-- StumbleUpon-->
					<a href="http://www.stumbleupon.com/submit?url={{$advert->id}}&amp;title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
					</a>
					
					<!-- Tumblr-->
					<a href="http://www.tumblr.com/share/link?url={{$advert->id}}&amp;title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
					</a>
					
					<!-- Twitter -->
					<a href="https://twitter.com/share?url={{$advert->id}}&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
					</a>
					
					<!-- VK -->
					<a href="http://vkontakte.ru/share.php?url={{$advert->id}}" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
					</a>
					
					<!-- Yummly -->
					<a href="http://www.yummly.com/urb/verify?url={{$advert->id}}&amp;title=Simple Share Buttons" target="_blank">
						<img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
					</a>

				</div>
        <p>
            <span>Read more at: {{$advert->website}}</span><br>

            {{$advert->description}}
    
        
        </p>
		</div>
	</div>
    @else
    <div class="alert alert-info">
        no ads yet
    </div>

    @endif
	<div class="clearfix"> </div>
</div>
<!--climate end here-->
@endsection