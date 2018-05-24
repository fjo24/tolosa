@extends('adm.layout.frame')

@section('titulo', 'Nuevo producto')

    
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
			{!!Form::open(['route'=>'productos.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Nombre:')!!}
						{!!Form::text('nombre', null , ['class'=>'', ''])!!}
					</div>
					<div class="input-field col s6">
					
						{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Categoria']) !!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'', ''])!!}
					</div>
					<div class="btn col s6">
						<input type="file" name="file[]" multiple="true">
						{!!Form::label('Agregue imagenes:')!!}
					
					</div>






				</div>
				<div class="row">
					<div class="col s12">
				        <label for="texto_principal">Texto principal</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="texto_principal" name="texto_principal" class="materialize-textarea" required></textarea>
				    </div>
				    <div class="col s12">
				        <label for="titulo1">Primer subtitulo</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="titulo1" name="titulo1" class="materialize-textarea" required></textarea>
				    </div>
				    <div class="col s12">
				        <label for="contenido1">Primer contenido</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="contenido1" name="contenido1" class="materialize-textarea" required></textarea>
				    </div>
				    <div class="col s12">
				        <label for="titulo2">Segundo subtitulo</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="titulo2" name="titulo2" class="materialize-textarea" required></textarea>
				    </div>
				    <div class="col s12">
				        <label for="contenido2">Segundo contenido</label>
				     </div>
					<div class="input-field col s12">
				        <textarea id="contenido2" name="contenido2" class="materialize-textarea" required></textarea>
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

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('texto_principal');
	CKEDITOR.replace('titulo1');
	CKEDITOR.replace('contenido1');
	CKEDITOR.replace('titulo2');
	CKEDITOR.replace('contenido2');
	CKEDITOR.config.height = '200px';
	CKEDITOR.config.width = '100%';

// "myAwesomeDropzone" es el ID de nuestro formulario usando la notación camelCase

        //SERVICES (Lista dinamica)  formgroup2
 /*       //SERVICES (Lista dinamica)  formgroup2
*/
        //Fin SERVICES

        //Si cambian el precio hora de la orden, se calculan los numeros nuevamente


        //PRODUCTS (lista dinamica)
        //select for products


        //select for products
              
    </script>
<script type="text/javascript">
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});
/*
$(function()
{
    $(document).on('click', '.green', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .green')
            .removeClass('green').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});


     <div class="col-md-12">
      <div class="row">
      <div class="control-group" id="fields">
          <label class="control-label" for="field1">
            Nice Multiple Form Fields
          </label>
          <div class="controls">
           
              <div class="entry input-group col-xs-3">
                
             
                <input class="btn btn-primary" name="fields[]" type="file">
                <span class="input-group-btn">
              <button class="btn-floating green" type="button">
              	
                                <i class="material-icons">add</i>
                </button>
                </span>
              </div>
           
          </div>
          
        </div>
      </div>
    </div>
<i class="material-icons">insert_chart</i>

*/
    
@endsection

