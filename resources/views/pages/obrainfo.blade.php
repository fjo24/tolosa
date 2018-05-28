@extends('pages.templates.body')
@section('title', 'Tolosa - Obra')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/productos.css') }}">
@endsection
@section('contenido')
  
<div class="container" style="width: 113%">
    <div class="l">   
        <div style="margin: 85px -37px -15px 65px">
          <div class="row">
            <h7 style="position: relative;top:-35px; left: 15px;">
                <a href="/obras" style="color: gray";>obras • </a>
                <a href="" style= "color: gray;text-transform: lowercase">{!!$obra->titulo !!}</a>
              </h7>
              <div class="col l12 s12 m12">
                <div class="producto">
                  <div class="row" style="">
                      <div class="col l6 s12 hide-on-med-and-down" style="">
                          <img class="" style="width: 100%" src="{{asset('img/fabrica/2_FABRICA.png')}}">
                      </div>
                      <div class="col l6 s12" style="width: 500px; margin-right: 20px;">
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

@endsection

@section('js')

@endsection