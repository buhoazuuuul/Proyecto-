<?php
require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo=new DbPDO();

//Encriptando la contrasenna
$mipdosword = password_hash($_POST['pass'], PASSWORD_BCRYPT);
// Haciendo el binding mediante el método bindMas
//$mipdo->bindMas(array("num_doc"=>$_POST['num_doc'],"tipo_doc"=>$_POST['tipo_doc'],"nombre"=>$_POST['nombre'],"apellido"=>$_POST['apellido'],"telefono"=>$_POST['telefono'],"email"=>$_POST['email'],"residencia"=>$_POST['residencia'],"fecha"=>$_POST['fecha'],"usuario"=>$_POST['usuario'],"pass"=>$mipdosword));
$mipdo->bindMas(array("num_doc"=>$_POST['num_doc'],"tipo_doc"=>$_POST['tipo_doc'],"nombre"=>$_POST['nombre'],"apellido"=>$_POST['apellido'],"telefono"=>$_POST['telefono'],"email"=>$_POST['email'],"residencia"=>$_POST['residencia'],"fecha"=>$_POST['fecha'],"usuario"=>$_POST['usuario'],"pass"=>$mipdosword));
  
$datos=$mipdo->query("INSERT INTO usuario (num_doc,tipo_doc,nombre,apellido,telefono,email,residencia,fecha,usuario,pass) VALUES (:num_doc,:tipo_doc,:nombre,:apellido,:telefono,:email,:residencia,:fecha,:usuario,:pass)");

echo $datos;
