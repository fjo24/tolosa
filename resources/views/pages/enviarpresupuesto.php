<?php 
	include('config/conexion.php');

	$sql = "SELECT * FROM datos";
	$result = mysqli_query($base,$sql) or die ("Consulta fallida: " . mysqli_error($base));
	$fila = mysqli_fetch_assoc($result);

	$correo = $fila['correo'];

	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
	}

	if(isset($_POST['localidad'])){
		$localidad = $_POST['localidad'];
	}
	
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}

	if(isset($_POST['telefono'])){
		$telefono = $_POST['telefono'];
	}

	if(isset($_POST['descripcion'])){
		$mensaje = $_POST['descripcion'];
	}


		if($nombre != ''  && $email != '' )
		{

			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$clave_secreta."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

			$response = json_decode($response, true);

				$asunto = 'Consulta de Tasia Web';

				$mensaje = "<html lang='es'>
								<head>
									<style>

										td,
										h1,
										h2 {
											font-family: arial;
										}

										table,
										td {
											border: 1px solid black;
											border-collapse: collapse;
										}

										td {
											padding: 20px;
											font-size: 25px
										}

									</style>
								</head>
								<body>
									<h1>Consulta desde la web de Tasia</h1>

									<div>
										<h3>Datos del contacto:</h3>
									</div>

									<table>
										<tr><td>Nombre:</td><td>".$nombre."</td></tr>
										<tr><td>Localidad:</td><td>".$localidad."</td></tr>
										<tr><td>Telefono:</td><td>".$telefono."</td></tr>
										<tr><td>Trefilado de tubos:</td><td>".$trefilado."</td></tr>
										<tr><td>Telefono:</td><td>".$telefono."</td></tr>
										<tr><td>Email:</td><td><a href='mailto:".$email."'>".$email."</a></td></tr>
									</table>

									<div>
										<h2>Mensaje</h2>
									</div>

									<table>
										<tr><td>".$mensaje."</td></tr>
									</table>
								</body>
							</html>";

				$destinatario = $correo;
				//$destinatario = "cgutlab@gmail.com";

				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
				$headers .= "To: <".$destinatario.">"."\r\n";
				$headers .= "From: Tasia Web<".$email.">"."\r\n";

				mail($destinatario, $asunto, $mensaje, $headers);

		

				header('location: presupuesto.php?mensaje=ok');

		}
	else
		{
			header('location: presupuesto.php?mensaje=error');
		}

	