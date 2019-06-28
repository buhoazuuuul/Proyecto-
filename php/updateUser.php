<?php
require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo = new DbPDO();

$mipdo->bindMas(array("num_doc" => $_POST['num_doc'], "tipo_doc" => $_POST['tipo_doc'], "nombre" => $_POST['nombre'], "apellido" => $_POST['apellido'], "telefono" => $_POST['telefono'], "email" => $_POST['email'], "residencia" => $_POST['residencia'], "fecha" => $_POST['fecha'], "usuario" => $_POST['usuario']));

$updateUser = $mipdo->query("UPDATE usuario SET num_doc = :num_doc , tipo_doc=:tipo_doc, nombre = :nomre,apellido=:apellido,telefono =:telefono,email=:email, residencia = :residencia, fecha=:fecha,usuario=:usuario WHERE num_doc = :num_doc");

echo $updateUser;

//En el js se debe decodificar el json asi --> var contact = JSON.parse(data);
