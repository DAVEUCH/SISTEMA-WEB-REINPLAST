<!DOCTYPE html>
<?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:index.php");
    }elseif ($_SESSION['codigo']==1) {
        header("Location:admin.php");
    }
    ?>


<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REINPLAST</title>
    <link rel="shortcut icon" href="PAGINA MAESTRA/img/loguito34.png" type="image/x-icon">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-2/font.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-3/font.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-4/font.css">
    <link rel="stylesheet" href="FONTS-PEDIDO/css-2/main.css">
    <link rel="stylesheet" href="FORMULARIO-PEDIDO/botoncillo.css">
    <link rel="stylesheet" href="FORMULARIO-PEDIDO/formu.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="boton.css">
   

	<link href="libs2/css/bootstrap.css" rel="stylesheet">
 <script src="libs2/js/jquery.js"></script>
    <script src="libs2/js/jquery-1.8.3.min.js"></script>
    <script src="libs2/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libs2/ajax.js"></script>
    
	

    <link rel="stylesheet" href="libs2/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="libs2/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs2/js/alertify/lib/alertify.min.js"></script>

 

</head>
<body>
	<div class="social-bar">
        <a href="https://www.facebook.com/Pl%C3%A1sticos-La-Lunita-114059173629053" class="icon icon-facebook" target="_blank"></a>
        <a href="https://wa.me/51960352717" class="icon icon-whatsapp" target="_blank"></a>
        
    </div>

     <header>
        <nav>
            <a href="inicio.php">Bienvenido : <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
            <a href="desconectar.php"> Cerrar Sesion</a></li>
            <a href="inicio.php">Inicio</a>
            <a href="acerca.php">Nosotros</a>
            <a href="portafolio.php">Productos</a>
            <a href="blog.php">Blog</a>
            <a href="correo.php">Contacto</a>
        </nav>
        
        </header>

        <div class="container">
 		
 		<div class="page-header">
			<center><h1><font color="black" size="10" >Envianos tu consulta</font></h1></center>
		</div>



		<?php 
@session_start();
?>
<?php if(count($_SESSION['detalle'])>0){?>
	<table class="table">
	    <thead>
	        <tr>
	            <th>Descripci&oacute;n</th>
	            <th>Cantidad</th>
	            <th>Precio</th>
				<th>Subtotal</th>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$total = 0;
	    	foreach($_SESSION['detalle'] as $k => $detalle){ 
			$total += $detalle['subtotal'];
	    	?>
	        <tr>
	        	
	        	<td><?php echo $detalle['producto'];?></td>
	            <td><?php echo $detalle['cantidad'];?></td>
	            <td><?php echo $detalle['precio'];?></td>
				<td><?php echo $detalle['subtotal'];?></td>
	            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>

	            <td><a href="pedido.php"><button type="button" class="btn btn-primary "><font size="" color="" face="">Volver</font></button></a></td>


	        </tr>
	        <?php }?>
	        <tr>
	        	<td colspan="3" class="text-right">Total</td>
	        	<td><?php echo $total;?></td>
	        	<td></td>
	        </tr>
	    </tbody>
	</table>
	
		


		<form action="conexioncompra.php" method="POST">
		<p>Nombre:</p>
		<input type="text" class="espacio" name="nombre" placeholder="Ingrese su nombre" required> <br/>

		<p>Descripcion:</p>
		<input type="text" class="espacio" name="descripción" placeholder="Descripción" required> <br/>

		<p>Cantidad:</p>
		<input type="text" class="espacio" name="cantidad" placeholder="Cantidad" required> <br/>

		<p>Precio:</p>
		<input type="text"  class="espacio" name="precio" placeholder="Precio" required> <br/>

		<p>Subtotal:</p>
		<input type="text" class="espacio" name="subtotal" placeholder="Subtotal" required> <br/>
		<br>
		

		<p class="center-content">
			<input type="submit" class="btn btn-green" value="Registra y regresa">
		</p>

	</form>


<?php }else{?>
	<br>
	<br>
	<center>
<div class="panel-body"><font size="4" color=""> No hay productos agregados</font></div>
<br>
<a href="pedido.php">
			<button type="button" class="btn btn-primary"><font size="5" color="" face="">Registra y regresa</font></button>
</a>
    </center>			
<?php }?>

<script type="text/javascript" src="libs/ajax.js"></script>




</body>
</html>




