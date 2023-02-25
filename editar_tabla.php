<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:index.php");
    }elseif ($_SESSION['codigo']==1) {
        header("Location:admin.php");
    }
    ?>
<head>
	  <?php 

include 'listar.php';
$invoice = new listar();
$invoice->validar_usuario();
?>
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
	<title>Editar</title>
	<link rel="stylesheet" href="boton.css">
	<style>
		body{font-family: Arial; background-color: #F5F1F0; box-sizing: border-box;}

		form{
			background-color: white;
			border-radius: 3px;
			color: #999;
			font-size: 0.8em;
			padding: 20px;
			margin: 0 auto;
			width: 300px;
		}

		input, textarea{
			border: 0;
			outline: none;

			width: 280px;
		}

		.field{
			border: solid 1px #ccc;
			padding: 10px;

			
		}

		.field:focus{
			border-color: #18A383;
		}

		.center-content{
			text-align: center;
		}

	</style>
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
        <br>  

        <h1 class="text-center"><center> Edite el registro de sus productos</center></h1>
        <br>

      
    <h3 class="text-center"><center>Presione el boton "Terminar edicion" al terminar porfavor</center> </h3>


 <br>
 <br>
 <br>

	<form action="">
		<?php 
include("funcion.php");
$id = $_GET['item_id'];
select_id('factura_orden_producto','item_id',$id);
?>
		<p>Descripcion:</p>
		<br>
		<input type="text" class="field" name="descripcion" value="<?php echo $row->descripcion;?>"> <br/>
		<br>

		<p>Cantidad:</p>
		<br>
		<input type="text" class="field" name="cantidad" value="<?php echo $row->cantidad;?>"> <br/>
		<br>

		

		<p class="center-content">
			<input type="submit" class="btn btn-green" value="Terminar edicion">
		</p>

	</form>
	<?php
	
	if(isset($_POST['submit'])){
		$field = array("descripcion"=>$_POST['descripcion'], "cantidad"=>$_POST['cantidad'],"subtotal"=>$_POST['precio']*$_POST['cantidad']);
		$tbl = "factura_orden_producto";
		edit($tbl,$field,'item_id',$id);
		header("location:tabla_prin.php");
	}
?>


	<br>
    <br>  
    
     <div class="footer-content row">
        <div class="col-lg-12">
            <div class="pull-right">


          <footer id="main-footer">
        <h2><span class="simbolos icon-phone"></span>(51)960352717</h2>
        <br>
        <h2><span class="simbolos icon-location"></span>REINPLAST E.I.R.L, Pro El Reposo Mza. E Lote 10 Asoc.Pro Viv.Los Suyos- Carabayllo-Lima-Lima,Lima,Carabayllo,Peru</h2>
        <br>
        <h2><span class="simbolos icon-envelop"></span>plasticoslalunita@gmail.com</h2>

       
    </footer> <!-- / #main-footer -->
      
</body>
</html>


