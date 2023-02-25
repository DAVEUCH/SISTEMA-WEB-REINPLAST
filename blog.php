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
    <link rel="stylesheet" href="PAGINA MAESTRA/css-2/main.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-4/font.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
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
            <a href="inicio.php">Incio</a>
            <a href="acerca.php">Nosotros</a>
            <a href="portafolio.php">Productos</a>
            <a href="blog.php">Blog</a>
            <a href="correo.php">Contacto</a>
        </nav>
        
        </header>


         <main>
             <h1><center>Nuestro Blog </center> </h1>
             <img src="PAGINA MAESTRA/images/portadablog.jpeg" style="width: 1650px;height: 350px;">

        <section class="contenedor sobre-nosotros">
           
            <br>

            <p></p>
            <div class="contenedor-sobre-nosotros">
            	<video width="460" height="280" controls=""> 

            	<source src="PAGINA MAESTRA/img/blog.mp4" type="video/mp4"> 
            	</video>

                <div class="contenido-textos">
                    
                    
                    <h1>Nuestras maquinas</h1>
                    <p>En este video mostramos las maquina en trabajo a momento  que es un proceso semicontinuo que consiste en inyectar un polímero, cerámico o un metal en estado fundido.
                </div>
            </div>
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/blog.jpeg" alt="" class="imagen-about-us" width="415" height="280">
                <div class="contenido-textos">
                    <h1>Nuestras maquinas de bobina </h1>
                    <p></p>
                    <h3></h3>
                    <p>El proceso de fusión necesita de un aumento de la temperatura del polímero, que resulta del calentamiento y la fricción de este con la cámara y el husillo. 
.</p>
                </div>
            </div>
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/blog1.jpeg" alt="" class="imagen-about-us" width="415" height="280">
                <div class="contenido-textos">
                    <h1>Maquinas de calidad para nuestros clientes </h1>
                    <p></p>
                    <h3></h3>
                    <p>Nuestras maquinas estan capacitadas para hacer un trabajo de alta calidad para nuestros cliente. 
.</p>
                </div>
            </div>
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/blog2.jpeg" alt="" class="imagen-about-us" width="415" height="280">
                <div class="contenido-textos">
                      <h1>¿Como son nuestras selladoras de bolsas?</h1>
                    <p></p>
                    <h3></h3>
                    <p>Ofrecemos una variedad de equipos para corte y sellado (confección) de bolsas de plásticos y material biodegradable. Los equipos pueden hacer bolsa simples, laterales,super-mercado, de rollo y más.
.</p>
                </div>
            </div>
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/blog3.jpeg" alt="" class="imagen-about-us" width="415" height="280">
                <div class="contenido-textos">
                    <h1>¿Quieres saber mas sobre nuestras maquinas?</h1>
                    
                    <h3></h3>
                    <p>- Cortadora de rollos y bobinas en tacos, tiras o cintas, para rollos de gran dureza tales como plástico (polietileno, polipropileno), film, melamina.</p>

                    <p>-El sistema de ajuste de la cuna de rodillos, con separación ajustable, permite un perfecto asiento del material a cortar desde los diámetros más pequeños a los más grandes.</p>
                </div>
            </div>
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="PAGINA MAESTRA/img/blog6.jpeg" alt="" class="imagen-about-us" width="415" height="280">
                <div class="contenido-textos">
                    <h1>Somos una familia </h1>
                    <p></p>
                    <h3></h3>
                    <p> Trabajamos para darte lo mejor, pero tambien estamos unidos para hacer un trabajo eficaz
.</p>
                </div>
            </div>
        </section>

          <footer id="main-footer">
        <h2><span class="simbolos icon-phone"></span>(51)960352717</h2>
        <br>
        <h2><span class="simbolos icon-location"></span>REINPLAST E.I.R.L, Pro El Reposo Mza. E Lote 10 Asoc.Pro Viv.Los Suyos- Carabayllo-Lima-Lima,Lima,Carabayllo,Peru</h2>
        <br>
        <h2><span class="simbolos icon-envelop"></span>plasticoslalunita@gmail.com</h2>

       
    </footer> 

</body>
</html> 