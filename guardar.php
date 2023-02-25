<?php 
	    	$total = 0;
	    	foreach($_SESSION['detalle'] as $k => $detalle ){ 
			$total += $detalle['subtotal']*50.00;
			$nombre= $_SESSION['nombre'];
			$producto= $detalle['producto'];
			$cantidad= $detalle['cantidad']*50.00;
			$precio= $detalle['precio'];
			$fecha= date("d/m/y");
			$subtotal= $detalle['subtotal']*50.00;
			$peso=50.00;

$conex= mysqli_connect("localhost","root","","dbcarrito");
$sql="INSERT INTO factura_orden_producto(nombre_usu,descripcion,cantidad,precio,subtotal,fecha) VALUES ('$nombre','$producto','$cantidad','$precio','$subtotal','$fecha')";
$resultado = mysqli_query($conex,$sql);

 if ($resultado) {
    	echo '<script>alert("¡Tu consulta ha sido realizada. Gracias !")</script> ';

    	 }else{
    	 	echo '<script>alert("Verifique su conexion a internet")</script> ';
    	 }
       
  ?>




