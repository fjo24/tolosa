@extends('adm.layout.frame')

@section('titulo', 'Editar Tipo de Ventana')

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
			{!!Form::model($tipo, ['route'=>['tiposventana.update',$tipo->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Nombre:')!!}
						{!!Form::text('nombre', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
					</div>
					<div class="col s6">
						@if(isset($imagen->ubicacion))
						<img src="{{asset($imagen->ubicacion)}}" style="width: 60%; height: 55%">
						@endif
					<div class="btn col s12">
						<input type="file" name="file[]" multiple="true">
						{!!Form::label('Cambie la imagen')!!}
					</div>
					</div>
				</div>
				<br><br>
				<div class="row">
				    <div class="col s12">
				        <label for="info">Información</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="info" name="info" class="materialize-textarea" required>{!! $tipo->info!!}</textarea>
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