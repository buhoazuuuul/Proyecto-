<?php

require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo = new DbPDO();

//Datos del inicio de sesion
if (isset($_GET["userName"])) {
    $query = $mipdo->query("SELECT * FROM usuario WHERE usuario = :usuario ", array("usuario" => $_GET["userName"]));
    echo $query;
}
if (isset($_GET["mail"])) {
    $query = $mipdo->query("SELECT * FROM usuario WHERE email = :email ", array("usuario" => $_GET["email"]));
    echo $query;
}
