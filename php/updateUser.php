<?php
require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo = new DbPDO();
$doc = intval($_POST['num_doc']);
$tel = intval($_POST['telefono']);

// $updateUser = $mipdo->query("UPDATE `usuario` SET `num_doc` = :num_doc , `tipo_doc`=:tipo_doc, `nombre` = :nombre,`apellido`=:apellido,`telefono` =:telefono,`email=:email, `residencia` = :residencia, `fecha`=:fecha,`usuario`=:usuario WHERE `num_doc` = :num_doc");
$updateUser = $mipdo->query("UPDATE usuario SET nombre = 'Jose Manuel' WHERE num_doc = 12345678");

echo $updateUser;
