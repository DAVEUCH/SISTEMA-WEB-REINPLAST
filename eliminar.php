<?php 

$conex = mysqli_connect("localhost","root","","dbcarrito");


$id = $_GET['id'];
$eliminar = "DELETE FROM factura_orden_producto WHERE item_id='$id'";
$resultadoEliminar = mysqli_query($conex,$eliminar);





 ?>