@extends('layouts.advertizer.master')
@section('content')

<div class="inbox">
<h2>Register an advert</h2>
   	 
   <div class="col-md-8 col-md-offset-2 compose-right">
          <div class="inbox-details-default">
              <div class="inbox-details-heading">
                 Do you have an advert?? 
              </div>
              <div class="inbox-details-body">
                  <div class="alert alert-info">
                      Please register,your advert and we will be in touch
                  </div>
                  <form enctype="multipart/form-data" method="post" action="/regadd/{{$publisher->id}}" class="com-mail">
                  {{csrf_field()}}
                      <input type="text" name="phone"  value="{{$publisher->phone}}" placeholder="Phone :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
                      <input type="text" name="company_name" value="{{$publisher->company_name}}" placeholder="Company Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}">
                      <textarea row=3 column=1 name="about_add" >Tell us about the advert you intend to register..</textarea>
                      <input type="submit" value="Register my Advert"> 
                  </form>
              </div>
          </div>
      </div>

<div class="clearfix"> </div>     
</div>


@endsection