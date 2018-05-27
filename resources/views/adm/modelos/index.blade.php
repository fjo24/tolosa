@extends('adm.layout.frame')

@section('titulo', 'Listado de modelos')

@section('contenido')
<main>
	<div class="container">
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
						<td>Nombre</td>
						<td>Grupo</td>
						<td>Administrar imagenes</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
					@foreach($modelos as $modelo)
						<tr>
							<td>{!!$modelo->nombre!!}</td>
							<td>{!!$modelo->producto->nombre!!}</td>
							<td><a href="{{ route('imagenmod',$modelo->id)}}"><i class="material-icons">image</i></a></td>
							<td class="text-right">
								<a href="{{ route('modelos.edit',$modelo->id)}}"><i class="material-icons">create</i></a>
								{!!Form::open(['class'=>'en-linea', 'route'=>['modelos.destroy', $modelo->id], 'method' => 'DELETE'])!!}
									<button onclick='return confirm_delete(this);' type="submit" class="submit-button">
										<i class="material-icons red-text">cancel</i>
									</button>
								{!!Form::close()!!}
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