<?php

require_once("DbPDO.class.php");
// Instancia de la clase DbPDO
$mipdo = new DbPDO();

$query = $mipdo->query("SELECT * FROM usuario");

//Retorna los usuarios
echo json_encode($query);
