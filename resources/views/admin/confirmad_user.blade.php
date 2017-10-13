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
            <h2>Publishers Assigned the Ad</h2>
        </div>
    <?php $i =1; ?>
    <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>S/N</th>
                                      <th>Email</th>                              
                                      <th>His link</th>
                                      <th>View Evidence</th>                                 
                                      <th>Status</th>  
                                      <th> Confirm and credit</th>
                                  </tr>
                              </thead>
                              <tbody>
           
            @foreach ( $publishers as $publisher)
                                
                              <tr>
                                  <td> {{ $i++}} </td>
                                  <td>{{$publisher->publisher_id }}         </td>
                                  <td> {{$publisher->link }}  </td>
                                  
                                  <td>

                                  @if($publisher->address == null)
                                     <span class="label label-warning"/> None Uploaded</span>
                                  @else
                                        <div class="project-eff">
                                            <div id="nivo-lightbox-demo"> <p> <a href="/storage/{{$publisher->address}}" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
                                            <button src="/storage/{{$publisher->address}}" class="btn btn-info"/> View ScreenShoot</button>
                                        </div>
                                   @endif

                                  
                                  </td>                                 
                                                             
                                  <td>
                                            @if( $publisher->confirmed == 0 )
                                  
                                                <span class="label label-warning"> Not Confirmed</span>
                                            @else
                                                <span class="label label-success">Confirmed</span>

                                             @endif
                                   </td>
                                   
            
                                
                                  <td> 

                                
                                        <form method="POST" action="{{ route('credit_user') }}">
                                          {{csrf_field()}}
                                            <input type="hidden" value="{{ $publisher->publisher_id }}" name="credit" />      
                                            <button type="submit" class="btn btn-success"> Confirm and Credit</button>

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
            <h2>Sorry, no one to confirm his evidence</h2>
        </div>
        
          
        
      <div class="clearfix"> </div>
    </div>

 @endif               
        
    </div>
</div>
@endsection
