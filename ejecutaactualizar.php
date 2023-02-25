<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("con_db.php");
	$sentencia="update cliente set nombre='$nombre', correo='$correo', telefono='$telefono', fecha='$fecha' where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($conex,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>