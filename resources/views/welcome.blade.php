@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('contenido')
<div class="container-fluid">
@foreach($sliders as $slider)
   <div class="slider">
      <ul class="slides">
         <li>
            <img src="{{asset($slider->imagen)}}">
            <div class="caption center-align">
               <h5>
                  <p><span style="color:#2b130f">OTOÑO 2018</span></p>
               </h5>
               <h3>
                  <p><span style="color:#2b130f"><strong>CHOCOLATE CALIENTE</strong></span></p>
               </h3>
            </div>
         </li>
      </ul>
   </div>
   @endforeach
   <div class="col s12">
      <div class="row contenido">
         {!! $home->contenido !!}
      </div>
   </div>
   <div style="margin: 0px 7%;">
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
@endsection