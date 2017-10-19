@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
                 
@if($advertizer)
    <div class="product-block">
     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
        @endif  
        <div class="pro-head">
            <h2>Here are some advertizers, that sent an advert </h2>
        </div>
    <?php $i =1; ?>
    <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>S/N</th>
                                      <th>Email</th>                              
                                      <th>Name</th>
                                      <th>Phone</th>
                                      <th>Company</th>                                 
                                      <th>About Advert</th>  
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
           
            @foreach ( $advertizer as $advertizer)
                                
                              <tr>
                                  <td> {{ $i++}} </td>
                                  <td>{{$advertizer->email }}  </td>
                                  <td> {{$advertizer->name }}  </td>
                                  <td> {{$advertizer->phone }}  </td> 
                                  <td> {{$advertizer->company_name }}  </td>                         
                                  <td> {{$advertizer->url }}  </td>     
                                  <td>                
                                        <form method="POST" action="{{ route('viewadvertizer') }}">
                                          {{csrf_field()}} 
                                            <input type="hidden"  value= "{{$advertizer->id }}" name="advert">    
                                            <button type="submit" class="btn btn-danger">Delete</button>

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
            <h2>You dont have any advertizer at the moment</h2>
        </div>
        
          
        
      <div class="clearfix"> </div>
    </div>
</div>
 @endif               
        
    </div>
</div>
@endsection
