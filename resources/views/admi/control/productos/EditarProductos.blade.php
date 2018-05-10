@extends('adm.cuerpo')

@section('titulo', 'Editar Destacados')

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
			{!!Form::model($productos, ['route'=>['productos-destacados.update',$productos->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="file-field input-field col s6">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('imagen',null, ['class'=>'file-path validate']) !!}
						</div>
					</div>
					<div class="input-field col s12 m6">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden',$productos->orden,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s12 m6">
						{!!Form::label('Link:')!!}
						{!!Form::text('link',$productos->link,['class'=>'validate'])!!}
					</div>
					<label class="col s12 " for="parrafo">Texto Español</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('nombre_es', $productos->nombre_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
					<label class="col s12" for="parrafo">Texto Inglés</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('nombre_en', $productos->nombre_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				    <label class="col s12" for="parrafo">Texto Portugues</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('nombre_pt', $productos->nombre_pt, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
			</div>
			</div>
		</div>
	</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('nombre_es');
	CKEDITOR.replace('nombre_en');
	CKEDITOR.replace('nombre_pt');
	CKEDITOR.config.height = '200px';
	CKEDITOR.config.width = '100%';
</script>
@endsection