@extends('adm.layout.frame')

@section('titulo', 'Nuevo modelo')

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
			{!!Form::open(['route'=>'modelos.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					<div class="row">
						<div class="input-field col l6 s12">
								{!!Form::label('Nombre:')!!}
								{!!Form::text('nombre', null , ['class'=>'', 'required'])!!}
						</div>
						<div class="input-field col l6 s12">
							{!!Form::label('Orden:')!!}
							{!!Form::text('orden', null , ['class'=>'', 'required'])!!}
						</div>
						<div class="input-field col l6 s12">
							{!! Form::select('producto_id', $productos, null, ['class' => 'form-control', 'placeholder' => 'Grupo']) !!}
						</div>
						<div class="btn col l6 s12">
						<input type="file" name="file[]" multiple="true">
						{!!Form::label('Agregue imagenes:')!!}
						</div>
						<div class="input-field col s12">
					    	<select multiple name="tipos[]">
					      		<option value="" disabled selected>Seleccione</option>
					      		@foreach($tipos as $tipo)
					      			<option value={{ $tipo->id }}>{{ $tipo->nombre }}</option>
					      		@endforeach
					    	</select>
					    	<label>Seleccione tipo de ventana soportado</label>
				 		</div>

					</div>
					<div class="row">
					    <div class="col s12">
					        <label for="texto">Primer contenido</label>
					     </div>
						<div class="input-field col s12">
					        <textarea id="texto" name="texto" class="materialize-textarea" required></textarea>
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
<script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('texto');
	CKEDITOR.config.height = '200px';
	CKEDITOR.config.width = '100%';
</script>
@endsection