<?php

include("conexion.php");


$nom_prod = $_POST['nom_prod'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$nom_prod = $_POST['nom_prod '];
$UM = $_POST['UM'];


$insertProducto1 ="INSERT INTO producto( nom_prod,tipoprod, categoria, cantidad, UM) VALUES ('$nom_prod','$categoria','$cantidad','nom_prod','$UM')";
if (mysql_query($insertProducto1))
 {
  header("location:login.php");
}
else
{
	echo "error";
}