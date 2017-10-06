@extends('layouts.publisher.master')
@section('content')
	<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
<div class="col-md-8 col-md-offset-2 chit-chat-layer1-left">
           <div class="work-progres">
                        <div class="chit-chat-heading">
                             Your Referals and referal links are
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>                                   
                                                                    
                                  
                                  <th>Status</th>
                                  <th>Plan</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($referals as $referal)
                            <tr>
                              <td>1</td>
                              <td>{{$referal->name}}</td>
                              <td>{{$referal->email}}</td>                                 
                                                         
                              <td><span class="label label-danger">{{$referal->status}}</span></td>
                              <td><span class="badge badge-info">{{$referal->plan}}</span></td>
                          </tr>
                         @endforeach
                          <!-- <tr>
                              <td>6</td>
                              <td>Tesla</td>
                              <td>Mickey</td>                                  
                                                         
                              <td><span class="label label-info">in progress</span></td>
                              <td><span class="badge badge-success">95%</span></td>
                          </tr> -->
                        </tbody>
                        </table>
                        </div>

                        <div class="">
                            Referal Link:https://www.facebookad.com?ref={{Auth::user()->email}};
                        </div>
         </div>
  </div>
  
 <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->

@endsection