@extends('adm.layout.frame')

@section('titulo', 'Nueva red')

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
			{!!Form::open(['route'=>'redes.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Nombre:')!!}
						{!!Form::text('nombre', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('Link:')!!}
						{!!Form::text('link', null , ['class'=>'', 'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col s4">
						<select id="ubicacion" name="ubicacion">
							<option value="header">Header</option>
							<option value="footer">Footer</option>
						</select>
						<label>ubicacion de la red social</label>
					</div>
					<div class="file-field input-field col s4">
						<div class="btn">
						    <span>Logo</span>
						    {!! Form::file('logo') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('logo',null, ['class'=>'file-path']) !!}
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