@extends('pages.templates.body')
@section('title', 'Tolosa - Modelos')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/productos.css') }}">

@endsection
@section('contenido')

<div class="flex-containter">
   	<div class="categorias">   
      	<div style="margin: 7% 7%;">
         	<div class="row">
         		<h7>
            		<a href="/categorias" style="color: gray";>productos • </a>
            		<a href="{{ route('productos', $categoria->id)}}" style= "color: gray;text-transform: lowercase">{!!$categoria->nombre !!} • </a>
            		<a href="" style= "color: gray;text-transform: lowercase">{!!$producto->nombre !!}</a>
            	</h7>
	            <div class="col l12 s12 m12">
	               @foreach($modelos as $modelo)  
	                    <div class="col l4 s10 m4">
	                        <div class="div-product">
	                           	<a href="{{ route('modeloinfo', $modelo->id)}}">
	                           		@foreach($modelo->imagenes as $imagen)
	                             		<img style="width: 373px;height: 284px;" class="responsive-img" src="{{asset($imagen->ubicacion)}}" alt="">
	                             		@if($ready == 0)	
	                             		@break;
	                             	@endif
	                             	@endforeach

	                              	<hr align="left">
	                                <div class="div-nombre">
	                                	{!!$modelo->nombre !!}
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