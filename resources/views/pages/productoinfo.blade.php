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
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 floatInherit slider-detalle">
                        <div class="slider hide-on-med-and-down" style="width: 480; height: 480;" >
                          <ul class="slides" style="background-color: white">
                             @foreach($producto->imagenes as $img)
                           <li>
                              <img src="{{asset($img->ubicacion)}}" style="width: 380px; height: 380px">
                           </li>
                          @endforeach
                          </ul>
                       </div> 


                    </div>
                      <div class="col l6 s12" >
                          <p style="font-size: 39px; font-weight: bold; color: #858585!important;">{!! $producto->nombre !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->texto_principal !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->titulo1 !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->contenido1 !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->titulo2 !!}</p>
                          <p style="font-family: 'Source Sans Pro', sans-serif!important;">{!! $producto->contenido2 !!}</p>
                          
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
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 484;
        
    });
  
</script>
@endsection