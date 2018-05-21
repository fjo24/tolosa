@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/productos.css') }}">
@endsection
@section('contenido')
<div class="container">
  
<div class="flex-containter">
    <div class="p_info">   
        <div style="margin: 7% 7%;">
          <div class="row">
              <div class="col l12 s12 m12">
                <div class="producto">
                  <div class="row" style="">
                      <div class="col l6 s12 hide-on-med-and-down" style="">
                          <img class="" style="" src="{{asset($obra->imagen)}}">
                      </div>
                      <div class="col l6 s12">
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;font-size: 39px; color: #BBC1BF!important;">{!! $obra->titulo !!}</p>
                          <p style="font-size: 20px; color: #32398E!important;">DESCRIPCIÓN</p>
                          <p style="font-size: 39px; font-weight: bold; color: #858585!important;">{!! $obra->descripcion !!}</p>
                          <p style="font-size: 20px; color: #32398E!important;">MATERIALES</p>
                          <p style="font-size: 39px; font-weight: bold; color: #858585!important;">{!! $obra->materiales !!}</p>
                          <a class="waves-effect waves-light btn" href="/presupuesto" style="position: relative;left:250px;top:30px;background-color: #32398E;font-family: 'Source Sans Pro', sans-serif!important;font-size: 15px;">Consultar por obra</a>

                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
   </div>
</div>
</div>
@endsection

@section('js')

@endsection