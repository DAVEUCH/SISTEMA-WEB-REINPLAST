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
	<title>REINPLAST</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="PAGINA MAESTRA/img/loguito34.png" type="image/x-icon">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CARRUSEL/estilos.css">
	<link rel="stylesheet" href="CARRUSEL/css/bootstrap.min.css">
	<link rel="stylesheet" href="CARRUSEL/css/font-awesome.min.css">
	<link rel="stylesheet" href="CARRUSEL/css/animate.min.css">
	<link rel="stylesheet" href="CARRUSEL/css/et-line-font.css">
	<link rel="stylesheet" href="CARRUSEL/css/nivo-lightbox.css">
	<link rel="stylesheet" href="CARRUSEL/css/nivo_themes/default/default.css">
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<header id="main-header">
		
		

		<nav>
			<ul>
				<li><a href="" class="smoothScroll">BIENVENIDO : <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
			    <li><a href="desconectar.php" class="smoothScroll"> CERRAR SESION </a></li>
				<li><a href="acerca.php" class="smoothScroll">NOSOTROS</a></li>
				<li><a href="portafolio.php" class="smoothScroll">PRODUCTOS</a></li>
				<li><a href="blog.php" class="smoothScroll">BLOG</a></li>
				<li><a href="correo.php" class="smoothScroll">CONTACTO</a></li>

				
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->



	<div class="noticia">
  <img class="izquierda" src="CARRUSEL/img/login.jpg" vspace="1" hspace="1">
  <br>
  <br>
  <br>
 <h1><center>REINPLAST E.I.R.L</center></h1>
 
                    <h4 class ="justify">Venta de bolsas en alta y baja densidad en material reciclado y virgen. Asi como tambien venta de mangas en reciclado y virgen, se fabrican bolsas de todas las medidas, colores y espesores </h4>
				
				
				<div class="planito">
					<ul class="social-icon">
					<h3><a href="https://www.facebook.com/Pl%C3%A1sticos-La-Lunita-114059173629053" class="fa fa-facebook-square wow fadeIn" data-wow-delay="0.3s" style="color:#1815EC;" width="30" height="30"></a> Facebook</h3>
				</ul>
				
				
				<div class="planito">
					<ul class="social-icon">
					<h3 class="justifys"><a href=" https://wa.me/51960352717" class="fa fa-whatsapp wow fadeIn" data-wow-delay="0.9s" style="color:#2DE508;" width="30" height="30"></a> Whatsapp</h3>
					</ul>
					</div>
				</div>

				<br>
				<br>
			
		
				
  
</div>

	<div class="slider">
		<ul>
			<li><img src="CARRUSEL/img/1.jpeg" alt=""></li>
			<li><img src="CARRUSEL/img/2.jpeg" alt=""></li>
			<li><img src="CARRUSEL/img/3.jpeg" alt=""></li>
			<li><img src="CARRUSEL/img/4.jpeg" alt=""></li>
			<li><img src="CARRUSEL/img/5.jpeg" alt=""></li>
			<li><img src="CARRUSEL/img/6.jpeg" alt=""></li>
			<li><img src="CARRUSEL/img/7.jpeg" alt=""></li>


		</ul>

	</div>
	

</body>
</html>