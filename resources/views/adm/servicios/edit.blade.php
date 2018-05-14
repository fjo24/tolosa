@extends('adm.layout.frame')

@section('titulo', 'Editar servicio')

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
			{!!Form::model($servicio, ['route'=>['servicios.update',$servicio->id], 'method'=>'PUT', 'files' => true])!!}	
				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Titulo:')!!}
						{!!Form::text('titulo', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Descripción:')!!}
						{!!Form::text('descripcion', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Actualizar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>
@endsection