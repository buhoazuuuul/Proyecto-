<?php

require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo=new DbPDO();

//Datos del inicio de sesion

$username = $_POST["userName"];

$query = $mipdo->query("SELECT * FROM usuario WHERE usuario = :usuario",array("usuario"=>$username));

echo json_encode($query);

?>
