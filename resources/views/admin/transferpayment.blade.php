@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
                 
@if($publishers)
    <div class="product-block">
     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
        @endif  
        <div class="pro-head">
            <h2>Inactive Publishers, Do you want to activate?? </h2>
        </div>
    <?php $i =1; ?>
    <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>S/N</th>
                                      <th>Email</th>                              
                                      <th>His Name</th>
                                      <th>Activate</th>                                 
                                      <th>Activate</th>  
                                      <th>Activate</th>
                                  </tr>
                              </thead>
                              <tbody>
           
            @foreach ( $publishers as $publisher)
                                
                              <tr>
                                  <td> {{ $i++}} </td>
                                  <td>{{$publisher->email }}         </td>
                                  <td> {{$publisher->name }}  </td>                
                                  <td>                
                                        <form method="POST" action="/transferpayment">
                                          {{csrf_field()}}
                                            <input type="hidden" value="1" name="plan" /> 
                                            <input type="hidden"  value= "{{$publisher->id }}" name="publisher_id">  
                                            <button type="submit" class="btn btn-info">Basic</button>

                                        </form> 
                                  </td> 
                                  <td>                
                                        <form method="POST" action="{{ route('transferpayment') }}">
                                          {{csrf_field()}}
                                            <input type="hidden" value="2" name="plan" />   
                                            <input type="hidden"  value= "{{$publisher->id }}" name="publisher_id">   
                                            <button type="submit" class="btn btn-success">Professional</button>

                                        </form> 
                                  </td>
                                  <td>                
                                        <form method="POST" action="{{ route('transferpayment') }}">
                                          {{csrf_field()}}
                                            <input type="hidden" value="3" name="plan" />  
                                            <input type="hidden"  value= "{{$publisher->id }}" name="publisher_id">    
                                            <button type="submit" class="btn btn-danger">Premium</button>

                                        </form> 
                                  </td>                    
                              </tr>
                          
            @endforeach


                          </tbody>
                      </table>
                  </div>
        
      <div class="clearfix"> </div>
    </div>

 @else
 <div class="inner-block">
    <div class="product-block">
     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
        @endif  
        <div class="pro-head alert alert-info">
            <h2>Sorry, no one to confirm their payment</h2>
        </div>
        
          
        
      <div class="clearfix"> </div>
    </div>
</div>
 @endif               
        
    </div>
</div>
@endsection
