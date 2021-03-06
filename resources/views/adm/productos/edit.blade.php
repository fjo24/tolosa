@extends('adm.layout.frame')

@section('titulo', 'Editar producto')

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
			{!!Form::model($producto, ['route'=>['productos.update',$producto->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col l6 s12">
						{!!Form::label('Nombre:')!!}
						{!!Form::text('nombre', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col l6 s12">
					
						{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Categoria']) !!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col l6 s12">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="file-field input-field col l6 s12">
						
					</div>
				</div>
				<div class="row">
					<div class="col s12">
				        <label for="texto_principal">Texto principal</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="texto_principal" name="texto_principal" class="materialize-textarea" required>{!! $producto->texto_principal !!}</textarea>
				    </div>
				    <div class="col s12">
				        <label for="titulo1">Primer subtitulo</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="titulo1" name="titulo1" class="materialize-textarea" required>{!! $producto->titulo1 !!}</textarea>
				    </div>
				    <div class="col s12">
				        <label for="contenido1">Primer contenido</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="contenido1" name="contenido1" class="materialize-textarea" required>{!! $producto->contenido1 !!}</textarea>
				    </div>
				    <div class="col s12">
				        <label for="titulo2">Segundo subtitulo</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="titulo2" name="titulo2" class="materialize-textarea" required>{!! $producto->titulo2 !!}</textarea>
				    </div>
				    <div class="col s12">
				        <label for="contenido2">Segundo contenido</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="contenido2" name="contenido2" class="materialize-textarea" required>{!! $producto->contenido2 !!}</textarea>
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
	CKEDITOR.replace('texto_principal');
	CKEDITOR.replace('titulo1');
	CKEDITOR.replace('contenido1');
	CKEDITOR.replace('titulo2');
	CKEDITOR.replace('contenido2');
	CKEDITOR.config.height = '200px';
	CKEDITOR.config.width = '100%';
</script>
@endsection