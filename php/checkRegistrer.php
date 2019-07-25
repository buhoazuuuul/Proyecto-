<?php

require_once("DbPDO.class.php");
// Instancia de la clase DbPDO
$mipdo = new DbPDO();
//Datos del inicio de sesion
$value = $_GET["mail"];
echo $value;

if (isset($_GET["value"])) {
    $query = $mipdo->query("SELECT * FROM usuario WHERE usuario = :usuario OR email= :usuario ", array("usuario" => $_GET["value"]));
    //Retorna los usuarios
    echo $_GET["value"];
}
