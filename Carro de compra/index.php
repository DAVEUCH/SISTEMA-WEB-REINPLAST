<?php 
// Chiphysi programación suscribete -->
// V 0.1 original -->
// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
// Derechos de autor(Suscribete)  -->

session_start();
$_SESSION['detalle'] = array();

require_once 'conexion.php';
require_once 'Producto.php';

$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito</title>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REINPLAST</title>
    <link rel="shortcut icon" href="PAGINA MAESTRA/img/loguito34.png" type="image/x-icon">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-2/font.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-3/font.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-4/font.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-2/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
<link href="libs/css/bootstrap.css" rel="stylesheet">
 <script src="libs/js/jquery.js"></script>
    <script src="libs/js/jquery-1.8.3.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libs/ajax.js"></script>
    <link rel="shortcut icon" href="carro.png">
	

    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs/js/alertify/lib/alertify.min.js"></script>

  </head>


  <style>
  	
body{

	background-image: url(fondo.jpg);



}




  </style>

  <body>

 <div class="social-bar">
        <a href="https://www.facebook.com/Pl%C3%A1sticos-La-Lunita-114059173629053" class="icon icon-facebook" target="_blank"></a>
        <a href="https://wa.me/51960352717" class="icon icon-whatsapp" target="_blank"></a>
        
    </div>

     <header>
        <nav>
            <a href="">Bienvenido : <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
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
			<center><h1><font color="black" size="10" >Carro De Compras</font></h1></center>
		</div>
		<center>
 		<div class="row">


			<div class="col-md-4">	
				<div><font color="white" size="6" face="Algerian">Producto:</font>
				<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
					<option value="0">Seleccione un producto</option>
					<?php foreach($resultado_producto as $producto):?>
						<option value="<?php echo $producto['id']?>"><?php echo $producto['descripcion']?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>




			<div class="col-md-4">
				<div><font color="white" size="6" face="Algerian">Cantidad:</font>
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>




			<div class="col-md-1">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary btn-agregar-producto">AGREGAR</button>
				</div>
			</div>
			<div class="col-md-1">
				<a href="index.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-danger ">REFRESH</button>
				</div>
			    </a>
			</div>
			<div class="col-md-1">
				<a href="detalle.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">DETALLES</button>
				</div>
			    </a>
			</div>



		</div>
		</center>
		<br>
		<center>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title"><font size="6" face="Algerian" >Productos</font></h3>
		      </div>
			<div class="panel-body detalle-producto">
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
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><?php echo $detalle['precio'];?></td>
					            <td><?php echo $detalle['subtotal'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"><font size="3" face="Algerian" > No hay productos agregados </font></div>
				<?php }?>
			</div>
		</div>
	</center>
 	</div>
 	<center>
 	<div class="col-md-12">
				<a href="detalle2.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-success "><font size="8" face="Algerian">COMPRAR</font></button>
				</div>
			    </a>
			</div>
	</center>		
  </body>
</html>
