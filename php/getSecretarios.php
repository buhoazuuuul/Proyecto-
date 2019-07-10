<?php

require_once("DbPDO.class.php");
// Instancia de la clase DbPDO
$mipdo = new DbPDO();

$query = $mipdo->query("SELECT nombre,apellido,dependencia,telefono FROM secretario");

//Retorna los secretarios
echo json_encode($query);
