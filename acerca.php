<!DOCTYPE html>
<?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:index.php");
    }elseif ($_SESSION['codigo']==1) {
        header("Location:admin.php");
    }
    ?>
<html>
<head>
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
    <main>
        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/acerca1.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h1>Somos tu mejor eleccion </h1>
                    <p></p>
                    
                    <p>Somos Fabricante de Mangas de Plástico con mas de 10 Años de Experiencia en el Mercado. Por otro lado, Nuestro Proceso de Fabricación es completa ya que Fabricamos nuestra Materia Prima, por lo que nuestros Precios son lo mas competitivo del Mercado.</p>
                </div>
            </div>
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/acerca2.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h1>Vision </h1>
                    <p></p>
                
                    <p>REINPLAST E.I.R.L se encuentra ubicado en la provincia Lima, Distrito Carabayllo, y actualmente llevamos nuestros productos en todo el Territorio Peruano, Sierra, Costa y Selva, a corto plazo exportar a países vecinos.</p>
                </div>
            </div>
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/acerca3.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h1>Uso y su importancia </h1>
                    <p></p>
                    
                    <p>Estas mangas, tienen un uso masivo en la construcción (para cubierta de lozas, radiares, etc. contra la humedad, polvo y el calor), en la agricultura (invernaderos y/o viveros, protección de cultivos, micro túneles, proteger parronales, para mangas de riego, etc), y muy requerido en la industria en general. Es un material no tóxico y no contaminante. Están hechas para trabajar en cualquier ambiente o clima.</p>
                </div>
            </div>
        </section>
       

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