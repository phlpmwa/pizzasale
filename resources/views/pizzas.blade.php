  @extends('layouts.layout')
  @section('content')
       
       <div class="flex-center position-ref full-height">
            
            
            <div class="content">
                <div class="title m-b-md">
                   Pizza List
                </div>

          /* <!-- <p>//{{$type}}-{{$base}}-{{$price}}</p>-->
            @for($i=0;$i<count($pizzas);$i++)
            <p>{{$pizzas[$i]['type']}}</p>
            @endfor
           <!-- @for($i=0; $i<5; $i++)
            <p> the value of i is {{$i}}
            </p>
            @endfor-->

            <!--
            @if($price>15)
            <p>this pizza is expensive</p>
          
            @else
            <p>Good price</p>
            @endif
               @unless ($base=="Cheesy crust")
                   <p>you don't have a cheesy crust</p>
               @endunless

               @php
                   $name='philip';
                   echo($name);
               @endphp
               -->*/
            </div>
        </div>
    @endsection