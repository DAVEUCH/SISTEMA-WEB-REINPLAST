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
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Productos</title>

	<link rel="stylesheet" href="css-1-portafolio/estilos.css">
	<link rel="shortcut icon" href="img-portafolio/loguito34.png" type="image/x-icon">
    <link rel="stylesheet" href="css-2-portafolio/font.css">
    <link rel="stylesheet" href="css-3-portafolio/font.css">
    <link rel="stylesheet" href="css-2-portafolio/main.css">
    <link rel="stylesheet" href="css-4-portafolio/font.css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js-portafolio/jquery-3.2.1.js"></script>
	<script src="js-portafolio/script.js"></script>
</head>
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
            <a href="correo.php">Contactanos</a>
            
           
        </nav>
        
        </header>
	
	<div class="wrap">
		<h1>Escoge nuestras categorias</h1>
		<div class="store-wrapper">
			<div class="category_list">
				
				<a href="#" class="category_item" category="Bolsas">Bolsas</a>
				<a href="#" class="category_item" category="Mangas/fil">Mangas</a>
				
			</div>
			<section class="products-list">
				<div class="product-item" category="Bolsas">
					<img src="images-portafolio/bolsa-amarillo/bolsa1.jpg" alt="" >
					<a href="index1.php">Bolsa 25 litros</a>
				</div>
				<div class="product-item" category="Bolsas">
					<img src="images-portafolio/bolsa-negro/bolsa10.jpeg" alt="" >
					<a href="index2.php">Bolsa 50 litros</a>
				</div>
				<div class="product-item" category="Bolsas">
					<img src="images-portafolio/bolsa-verde/bolsa6.jpg" alt="" >
					<a href="index3.php">Bolsa 75 litros</a>
				</div>
				<div class="product-item" category="Bolsas">
					<img src="images-portafolio/bolsa-blanco/bolsa8.jpeg" alt="" >
					<a href="index4.php">Bolsa 140 litros</a>
				</div>
				<div class="product-item" category="Bolsas">
					<img src="images-portafolio/bolsa-rojo/bolsa2.jpg" alt="" >
					<a href="index5.php">Bolsa 180 litros</a>
				</div>
				<div class="product-item" category="Bolsas">
					<img src="images-portafolio/bolsa-azul/bolsa3.jpg" alt="" >
					<a href="index6.php">Bolsa 220 litros</a>
				</div>
				<div class="product-item" category="Bolsas">
					<img src="images-portafolio/bolsa-marron/bolsa10.jpg" alt="" >
					<a href="index7.php">Bolsa 240 litros</a>
				</div>
				<div class="product-item" category="Mangas/fil">
					<img src="images-portafolio/manga1.jpg" alt="" >
					<a href="index8.php">Manga Plastica Azul</a>
				</div>
				<div class="product-item" category="Mangas/fil">
					<img src="images-portafolio/manga-doble cara/1.png" alt="" >
					<a href="index9.php">Manga Doble Cara</a>
				</div>
				<div class="product-item" category="Mangas/fil">
					<img src="images-portafolio/manga-cristal virgen/manga-virgen40.jpg" alt="" >
					<a href="index10.php">Manga Cristal Virgen</a>
				</div>
				<div class="product-item" category="Mangas/fil">
					<img src="images-portafolio/manga4.jpg" alt="" >
					<a href="index11.php">Manga Color Reciclado</a>
				</div>
				<div class="product-item" category="Mangas/fil">
					<img src="images-portafolio/manga-negro/manga26.png" alt="" >
					<a href="index12.php">Manga Negro</a>
				</div>
				<div class="product-item" category="Mangas/fil">
					<img src="images-portafolio/manga-blanco/manga26.jpg" alt="" >
					<a href="index13.php">Manga Blanco R1</a>
				</div>
			</section>
		</div>
	</div>






          <footer id="main-footer">
        <h2><span class="simbolos icon-phone"></span>(51)960352717</h2>
        <br>
        <h2><span class="simbolos icon-location"></span>REINPLAST E.I.R.L, Pro El Reposo Mza. E Lote 10 Asoc.Pro Viv.Los Suyos- Carabayllo-Lima-Lima,Lima,Carabayllo,Peru</h2>
        <br>
        <h2><span class="simbolos icon-envelop"></span>plasticoslalunita@gmail.com</h2>

       
    </footer> 

</body>
</html>