<!doctype html>
<html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:index.php");
}elseif ($_SESSION['codigo']==2) {
    header("Location:index.php");
}
?>
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

    
      
    
    




<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<style>
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 5px;
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
            <a href="subir_compras.php">Bienvenido : <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
            <a href="desconectar.php"> Cerrar Sesion</a></li>
            
            
        </nav>
        
        </header>  

        <h1 class="text-center">Lista de documentos de Compra subidos en el sistema</h1>
      
    <h3 class="text-center">Aqui puede subir y eliminar los archivos(pdf,png,jpg,etc)</h3>  

<div class="container">
  <div class="row">
    <h4>Agregar Nueva Descarga</h4>
    <hr style="margin-top:5px;margin-bottom: 5px;">
    <div class="content"> </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Cargar Documentos</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-6">
          <form method="POST" action="CargarFicherosCompras.php" enctype="multipart/form-data">
<div class="form-group">
              <label class="btn btn-primary" for="my-file-selector">
                <input required="" type="file" name="file" id="exampleInputFile">
              </label>
              
</div>
          <button class="btn btn-primary" type="submit">Cargar Documentos</button>
          </form>
        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>
  
<!--tabla-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Descargas Disponibles</h3>
      </div>
      <div class="panel-body">
   
<table class="table">
  <thead>
    <tr>
      <th width="7%">#</th>
      <th width="70%">Nombre del Archivo</th>
      <th width="13%">Descargar</th>
      <th width="10%">Eliminar</th>
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("subidas_compras");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="subidas_compras/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
      <td><a title="Eliminar Archivo" href="EliminarFicheroCompras.php?name=subidas_ventas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
<!-- Fin tabla--> 
  </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</body>
</html>
