<?php
session_start();
	require("conexion.php");

	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];

$sql2=mysqli_query($conex,"SELECT * FROM cliente WHERE nombre='$nombre'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($correo==$f2['correo_admin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['codigo']=$f2['codigo'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}

	$sql3=mysqli_query($conex,"SELECT * FROM cliente WHERE nombre='$nombre'");
	if($f3=mysqli_fetch_assoc($sql3)){
		if($correo==$f3['correo_chofer']){
			$_SESSION['id']=$f3['id'];
			$_SESSION['nombre']=$f3['nombre'];
			$_SESSION['codigo']=$f3['codigo'];

			echo '<script>alert("BIENVENIDO CHOFER DE REINPLAST EIRL")</script> ';
			echo "<script>location.href='chofer.php'</script>";
		
		}
	}






	$sql=mysqli_query($conex,"SELECT * FROM cliente WHERE nombre='$nombre'");
	if($f=mysqli_fetch_assoc($sql)){
		if($correo==$f['correo']){
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['codigo']=$f['codigo'];

			header("Location: inicio.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='login - registrado.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='login - registrado.php'</script>";	

	}


?>