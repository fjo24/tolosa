@extends('pages.templates.body')
@section('title', 'Tolosa - Empresa')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/empresa.css') }}">
@endsection
@section('contenido')
   <div class="slider" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 120%; height: 110%">
            <div class="caption empresa_slider_dif" style="">
               <div style="padding-top: 25px">  
                  <span style="text-align: left; padding: 3%;font-weight: lighter;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;">{!! $slider->texto !!}</span><br>
                  <span style="padding: 3%;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: bold;">{!! $slider->texto2 !!}</span>
                  <hr style="position: absolute; left: 20px; bottom: 25px ;width: 80%">
               </div>
            </div>
          </li>
      @endforeach
      </ul>
   </div>
  <div class="container" style="width: 93%;">
<div class="empresa">  

  <div class="row" style="">
      <div class="col l5 s12 hide-on-med-and-down" >
          <img class="responsive-img" style="width: 470px; height: 419px" src="{!! $contenido->imagen !!}">
      </div>
      <br>
      <div class="col l7 s9">
          <p>{!! $contenido->titulo !!}</p>
          <p style="padding:  5px">{!! $contenido->contenido !!}</p>
          <hr>
          <p >{!! $contenido->contenido2 !!}</p>
          <hr>
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