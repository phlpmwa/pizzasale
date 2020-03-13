  @extends('layouts.layout')
  @section('content')
       
       <div class="flex-center position-ref full-height">
            
            
            <div class="content">
                <div class="title m-b-md">
                   Pizza List
                </div>

          @foreach($pizzas as $pizza)
                <div>
               {{$loop->index}} -- {{$pizza['type']}}--{{$pizza['base']}}
                 @if($loop->first)
                 <p>-----first operation-------</p>
                 @endif
                 @if($loop->last)
                 <p>-----last operation-------</p>
                 @endif
                </div>
            @endforeach
            </div>
        </div>
    @endsection