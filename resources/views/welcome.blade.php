@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/home.css') }}">
@endsection
@section('contenido')
<div class="container-fluid">
   <div class="slider" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 120%; height: 110%">
            <div class="caption" style="text-align: left; position: absolute;top: 35%;left: 7%;font-size:50px; background-color: rgba(23, 27, 66, 0.9); width: 467px; height: 200px; line-height: 100%; font-family: 'Source Sans Pro', sans-serif">
               <div style="padding-top: 25px">  
                  <span style="text-align: left; padding: 3%;font-weight: lighter;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;">{!! $slider->texto !!}</span>
                  <span style="padding: 3%;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: bold;">{!! $slider->texto2 !!}</span>
                  <hr style="position: absolute; left: 20px; bottom: 25px ;width: 80%">
               </div>
            </div>
            </li>
      @endforeach
      </ul>
   </div>
   <div class="home col s12">
      <div class="row titulo">
         {!! $home->titulo !!}
      </div>
      <hr>
      <div class="row contenido">
         {!! $home->contenido !!}
      </div>
   </div>
   <div class="destacados">   
      <div style="margin: 7% 7%;">
         <div class="row">
            <div class="col s12">
               @foreach($destacados as $destacado)  
                     <div class="col s6 m6" style="margin-top: 4%;">
                        <div class="div-product">
                           <img style="width: 100%;" class="responsive-img" src="{{asset($destacado->imagen)}}" alt="">
                           <div class="div-nombre">{!!$destacado->descripcion !!}</div>
                        </div>
                     </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>

</div>
@endsection

@section('js')
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 549
    });
  
</script>
@endsection