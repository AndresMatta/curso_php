<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/estilos.css">
	<title>Datos Personales</title>
</head>
<body>
	<div class="contenido">
		<h1 class="titulo">Datos Personales</h1>
		<hr class="border">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="datos_personales">
		    <div class="form-group">
				<input type="text" name="cedula" class="usuario" placeholder="Cédula" maxlength=9>
			</div>
		    <div class="form-group">
				<input type="text" name="nombre" class="usuario" placeholder="Nombre">
			</div>
			<div class="form-group">
				<input type="datetime-local" name="fecha" class="usuario">
			</div>
			<div class="form-group">
				<input type="text" name="nombre" class="usuario" placeholder="Nombre">
			</div>

			<div class="form-group">
				<input type="text" name="apellido1" class="usuario" placeholder="Primer apellido">
			</div>

			<div class="form-group">
				<input type="text" name="apellido2" class="usuario" placeholder="Segundo apellido">
			</div>

			<div class="form-group">
				<input type="radio" name="gender" value="masculino">Masculino  
                <input type="radio" name="gender" value="femenino">Femenino<br/>
			</div>
			<div class="form-group">
				<input type="text" name="direccion" class="usuario" placeholder="Dirección">
			</div>
			<div class="form-group">
				<input type="tel" name="telefono1" class="usuario" maxlength=8 placeholder="Telefono 1">
			</div>
			<div class="form-group">
				<input type="tel" name="telefono2" class="usuario" maxlength=8 placeholder="Telefono 2">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="usuario" placeholder="E-mail"><br/><br/>
				<i class="submit-btn fa fa-arrow-right" onclick="Formulario.submit()"></i>
			</div>

			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>
	</div>
</body>
</html>