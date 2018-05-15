@extends('adm.layout.frame')

@section('titulo', 'Lista de redes sociales')

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
		<div class="col-xs-12 col-md-12">
		
			@include('flash::message')
			<div class="row">
			<div class="col s12">
				<table class="highlight bordered">
					<thead>
						<tr>
							<th class="text-center">Logo</th>
							<th class="text-center">Nombre</th>
							<th class="text-center">Link</th>
							<th class="text-center">Ubicacion</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						@foreach($redes as $red)
						<tr>
							<td class="text-center"><img src="{{ asset($red->logo) }}" alt="logo-red-social"></td>
							<td class="text-center">{{ $red->nombre }}</td>
							<td class="text-center">{{ $red->link }}</td>
							<td class="text-center">{{ $red->ubicacion }}</td>
							<td>
								<a href="{{ route('redes.edit',$red->id)}}"><i class="material-icons">create</i></a>
								{!!Form::open(['class'=>'en-linea', 'route'=>['redes.destroy', $red->id], 'method' => 'DELETE'])!!}
									<button onclick="return confirm('¿Realmente deseas borrar el elemento?')" type="submit" class="submit-button">
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
	</div>
	</div>
</main>
@endsection