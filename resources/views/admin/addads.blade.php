@extends('layouts.admin.master')

@section('content')
@if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif  
    @if (count($errors) > 0)
        <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                </ul>
        </div>
    @endif    

<div class="col-md-8 col-md-offset-2 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Add a new advert 
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to publish a new advert
							</div>
							
                            <form class="com-mail"  method="POST" action="{{ route('addads') }}" name="adverts" enctype="multipart/form-data"> 
                              {{ csrf_field() }}

                              <input name="title" type="text"  value="Advert Title :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Advert Title';}">
								

								<input name="website" type="text"  value="Advert Website :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Advert Website';}">
								
								<textarea name="description" rows="6"  value="Message :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">A full discription of the advert </textarea>
								<div class="form-group">
                                      <input type="file" name="advert" placeholder="Upload a cover picture" >
								</div>
                               
                                <input type="submit" name="add" value="Publish Advert"> 
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div> 


@endsection
