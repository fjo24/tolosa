@extends('pages.templates.body')
@section('title', 'Tolosa - Producto')
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
            <div class="links col l12 s12 m12">
              <h7>
                <a href="/categorias" style="color: gray";>productos • </a>
                <a href="{{ route('productos', $categoria->id)}}" style= "color: gray;text-transform: lowercase">{!!$categoria->nombre !!} • </a>
                <a href="" style="color: gray";>{!!$producto->nombre !!}</a>
              </h7>
            </div>
              <div class="col l12 s12 m12">
                <div class="producto">
                  <div class="row" style="">
                      <div class="col l6 s12 hide-on-med-and-down" style="">
                          <img class="" style="" src="{{asset('img/producto/6_otras6.png')}}">
                      </div>
                      <div class="col l6 s12" >
                          <p style="font-size: 39px; font-weight: bold; color: #858585!important;">{!! $producto->nombre !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->texto_principal !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->titulo1 !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->contenido1 !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->titulo2 !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->contenido2 !!}</p>
                          <a class="waves-effect waves-light btn" href="{{ route('modelos', $producto->id)}}">Ver modelos</a>
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