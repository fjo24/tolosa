@extends('pages.templates.body')
@section('title', 'Tolosa - Producto')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/productos.css') }}">

@endsection
@section('contenido')

<div class="container" style="width: 123%;">
   	<div class="categorias">   
      	<div style="margin: 7% 73px 35px 34px;">
         	<div class="row">
         		<h7>
            		<a href="/categorias" style="color: gray";>productos • </a>
            		<a href="" style= "color: gray;text-transform: lowercase">{!!$categoria->nombre !!}</a>
            	</h7>
	            <div class="col l12 s12 m12">
	               @foreach($productos as $producto)  
	                    <div class="col l4 s4 m4">
	                        <div class="div-product">
	                           	<a href="{{ route('productoinfo', $producto->id)}}">
									@foreach($producto->imagenes as $imagen)
	                             		<img style="width: 373px;height: 284px;" class="responsive-img" src="{{asset($imagen->ubicacion)}}" alt="">
	                             		@if($ready == 0)	
	                             		@break;
	                             	@endif
	                             	@endforeach

	                              	<hr align="left">
	                                <div class="div-nombre">
	                                	{!!$producto->nombre !!}
	                                </div>
	                           	</a>
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

@endsection