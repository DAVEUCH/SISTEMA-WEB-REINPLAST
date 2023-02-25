<!doctype html>
<html lang="es">
<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:index.php");
}elseif ($_SESSION['codigo']==2) {
    header("Location:index.php");
}
?>

  <head>
    
    <!-- Required meta tags -->
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

    
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tb/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="tb/">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="tb/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="tb/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
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
      <h1 class="text-center">Editar Usuario</h1>
      
    <h3 class="text-center">Aqui puede editar los usuarios de la empresa REINPLAST E.I.R.L</h3>

    <?php
        extract($_GET);
        require("con_db.php");

        $sql="SELECT * FROM cliente WHERE id=$id";
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $ressql=mysqli_query($conex,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
                $id=$row[0];
                $nombre=$row[1];
                $correo=$row[2];
                $telefono=$row[3];
                $fecha=$row[4];
            }



        ?>

        <form action="ejecutaactualizar.php" method="post">
    Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
    Nombre<br> <input type="text" name="nombre" value="<?php echo $nombre?>"><br>
    Correo<br> <input type="text" name="correo" value="<?php echo $correo?>"><br>
    Telefono<br> <input type="text" name="telefono" value="<?php echo $telefono?>"><br>
    Fecha<br> <input type="text" name="fecha" value="<?php echo $fecha?>"><br>
                
                <br>
                <input type="submit" value="Guardar" class="btn btn-success btn-primary">
            </form>

                  
        
        
        <div class="span8">
        
        </div>  
        </div>  
        <br/>
        


        <!--EMPIEZA DESLIZABLE-->
        
         <!--TERMINA DESLIZABLE-->



        
        
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
