@extends('adm.layout.frame')

@section('titulo', 'Editar slider')

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
			{!!Form::model($slider, ['route'=>['sliders.update',$slider->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col l6 s12">
						{!!Form::label('Link:')!!}
						{!!Form::text('link', null , ['class'=>''])!!}
					</div>
					<div class="file-field input-field col l6 s12">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('imagen',null, ['class'=>'file-path']) !!}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l6 s12">
						{!! Form::select('seccion', ['home' => 'home', 'empresa' => 'empresa', 'servicios' => 'servicios', 'obras' => 'obras', 'fabrica' => 'fabrica', 'presupuesto' => 'presupuesto'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione sección']) !!}
					</div>
					<div class="input-field col l6 s12">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="col s12">
					     <div class="input-field col l6 s12">
							{!!Form::label('texto:')!!}
							{!!Form::text('texto', null , ['class'=>''])!!}
						</div>
						<div class="input-field col l6 s12">
							{!!Form::label('texto2:')!!}
							{!!Form::text('texto2', null , ['class'=>''])!!}
						</div>
				    </div>
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Editar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>

@endsection