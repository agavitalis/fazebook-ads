@extends('layouts.publisher.master')
@section('content')

<div class="inbox">
<h2>Publisher Details</h2>
<div class="col-md-4 compose">   	 	
   <div class="mail-profile">
       <div class="mail-pic">
           <a href="#"><img src="{{asset('publisher/images/b3.png')}}" alt=""></a>
       </div>
       <div class="mailer-name"> 			
               <h5><a href="#">Malorum</a></h5>  	 				
                <h6><a href="mailto:info@example.com">malorum@gmail.com</a></h6>   
       </div>
       <div class="clearfix"> </div>
   </div>
   <div class="compose-bottom">
       <ul>
           <li><a class="hilate" href="#"><i class="fa fa-user"> </i>Name</a></li>
           <li><a href="#"><i class="fa fa-envelope-o"> </i>Email</a></li>
           <li><a href="#"><i class="fa fa-phone"> </i>Phone</a></li>
           <li><a href="#"><i class="fa fa-pencil-square-o"> </i>Account No</a></li>
           <li><a href="#"><i class="fa fa-bank"> </i>Bank Name</a></li>
           <li><a href="#"><i class="fa fa-user"> </i>Account Name</a></li>
           <li><a href="#"><i class="fa fa-star-o"> </i>Plan</a></li>
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
                  <form class="com-mail">
                      <input type="text"  value="Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'To';}">
                      <input type="text"  value="Email :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                      <input type="text"  value="Phone :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'To';}">
                      <input type="text"  value="Bank Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                      <input type="text"  value="Account Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'To';}">
                      <input type="text"  value="Account No :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                      
                         <!-- <div class="form-group">
                          <div class="btn btn-default btn-file">
                              <i class="fa fa-paperclip"> </i> Attachment
                              <input type="file" name="attachment">
                          </div>
                      </div> -->
                      <input type="submit" value="Update Profile"> 
                  </form>
              </div>
          </div>
      </div>

<div class="clearfix"> </div>     
</div>


@endsection