<!DOCTYPE html>



<html>
<head>
	<title>Carrito</title>

    <title>REINPLAST</title>
    <link rel="shortcut icon" href="PAGINA MAESTRA/img/loguito34.png" type="image/x-icon">
	


</head>
<body>

</body>
</html>
<?php 
@session_start();
?>
<?php if(count($_SESSION['detalle'])>0){?>
	<br>
	<center>
	<table class="table">
	    <thead>
	        <tr>
	            <th>Descripcion</th>
	            <th>Cantidad</th>
	            <th>Peso Aprox.</th>
	            <th>Peso Total</th>
	            <th>Precio</th>
				<th>Subtotal</th>
	            
	        </tr>
	    </thead>
	    <tbody>





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

	    	?>
	        <tr>
	        	
	        	<td><?php echo $detalle['producto'];?></td>
	        	<td><?php echo $detalle['cantidad'];?></td>
	        	<td><?php echo $peso;  ?></td>
	            <td><?php echo $detalle['cantidad']*$peso;?></td>
	            <td><?php echo $detalle['precio'];?></td>
				<td><?php echo $detalle['subtotal']*$peso;?></td>



	            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
	        </tr>
	        <?php }?>
	        <tr>
	        	<td colspan="5" class="text-right"><strong>Total</strong></td> 
	        	<td><?php echo $total;?></td>
	        	<td></td>
	        </tr>
	    </tbody>
	</table>

</center>
<?php  

	$conex= mysqli_connect("localhost","root","","dbcarrito");
$sql="INSERT INTO factura_orden_producto(nombre_usu,descripcion,cantidad,precio,subtotal,fecha,total) VALUES ('$nombre','$producto','$cantidad','$precio','$subtotal','$fecha','$total')";
$resultado = mysqli_query($conex,$sql);

 
       
  ?>


<?php }else{?>


	<br>
	<br>
	<center>
<div class="panel-body"><font size="4" color="" > No hay productos agregados</font></div>
<br>
<a href="pedido.php">
			<button type="button" class="btn btn-primary"><font size="5" color="" face="">Volver</font></button>
</a>
    </center>			
<?php }?>

<script type="text/javascript" src="libs/ajax.js"></script>


