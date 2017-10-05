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
                            <tr>
                              <td>1</td>
                              <td>Face book</td>
                              <td>Malorum</td>                                 
                                                         
                              <td><span class="label label-danger">in progress</span></td>
                              <td><span class="badge badge-info">50%</span></td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>Twitter</td>
                              <td>Evan</td>                               
                                                              
                              <td><span class="label label-success">completed</span></td>
                              <td><span class="badge badge-success">100%</span></td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Google</td>
                              <td>John</td>                                
                              
                              <td><span class="label label-warning">in progress</span></td>
                              <td><span class="badge badge-warning">75%</span></td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>LinkedIn</td>
                              <td>Danial</td>                                 
                                                         
                              <td><span class="label label-info">in progress</span></td>
                              <td><span class="badge badge-info">65%</span></td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>Tumblr</td>
                              <td>David</td>                                
                                                             
                              <td><span class="label label-warning">in progress</span></td>
                              <td><span class="badge badge-danger">95%</span></td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td>Tesla</td>
                              <td>Mickey</td>                                  
                                                         
                              <td><span class="label label-info">in progress</span></td>
                              <td><span class="badge badge-success">95%</span></td>
                          </tr>
                        </tbody>
                        </table>
                        </div>

                        <div class="chit-chat-heading">
                            Referal Link:agavitalisogbonna@gmail.com
                        </div>
         </div>
  </div>
  
 <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->

@endsection