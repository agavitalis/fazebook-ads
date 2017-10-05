@extends('layouts.publisher.master')
@section('content')

<div class="inbox">
<h2>Cashout details</h2>   	 
   <div class="col-md-8 col-md-offset-2 compose-right">
          <div class="inbox-details-default">
              <div class="inbox-details-heading">
                 Do you want to cash out?? Your withdrawable amount is :N 
              </div>
              <div class="inbox-details-body">
                  <div class="alert alert-info">
                      Please confirm his details to cash out
                  </div>
                  <form class="com-mail">
                      
                      <input type="text"  value="Bank Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Bank Name';}">
                      <input type="text"  value="Account Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Account NAme';}">
                      <input type="text"  value="Account No :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Account N0';}">
                      <input type="text"  value="Amount :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Amount';}">
                      
                         <!-- <div class="form-group">
                          <div class="btn btn-default btn-file">
                              <i class="fa fa-paperclip"> </i> Attachment
                              <input type="file" name="attachment">
                          </div>
                      </div> -->
                      <input type="submit" value="Confirm and Cashout"> 
                  </form>
              </div>
          </div>
      </div>

<div class="clearfix"> </div>     
</div>


@endsection