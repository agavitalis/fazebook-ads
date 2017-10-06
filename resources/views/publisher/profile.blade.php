@extends('layouts.publisher.master')
@section('content')

<div class="inbox">
<h2>Publisher Details</h2>
<div class="col-md-4 compose">   	 	
   <div class="mail-profile">
       <div class="mail-pic">
           <a href="#"><img src="{{$publisher->profilepics}}" height="90px" width="90px" alt="Upload Profile pics"></a>
       </div>
       <div class="mailer-name"> 			
               <h5><a href="#">{{$publisher->name}}</a></h5>  	 				
                <h6><a href="mailto:info@example.com">{{$publisher->email}}</a></h6>   
       </div>
       <div class="clearfix"> </div>
   </div>
   <div class="compose-bottom">
       <ul>
           <li><a class="hilate" href="#"><i class="fa fa-user">&nbsp </i>Name: {{$publisher->name}}</a></li>
           <li><a href="#"><i class="fa fa-envelope-o">&nbsp</i>Email: {{$publisher->email}}</a></li>
           <li><a href="#"><i class="fa fa-phone"> &nbsp</i>Phone: {{$publisher->phone}}</a></li>
           <li><a href="#"><i class="fa fa-pencil-square-o">&nbsp </i>Account No: {{$publisher->accountno}}</a></li>
           <li><a href="#"><i class="fa fa-bank"> &nbsp</i>Bank Name: {{$publisher->bankname}}</a></li>
           <li><a href="#"><i class="fa fa-user">&nbsp </i>Account Name: {{$publisher->accountname}}</a></li>
           <li><a href="#"><i class="fa fa-star-o">&nbsp </i>Plan: {{$publisher->plan}}</a></li>
           <li><a href="#"><i class="fa fa-star-o">&nbsp </i>Status: {{$publisher->status}}</a></li>
       </ul>
   </div>
</div>   	 
   <div class="col-md-8 compose-right">
          <div class="inbox-details-default">
              <div class="inbox-details-heading">
                  Want to Update your Profile?? 
              </div>
              <div class="inbox-details-body">
                  <div class="alert alert-info">
                      Please fill details to update your profile
                  </div>
                  <form enctype="multipart/form-data" method="post" action="/profile/{{$publisher->id}}" class="com-mail">
                  {{csrf_field()}}
                      <input type="text" name="name" value="{{$publisher->name}}" placeholder="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                      <input type="text" name="email" disabled="true" value="{{$publisher->email}}" placeholder="Email :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                      <input type="text" name="phone"  value="{{$publisher->phone}}" placeholder="Phone :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
                      <input type="text" name="bankname" value="{{$publisher->bankname}}" placeholder="Bank Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Bank Name';}">
                      <input type="text" name="accountname" value="{{$publisher->accountname}}" placeholder="Account Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Account Name';}">
                      <input type="text" name="accountno" value="{{$publisher->accountno}}" placeholder="Account No :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Account No';}">
                      
                         
                    <div class="form-group">
                    <label for="exampleInputFile">Profile Picture</label>
                        <input type="file"  class="form-control" id="exampleInputFile" name="image" >
                    </div>
                      <input type="submit" value="Update Profile"> 
                  </form>
              </div>
          </div>
      </div>

<div class="clearfix"> </div>     
</div>


@endsection