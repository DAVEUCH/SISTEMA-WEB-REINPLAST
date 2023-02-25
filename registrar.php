<?php
include("conexion.php");
if (isset($_POST['registrar'] )) {

	if (strlen($_POST['nombres']) >= 1 &&
    
    strlen($_POST['correo'])>= 1 &&
    strlen($_POST['telefono'])>= 1 ) {

    $nombres = trim($_POST['nombres']);
    
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $fecha = date("d/m/y");
    $correo_admin =trim($_POST['correo_admin']);
    $codigo = trim($_POST['codigo']);
    

    
    
    $consulta= "INSERT INTO cliente( nombre, correo,telefono,fecha,correo_admin,codigo) VALUES ('$nombres','$correo','$telefono','$fecha','','2')";
    $resultado = mysqli_query($conex,$consulta);

    if ($resultado) {
    	echo '<script>alert("BIENVENIDO USUARIO")</script> ';
       header("location:login - registrado.php")
?>
    	<?php
    }else{
    	?>
    	<h3 class="bad">¡Verifica bien tus datos!</h3>
    	<?php
    }

}else {
	?>
    	<h3 class="bad">¡Por favor completa tus datos!</h3>
    	<?php



}
	
}
?>