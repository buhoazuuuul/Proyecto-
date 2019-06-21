<?php
require 'conexion.php';

if (!empty($_POST['num_doc'])) {
  $tem=$conn->prepare('INSERT INTO usuario (num_doc,tipo_doc,nombre,apellido,telefono,email,residencia,fecha,usuario,pass) VALUES
  (:num_doc,:tipo_doc,:nombre,:apellido,:telefono,:email,:residencia,:fecha,:usuario,:pass)');
  $tem->bindParam(':num_doc',$_POST['num_doc']);
  $tem->bindParam(':tipo_doc',$_POST['tipo_doc']);
  $tem->bindParam(':nombre',$_POST['nombre']);
  $tem->bindParam(':apellido',$_POST['apellido']);
  $tem->bindParam(':telefono',$_POST['telefono']);
  $tem->bindParam(':email',$_POST['email']);
  $tem->bindParam(':residencia',$_POST['residencia']);
  $tem->bindParam(':fecha',$_POST['fecha']);
  $tem->bindParam(':usuario',$_POST['usuario']);
  $password=password_hash($_POST['pass'], PASSWORD_BCRYPT);
  $tem->bindParam(':pass',$password);

  if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
}
?>
