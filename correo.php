<!DOCTYPE html>
<?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:index.php");
    }elseif ($_SESSION['codigo']==1) {
        header("Location:admin.php");
    }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACTO</title>

    <link rel="stylesheet" href="correo/css/estilos.css">
    <link rel="stylesheet" href="correo/css/font-awesome.css">
     <link rel="shortcut icon" href="PAGINA MAESTRA/img/loguito34.png" type="image/x-icon">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-2/font.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-3/font.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-2/main.css">
    <link rel="stylesheet" href="PAGINA MAESTRA/css-4/font.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 

    <script src="correo/js/jquery-3.2.1.js"></script>
    <script src="correo/js/script.js"></script>
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
            
        </nav>
        
        </header>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="logito"></span>
                <h2>REINPLAST E.I.R.L</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span>plasticoslalunita@gmail.com</p>
                <p><span class="fa fa-mobile"></span> (51)960352717</p>
            </section>
        </section>

        <form action="enviar.php" method="post" class="form_contact">
            <h2>Envianos un mensaje y te responderemos inmediatamente</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="nombre" required>

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone" name="telefono">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="correo" required>

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

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
