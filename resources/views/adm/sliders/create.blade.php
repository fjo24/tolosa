@extends('adm.layout.frame')

@section('titulo', 'Crear slider')

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
		@include('flash::message') 
		<div class="row">
			<div class="col s12">
			{!!Form::open(['route'=>'sliders.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Link:')!!}
						{!!Form::text('link', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="file-field input-field col s6">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('imagen',null, ['class'=>'file-path ']) !!}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						{!! Form::select('seccion', ['home' => 'home', 'empresa' => 'empresa', 'servicios' => 'servicios', 'obras' => 'obras', 'fabrica' => 'fabrica',], null, ['class' => 'form-control', 'placeholder' => 'Seleccione sección']) !!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="col s12">
					     <div class="input-field col s6">
							{!!Form::label('texto:')!!}
							{!!Form::text('texto', null , ['class'=>'', 'required'])!!}
						</div>
						<div class="input-field col s6">
							{!!Form::label('texto2:')!!}
							{!!Form::text('texto2', null , ['class'=>'', 'required'])!!}
						</div>
				    </div>
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
		</div>
		</div>
	</div>
</main>

@endsection
