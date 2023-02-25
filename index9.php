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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PRODUCTOS</title>


<link rel="shortcut icon" href="carrousel-html-portafolio/img/loguito34.png" type="image/x-icon">
<link rel="stylesheet" href="css-portafolio/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="carrousel-html-portafolio/css/bootstrap.min.css">
<link rel="stylesheet" href="carrousel-html-portafolio/css/styles.css">
<link rel="stylesheet" href="css-2-portafolio/font.css">
<link rel="stylesheet" href="css-2-portafolio/main.css">
    <link rel="stylesheet" href="carrousel-html-portafolio/css-3/font.css">
    <link rel="stylesheet" href="carrousel-html-portafolio/css-4/font.css">
    <link rel="stylesheet" href="carrousel-html-portafolio/css-2/main.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
var current = 0;
var imagenes = new Array();

$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
	 
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
        
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    });

    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('click', function() {
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
        }
        
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    }); 
 });
</script>
</head>

<body>
    <div class="social-bar">
        <a href="https://www.facebook.com/Pl%C3%A1sticos-La-Lunita-114059173629053" class="icon icon-facebook" target="_blank"></a>
        <a href="https://wa.me/51960352717" class="icon icon-whatsapp" target="_blank"></a>
        
    </div>
<nav class="navbar-expand-lg fixed-top  bg-dark">
   
    


    
            
            <a href="">Bienvenido : <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
            <a href="desconectar.php"> Cerrar Sesion</a></li>
            <a href="inicio.php">Inicio</a>
            <a href="acerca.php">Nosotros</a>
            <a href="portafolio.php">Productos</a>
            <a href="blog.php">Blog</a>
            <a href="correo.html">Contactanos</a>
            
            
        </nav>
        
        </header>
<div class="container">
    <h1>Los Mejores Productos Nacionales</h1>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
           <li class="breadcrumb-item">Manga Doble Cara</a></li>
           <li class="breadcrumb-item"><a href="portafolio.php">Regresar a productos</a></li>
           
          
          
        </ol> 
    </nav>
    

    
    
    <div class="row">
        <div id="content" class="col-lg-12">
            <div id="carrusel">
                <a href="#" class="left-arrow"><img src="carrousel-html-portafolio/images/left-arrow.png" /></a>
                <a href="#" class="right-arrow"><img src="carrousel-html-portafolio/images/right-arrow.png" /></a>
                <div class="carrusel">
                    <div class="product" id="product_0">
                        <img src="carrousel-html-portafolio/gallery/manga-doble cara/doblecara40pulg.jpg" width="195" height="100" />
                        <h5>40 pulg. </h5>
                    </div>
                    <div class="product" id="product_1">
                        <img src="carrousel-html-portafolio/gallery/manga-doble cara/DBC2.PNG" width="195" height="100" />
                        <h5>60 pulg.</h5>
                    </div>
                    <div class="product" id="product_2">
                        <img src="carrousel-html-portafolio/gallery/manga-doble cara/doblecara80pulg.jpg" width="195" height="100" />
                        <h5>80 pulg.</h5>
                    </div>
                    <div class="product" id="product_3">
                        <img src="carrousel-html-portafolio/gallery/manga-doble cara/3.png" width="195" height="100" />
                        <h5>100 pulg.</h5>

                    </div>
                    <div class="product" id="product_4">
                        <img src="carrousel-html-portafolio/gallery/manga-doble cara/2.png" width="195" height="100" />
                        <h5>120 pulg.</h5>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
     <a href="pedido.php" class="btn btn-primary">
                    <i class="fa fa-download"></i> Haz tu pedido aqui
                </a>
                <br>
                <br>
                <br>
    
    
    <div class="card">
        <h3 class="card-header">Informacion</h3>
        <div class="card-body">
            <h5 class="card-title"> Color:</h5>
            <p>Azul,Negro</p>
            <h5 class="card-title"> Grosores:</h5>
            <p>2 micras, 3 micras, 4 micras, 5 micras, 6 micras, 7 micras, 8 micras y 9 micras. Protección UV.</p>
            <h5 class="card-title"> Medidas:</h5>
            <p>40, 60, 80, 100, 120 Plg 1m, 1.2m, 1.5m, 2m, 2.5m y 3m (Margarito)</p>
            <h5 class="card-title"> Pesos de la bobina:</h5>
            <p> Segun la eleccion del Cliente. Se realiza Producciones especiales y personalizadas Segun el Requerimiento del Cliente..</p>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ecc1a47193e29e4" async="async"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>
        </div>
    </div>
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
</footer>
</body>
</html>
