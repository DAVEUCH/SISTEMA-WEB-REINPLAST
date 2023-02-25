<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<script src="validar.js"></script>
	<title>Registrate</title>
</head>
<body>
	<form method="post" >
	<section class="form-register">
		<h4>Registrate</h4>
		<input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required>
		<input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required="ingrese su corre hijo de pucta">
		<input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su Telefono"required>
		
		<p>¡Gracias por preferirnos!</p>
		<input class="botons" type="submit" name="registrar" onclick="obtenerdatos()">
		<p><a href="login - registrado.php">Ya tengo cuenta</a></p>
		
		<!-- Aquí <a class="botoncito" type="submit"  href="https://vinkula.com">Registrar</a> -->
		
		
		
		
	</section>
	</form>
	<?php
	include("registrar.php")

	?>


</body>
</html>