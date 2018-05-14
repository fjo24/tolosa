@extends('adm.layout.frame')

@section('titulo', 'Contenido en sección empresa')

@section('contenido')
<main>
	<div class="container-fluid">
	    @if(count($errors) > 0)
		<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
	  		<ul>
	  			@foreach($errors->all() as $error)
	  				<li>{!!$error!!}</li>
	  			@endforeach
	  		</ul>
	  	</div>
		@endif
		@if(session('success'))
		<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
			{{ session('success') }}
		</div>
		@endif

		<div class="row">
			<div class="col s12">
				<table class="highlight bordered">
				<thead>
					<td>Imagen</td>
					<td>Descripción</td>
					<td class="text-right">Acciones</td>
				</thead>
				<tbody>
				@foreach($contenidos as $contenido)
					<tr>
						<td><img src="{{ asset($contenido->imagen) }}" alt="seccion" width="300" height="300"/></td>
						<td>{!!$contenido->descripcion!!}</td>
						<td class="text-right">
							<a href="{{ route('contenidoempresa.edit',$contenido->id)}}"><i class="material-icons">create</i></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>			
			</div>
		</div>
    </div>
</main>
<script type="text/javascript" src="{{ asset('js/eliminar.js') }}"></script>

@endsection