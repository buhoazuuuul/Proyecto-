<?php
require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo = new DbPDO();

$datos1 = $mipdo->query("SELECT * FROM usuario");

echo json_encode($datos1);

//En el js se debe decodificar el json asi --> var contact = JSON.parse(data);
