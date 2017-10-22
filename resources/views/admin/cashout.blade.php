@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
                 
@if($publishers)
                   
     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
        @endif  
        <div class="pro-head">
            <h2>These Publishers requested for cashout</h2>
        </div>
    <?php $i =1; ?>
    <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                      <th>S/N</th>
                                      <th>Email</th> 
                                      <th>Account Name</th>                              
                                      <th>Bank Name</th>
                                      <th>Account No</th>                                 
                                      <th>Amount</th>  
                                      <th>Status</th>
                                      <th>Confirm</th>
                                      <th>Delete</th>
                                    </tr>
                                </thead>
                            <tbody>
           
            @foreach ( $publishers as $publisher)
                                
                              <tr>
                                  <td> {{ $i++}} </td>
                                  <td>{{$publisher->email }}</td>
                                  <td>{{$publisher->accountname }}</td>
                                  <td>{{$publisher->bankname }}</td>
                                  <td>{{$publisher->accountno }}</td>
                                 
                                  <td>{{$publisher->amount }}</td>
                                  <td>
                                            @if( $publisher->paid == 0 )
                                  
                                                <span class="label label-warning">Not Paid </span>
                                            @else
                                                <span class="label label-success">Paid</span>

                                             @endif
                                   </td>
                                  
                                   <td> 
                                        <form method="POST" action="{{ route('seecashouts') }}">
                                          {{csrf_field()}}
                                            <input type="hidden" value="{{ $publisher->id}}" name="id" /> 
                                            <input type="hidden" value="confirm" name="task" />           
                                            <button type="submit" class="btn btn-success"> Confirm</button>
                                        </form> 
                                  </td>                        
                                  <td> 
                                        <form method="POST" action="{{ route('seecashouts') }}">
                                          {{csrf_field()}}
                                            <input type="hidden" value="{{ $publisher->id }}" name="id" />
                                            <input type="hidden" value="delete" name="task" />            
                                            <button type="submit" class="btn btn-success"> Delete</button>
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

    <div class="product-block">
         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif  
        <div class="pro-head alert alert-info">
            <h2>No cashouts yet</h2>
        </div>    
      <div class="clearfix"> </div>
    </div>

 @endif               
        
    </div>
</div>
@endsection
