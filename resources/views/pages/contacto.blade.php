@extends('pages.templates.body')
@section('title', 'Tolosa - Contacto')
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
				<h1 class="naranja mayus fs36" style="color: #32398E">Contacto</h1>
				<div class="linea"></div>
				<div style="margin-top: 50px; margin-bottom: 20px; color: #6F6F6F;">Contáctanos y te brindaremos toda la información que necesites</div>

				<div class="row">
					<div class="col s12 l12">
						{!!Form::open(['route'=>'enviarmail', 'method'=>'POST'])!!}
						{{ csrf_field() }}
					      	<div class="row">
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::text('nombre',null,['class'=>'', 'placeholder'=>'Nombre'])!!}
					          		<label for="nombre"></label>
					        	</div>
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::text('apellido',null,['class'=>'', 'placeholder'=>'Apellido'])!!}
					          		<label for="apellido"></label>
					        	</div>
					      	</div>
					      	<div class="row">
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::email('email',null,['class'=>'', 'placeholder'=>'Correo electronico'])!!}
					          		<label for="email"></label>
					        	</div>
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::text('empresa',null,['class'=>'', 'placeholder'=>'Empresa'])!!}
					          		<label for="empresa"></label>
					        	</div>
					      	</div>
					      	<div class="row no-margin">
					        	<div class="input-field col m6 s12" style="color: black">
			          				<label for="mensaje"></label>
			          				{!!Form::textarea('mensaje', null, ['class'=>'materialize-textarea', 'placeholder'=>'Mensaje'])!!}
					        	</div>
							    <div class="col s6">
							      	<button class="btn waves-effect waves-light z-depth-0" type="submit" name="action" style="background-color: #32398E; color:white;">Enviar
									</button>
								</div>
					      	</div>
					</div>
				</div>
				{!!Form::close()!!}
			</div>
	</section>


@endsection

@section('js')
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

	<script type="text/javascript">
        $('.logo').click(() => {
            window.location.href = "";
        });
    </script>
@endsection





