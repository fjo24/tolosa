@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/servicios.css') }}">
@endsection
@section('contenido')
<div class="container-fluid">

   <div class="slider" >
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