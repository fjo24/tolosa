@extends('adm.layout.frame')

@section('titulo', 'Listado de slider')

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
						<td>Imagen</td>
						<td>Seccion</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
					@foreach($sliders as $slider)
						<tr>
							<td><img src="{{ asset($slider->imagen) }}" alt="seccion" width="400" height="150"/></td>
							<td>{{ $slider->seccion }}</td>
							<td class="text-right">
								<a href="{{ route('sliders.edit', $slider->id) }}"><i class="material-icons">create</i></a>
								{!!Form::open(['class'=>'en-linea', 'route'=>['sliders.destroy', $slider->id], 'method' => 'DELETE'])!!}
									<button onclick="return confirm('¿Realmente deseas borrar el slider?')" type="submit" class="submit-button">
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
</main><

@endsection

