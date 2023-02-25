<?php
require("con_db.php");
sleep(2);
$usuario = $_POST['nombres'];
$contraseña = $_POST['contraseña'];
$usuarios=$mysqli->query("Select nombres,apellido 
                        From usuario Where usuario='".$nombres."'
                      AND contraseña='".$contraseña."'");
if ($usuarios->num_rows==1):
  $datos= $usuarios->fetch_assoc();
    echo json_encode(array('error'=>false,'tipo'=>$datos['tipo']));
else:
    echo json_encode(array('error'=>true));
endif;
$mysqli->close();



  




?>