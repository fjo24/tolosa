@extends('adm.layout.frame')

@section('titulo', 'Editar obra')

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
			{!!Form::model($obra, ['route'=>['obras.update',$obra->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s5">
						{!!Form::label('Titulo:')!!}
						{!!Form::text('titulo', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col s2">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="file-field input-field col s5">
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
				    <div class="col s12">
				        <label for="descripcion">Descripción</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="descripcion" name="descripcion" class="materialize-textarea" required>{{ $obra->descripcion }}</textarea>
				    </div>
				    <div class="col s12">
				        <label for="materiales">Materiales</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="materiales" name="materiales" class="materialize-textarea" required>{!! $obra->materiales !!}</textarea>
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
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('descripcion');
	CKEDITOR.replace('materiales');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';

</script>
@endsection