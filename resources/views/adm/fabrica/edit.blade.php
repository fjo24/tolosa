@extends('adm.layout.frame')

@section('titulo', 'Editar contenido sección empresa')

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
			{!!Form::model($fabrica, ['route'=>['fabrica.update',$fabrica->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="file-field input-field col s12">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('imagen',null, ['class'=>'file-path']) !!}
						</div>
					</div>
					<div class="row">
						<label class="col s12" for="parrafo">Titulo</label>
						<div class="input-field col s12">
					        <textarea id="texto" name="titulo" class="materialize-textarea" required>{{$fabrica->titulo}}</textarea>
					    </div>
					    <label class="col s12" for="parrafo">Contenido</label>
						<div class="input-field col s12">
					        <textarea id="texto1" name="contenido" class="materialize-textarea" required>{{$fabrica->contenido}}</textarea>
					    </div>
					    <label class="col s12" for="parrafo">Segundo Titulo</label>
					    <div class="input-field col s12">
					        <textarea id="texto2" name="titulo2" class="materialize-textarea" required>{{$fabrica->titulo2}}</textarea>
					    </div>
					    <label class="col s12" for="parrafo">Segundo Contenido</label>
					    <div class="input-field col s12">
					        <textarea id="texto2" name="contenido2" class="materialize-textarea" required>{{$fabrica->contenido2}}</textarea>
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
<script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
<script>

	CKEDITOR.replace('titulo');
	CKEDITOR.replace('contenido');
	CKEDITOR.replace('titulo2');
	CKEDITOR.replace('contenido2');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';
</script>
@endsection