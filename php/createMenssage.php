<?php

include_once('conexion.php');

try {
    $database = new Connection();
    $db = $database->openConnection();
    //Datos a insertar
    $fecha_hora_actual = date('Y-m-d H:i:s');
    $fecha = (string) $fecha_hora_actual;
    $prioridad = (int) $_POST['prioridad'];
    $confidencialidad = intval($_POST['confidencialidad']);
    $asunto =  (string) $_POST['asunto'];
    //Ejecucion de la query
    $sql = "INSERT INTO mensaje (categoria, asunto, lugar, fecha_hora, prioridad, confidencialidad, texto, adjunto) VALUES (:categoria,:asunto,:lugar,:fecha_hora,:prioridad,:confidencialidad,:texto,:adjunto)";
    $sth = $db->prepare($sql);
    $sth->bindParam(':categoria', $_POST['categoria']);
    $sth->bindParam(':asunto', $asunto);
    $sth->bindParam(':lugar', $_POST['lugar']);
    $sth->bindParam(':fecha_hora', $fecha);
    $sth->bindParam(':prioridad', $prioridad);
    $sth->bindParam(':confidencialidad', $confidencialidad);
    $sth->bindParam(':texto', $_POST['mensaje']);
    $sth->bindParam(':adjunto', $_POST['adjunto']);

    if ($sth->execute()) {
        echo "successfully";
    }
} catch (PDOException $e) {

    echo "error" . $e->getMessage();
}
