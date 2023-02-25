<?php 

session_start();
$_SESSION['detalle'] = array();

require_once 'conexion.php';
require_once 'Producto.php';



$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
<link href="libs/css/bootstrap.css" rel="stylesheet">
 <script src="libs/js/jquery.js"></script>
    <script src="libs/js/jquery-1.8.3.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libs/ajax.js"></script>
    
	

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
			<center><h1><font color="black" size="10" >Consulta nuestros productos</font></h1></center>
		</div>
		<center>
 		<div class="row">


			<div class="col-md-4">	
				<div><font color="white" size="6" >Producto:</font>
				<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
					<option value="0">Seleccione un producto</option>
					<?php foreach($resultado_producto as $producto):?>
						<option value="<?php echo $producto['id']?>"><?php echo $producto['descripcion']?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>




			<div class="col-md-4">
				<div><font color="white" size="6" >Cantidad:</font>
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>




			<div class="col-md-1">
				
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary btn-agregar-producto">Agregar</button>
				</div>
				
			</div>
			<div></div>
			<div class="col-md-1">
				<a href="pedido.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-danger ">Limpiar</button>
				</div>
			    
			</div>
			<div></div>
			
			<div class="col-md-1">
				<a href="portafolio.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">Regresar a productos</button>
				</div>
			    </a>
			</div>



		</div>
		</center>
		<br>
		<center>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title"><font size="6"  >Productos</font></h3>
		      </div>
			<div class="panel-body detalle-producto">
				<?php if(count($_SESSION['detalle'])>0){?>
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
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
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
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"><font size="3" > No hay productos agregados </font></div>
				<?php }?>
			</div>
		</div>

		<div class="col-md-1">
				<a href="tabla_prin.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">Ver registros de consulta de productos</button>
				</div>
			    </a>
			</div>
	</center>
 	</div>
 	<br>
 	<br>
 
        

	<div class="footer-content row">
        <div class="col-lg-12">
            <div class="pull-right">
                                
            </div>
        </div>
    </div>
    
</div>
   <footer id="main-footer">
    <div class="container">
         <h2><span class="simbolos icon-phone"></span>(51)960352717</h2>
        <br>
        <h2><span class="simbolos icon-location"></span>REINPLAST E.I.R.L, Pro El Reposo Mza. E Lote 10 Asoc.Pro Viv.Los Suyos- Carabayllo-Lima-Lima,Lima,Carabayllo,Peru</h2>
        <br>
        <h2><span class="simbolos icon-envelop"></span>plasticoslalunita@gmail.com</h2>

       
  

        
    </div>
    <footer class="footer bg-darki">
    <div class="container">
        
    </div>
</footer>
 <footer class="footer bg-darki">
    <div class="container">
        
    </div>
</footer>	
  </body>
</html>
