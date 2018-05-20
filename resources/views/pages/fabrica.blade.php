@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/fabrica.css') }}">
@endsection
@section('contenido')
<div class="container-fluid">

   <div class="slider hide-on-med-and-down" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 120%; height: 110%">
            @if(isset($slider->texto)||isset($slider->texto2))
            <div class="caption servicio_slider_dif" style="">
               <div style="padding-top: 25px">  
                  <span style="text-align: left; padding: 3%;font-weight: lighter;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;">{!! $slider->texto !!}</span><br>
                  <span style="padding: 3%;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: bold;">{!! $slider->texto2 !!}</span>
                  <hr style="position: absolute; left: 20px; bottom: 25px ;width: 80%">
               </div>
            </div>
            @endif
          </li>
      @endforeach
      </ul>
   </div>
  <div class="fabrica">
    <div class="row" style="">
        <div class="col l7 s12 hide-on-med-and-down" style="width: 52%">
            <img class="responsive-img" src="{!! $fabrica->imagen !!}">
        </div>
        <div class="col l5 s12" style="width: 570px;padding-top: 15px;">
            <p>{!! $fabrica->titulo !!}</p>
            <p>{!! $fabrica->contenido !!}</p>
            <p>{!! $fabrica->titulo2 !!}</p>
            <p>{!! $fabrica->contenido2 !!}</p>
        </div>
    </div>
  </div>



</div>
@endsection

@section('js')
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 334
    });
  
</script>
@endsection