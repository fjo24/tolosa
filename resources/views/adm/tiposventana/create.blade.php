@extends('adm.layout.frame')

@section('titulo', 'Registrar Tipo de Ventana')

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
			{!!Form::open(['route'=>'tiposventana.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					<div class="input-field col l6 s12">
						{!!Form::label('Nombre:')!!}
						{!!Form::text('nombre', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col l6 s12">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="btn col l6 s12">
						<input type="file" name="file[]" multiple="true">
						{!!Form::label('Agregue imagenes:')!!}
					</div>
				</div>
				<div class="row">
				    <div class="col s12">
				        <label for="info">Información</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="info" name="info" class="materialize-textarea" required></textarea>
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
<script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('info');
	CKEDITOR.config.height = '200px';
	CKEDITOR.config.width = '100%';
</script>
@endsection