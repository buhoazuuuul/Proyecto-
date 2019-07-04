<?php
require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo = new DbPDO();

//Encriptando la contrasenna
$mipdosword = password_hash($_POST['pass'], PASSWORD_BCRYPT);
// Haciendo el binding mediante el método bindMas
$mipdo->bindMas(array("id_mensaje" => $_POST['id_mensaje'], "categoria" => $_POST['categoria'], "asunto" => $_POST['asunto'], "lugar" => $_POST['lugar'], "fecha_hora" => $_POST['fecha_hora'], "prioridad" => $_POST['prioridad'], "confidencialidad" => $_POST['confidencialidad'], "texto" => $_POST['texto'], "adjunto" => $_POST['adjunto']));

$datos = $mipdo->query("INSERT INTO mensaje (id_mensaje,categoria,asunto,lugar,fecha_hora,prioridad,confidencialidad,texto,adjunto) VALUES (:id_mensaje,:categoria,:asunto,:lugar,:fecha_hora,:prioridad,:confidencialidad,:texto,:adjunto) ");

echo $datos;
