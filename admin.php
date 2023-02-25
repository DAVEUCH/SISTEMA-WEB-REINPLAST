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
            <a href="admin.php">Bienvenido : <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
            <a href="desconectar.php"> Cerrar Sesion</a></li>
             <a href="admin.php">Inicio</a></li>
            <a href="subir_ventas.php">Ventas</a>
            <a href="subir_compras.php">Compras</a>
            <a href="portafolio.php">Productos</a>
            
        </nav>
        
        </header>    
      <h1 class="text-center">Lista de visitantes de la pagina de la empresa REINPLAST E.I.R.L</h1>
      
    <h3 class="text-center">Aqui puede editar y eliminar</h3>
     
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <?php


                        require("con_db.php");
                        $sql=("SELECT * FROM cliente WHERE codigo=2");

                        $query=mysqli_query($conex,$sql);

                            echo "<tr class='tablex';>";
                                echo "<th>Id</th>";
                                echo "<th>Nombre</th>";
                                echo "<th>Correo</th>";
                                echo "<th>Telefono</th>";                               
                                echo "<th>Fecha</th>";
                                 echo "<th>Editar</th>";                               
                                echo "<th>Eliminar</th>";
                               ?>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            

<?php
 while($arreglo=mysqli_fetch_array($query)){



                           
                                   echo "<tr>";
                                echo "<td>$arreglo[0]</td>";
                                echo "<td>$arreglo[1]</td>";
                                echo "<td>$arreglo[2]</td>";
                                echo "<td>$arreglo[3]</td>";
                                echo "<td>$arreglo[4]</td>";

                                echo "<td><a href='actualizar.php?id=$arreglo[0]'>Actualizar</td>";
                        echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'>Eliminar</a></td>";
                                
                             
                                

                            echo "</tr>";
                             
                             }               
                        echo "</tbody> ";       
                       echo "</table>";

                       extract($_GET);
                    if(@$idborrar==2){
        
                        $sqlborrar="DELETE FROM cliente WHERE id=$id";
                        $resborrar=mysqli_query($conex,$sqlborrar);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        //header('Location: proyectos.php');
                        echo "<script>location.href='admin.php'</script>";
                    }

            ?>                 
                    </div>
                </div>
        </div>  
    </div> 

    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="tb/jquery/jquery-3.3.1.min.js"></script>
    <script src="tb/popper/popper.min.js"></script>
    <script src="tb/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="tb/datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="tb/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="tb/datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="tb/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="tb/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="tb/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="tb/main.js"></script>
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
