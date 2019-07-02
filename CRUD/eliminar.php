<?php
require 'conexion.php';
$result=$conn->prepare('DELETE FROM cliente WHERE cedula=:cedula');
$result->bindParam(':cedula',$_GET['cedula']);
$result->execute();
if ($result) {
  header('location:mostrar.php');
}else{
  echo "Error no se elimino";
}
 ?>
