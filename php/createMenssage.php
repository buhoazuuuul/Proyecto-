<?php
require_once("DbPDO.class.php");
// INSERT INTO `mensaj e`(`categoria`, `asunto`, `lugar`, `fecha_hora`, `prioridad`, `confidencialidad`, `texto`, `adjunto`) VALUES( 1,"Nada ","abejorral ","2013-11-24 17:15:10 ", 1, 1,"0 ","")
// Instancia de la clase DbPDO
$mipdo = new DbPDO();
$fecha_hora_actual = date('Y-m-d H:i:s');
$fecha = (string) $fecha_hora_actual;
$prioridad = (int) $_POST['prioridad'];
$confidencialidad = (int) $_POST['confidencialidad'];
$asunto =  (string) $_POST['asunto'];


// Haciendo el binding mediante el método bindMas
$mipdo->bindMas(array("categoria" => $_POST['categoria'], "asunto" => $asunto, "lugar" => $_POST['lugar'], "fecha_hora" => $fecha, "prioridad" => $prioridad, "confidencialidad" => $confidencialidad, "texto" => $_POST['mensaje'], "adjunto" => $_POST['adjunto']));

$datos = $mipdo->query("INSERT INTO mensaje (categoria, asunto, lugar, fecha_hora, prioridad, confidencialidad, texto, adjunto) VALUES (1,'No se','Abejorral' ,'2013-11-24 17:15:10',1,1,'','')");

echo $datos;
