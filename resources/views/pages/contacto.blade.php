@extends('pages.templates.body')
@section('title', 'Tolosa - Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/fabrica.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/contacto.css') }}">
@endsection
@section('contenido')
<!-- body -->        
   
	<main>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.560098497919!2d-58.559354485136645!3d-34.69105036963048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc61e58ad05d5%3A0xf865dc7fb61b2c7c!2sTOLOSA+ABERTURAS!5e0!3m2!1ses-419!2sar!4v1526869799333" width="100%" height="334" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		<section class="contacto">
			<div class="container">
				<div class="row">
					<div class="col s12">
											
					</div>
				</div>
			</div>
			<div class="container">
				<h2>Contacto</h2>
<input type="radio" class="filled-in" id="terminos" />
				<div class="row">
					<div class="col s12 l12">
						{!!Form::open(['route'=>'mail', 'method'=>'POST', 'files' => true])!!}
						
					      	<div class="row">
					        	<div class="input-field col s12 l6">
					          		<input class="" name="nombre" type="text" style="color: black">
					          		<label for="nombre">Nombre</label>
					        	</div>
					        	<div class="input-field col s12 l6">
					          		<input class="" name="apellido" type="text" style="color: black">
					          		<label for="apellido">Apellido</label>
					        	</div>
					      	</div>
					      	<div class="row">
					        	<div class="input-field col s12 l6">
					          		<input class="" name="email" type="email" style="color: black">
					          		<label for="email">Correo electronico</label>
					        	</div>
					        	<div class="input-field col s12 l6">
					          		<input class="" name="empresa" type="text" style="color: black">
					          		<label for="empresa">Empresa</label>
					        	</div>
					      	</div>
					      	<div class="row no-margin">
					        	<div class="input-field col s12 l6">
			          				<label for="mensaje">Mensaje</label>
			          				<textarea class="materialize-textarea" name="mensaje" cols="50" rows="10" style="color: black"></textarea>
					        	</div>
					        	<div class="col s12 l6">
								   
							      	

								    <div class="col s12">
								    	{!!Form::submit('Enviar', ['class'=>'boton'])!!}
									</div>
					        	</div>
							</div>
					    </div>
					    </form>
					</div>
				</div>
			</div>
		</section>
	</main>


@endsection

@section('js')
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

	<script type="text/javascript">
        $('.logo').click(() => {
            window.location.href = "/drimer";
        });
    </script>
@endsection





