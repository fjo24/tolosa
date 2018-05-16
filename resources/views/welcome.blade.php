@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('contenido')
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
@endsection