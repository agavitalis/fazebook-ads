@extends('layouts.publisher.master')
@section('content')

<div class="inbox">
<h2>Cashout details</h2>   	 
   <div class="col-md-8 col-md-offset-2 compose-right">
          <div class="inbox-details-default">
              <div class="inbox-details-heading">
                 Do you want to cash out?? Your withdrawable amount is :N{{$publisher->balance}}
              </div>
              <div class="inbox-details-body">
                  <div class="alert alert-info">
                      Please confirm his details to cash out
                  </div>
                  <form class="com-mail">  
                       {{csrf_field()}}
                      <input type="text" name="bankname" value="{{$publisher->bankname}}" placeholder="Bank Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Bank Name';}">
                      <input type="text" name="accountname" value="{{$publisher->accountname}}" placeholder="Account Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Account Name';}">
                      <input type="text" name="accountno" value="{{$publisher->accountno}}" placeholder="Account No :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Account No';}">
                      <input type="text" name="Amount" value="{{$publisher->balance}}" placeholder="Amount :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Amount';}">
                      <input type="submit" value="Confirm and Cashout"> 
                  </form>
              </div>
          </div>
      </div>

<div class="clearfix"> </div>     
</div>


@endsection