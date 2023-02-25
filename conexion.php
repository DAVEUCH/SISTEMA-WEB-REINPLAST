<?php


$manejador="mysql";
$servidor="localhost";
$usuario="root";
$pass="";
$base="dbcarrito";
$cadena="$manejador:host=$servidor;dbname=$base";
$cnx = new PDO($cadena,$usuario,$pass);
$conex = mysqli_connect("localhost","root","","dbcarrito");
?>