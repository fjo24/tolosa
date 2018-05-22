@extends('pages.templates.body')
@section('title', 'Tolosa - Servicio')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/servicios.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/empresa.css') }}">
@endsection
@section('contenido')
<div class="flex-containter">
  <div class="slider hide-on-med-and-down" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 120%; height: 110%">
            @if(isset($slider->texto)||isset($slider->texto2))
            <div class="caption empresa_slider_dif" style="">
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

   <div class="servicios" style="align-items: center">   
      <div style="margin: 7% 7%;">
         <div class="row"  style="align-items: center;">
            <span style ="position: relative;left: -25px;color: #32398C;font-family: 'Source Sans Pro', sans-serif;font-size: 47px;">Nuestros Servicios</span>
            <div class="col l12 s12 m12">
               @foreach($servicios as $servicio)  
                     <div class="col l3 s12 m6" style="justify-content: center;align-items: center;margin:20px 0px;">
                          <div class="card" style="justify-content: center;align-items: center;background-color: green;">
                            <div class="card-panel"  style="border:0px;background-color: #32398E; height: 300px; padding: 20px 0px;">
                              <span class="activator" style="position:relative;color: white; justify-content: center; align-items: center;width: 30%;"><img style="background-color: red;align-items: center;margin-left: auto;
  margin-right: auto;" class="responsive-img" src="{{asset($servicio->imagen)}}" alt="">
                              </span>
                              <hr>
                              <div class="titulo_servicio">
                              <p style="font-family: 'Source Sans Pro', sans-serif;text-align: center;line-height: 100%;font-weight: bold; font-size: 20px;background-color: #32398E;">{!! $servicio->titulo !!}</p>
                              <p style="font-family: 'Source Sans Pro', sans-serif;text-align: center;line-height: 100%;font-weight: lighter; font-size: 20px;background-color: #32398E;">{!! $servicio->subtitulo !!}</p>
                              </div>
                            </div>
                            <div class="card-content" style="background-color: #32398E; height: 50%; padding: 0px;">
                              <span class="card-title activator grey-text text-darken-4" style="background-color: #32398E; margin: 0px;"><i class="material-icons" style="align-items: center; padding-left: 82px; height: 5px;color: white;">keyboard_arrow_up</i></span>
                            </div>
                            <div class="card-reveal" style="background-color: #171B42;">
                              <span class="card-title activator grey-text text-darken-4" style=" background-color: #171B42;"><i class="material-icons" style="align-items: center; padding-left: 58px; height: 5px;color: white;padding-top: 0px;">keyboard_arrow_down</i></span>
                              <p style="text-align: center;line-height: 100%;font-weight: bold; font-size: 50px;background-color: #32398E; ">{!! $servicio->descripcion !!}</p>
                            </div>
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
        height: 334
    });
  
</script>
@endsection