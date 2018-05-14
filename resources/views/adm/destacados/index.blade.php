@extends('adm.layout.frame')

@section('titulo', 'Destacados en el home')

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
					<td>Link</td>
					<td>Orden</td>
					<td class="text-right">Acciones</td>
				</thead>
				<tbody>
				@foreach($destacados as $destacado)
					<tr>
						<td><img src="{{ asset($destacado->imagen) }}" alt="seccion" width="400" height="150"/></td>
						<td>{!!$destacado->descripcion!!}</td>
						<td>{!!$destacado->link!!}</td>
						<td>{!!$destacado->orden!!}</td>
						<td class="text-right">
							<a href="{{ route('destacados.edit',$destacado->id)}}"><i class="material-icons">create</i></a>
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