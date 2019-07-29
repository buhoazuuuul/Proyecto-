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
    $sql = "INSERT INTO reporte ( id, categoria_id, vereda_id, adjunto, veredas_id, asunto, departamento, municipio, vereda, fecha_hora, prioridad, confidencialidad, texto) 
    VALUES (:id,:categoria_id,:vereda_id,:adjunto,:veredas_id,:asunto,:departamento,:municipio,:vereda,:fecha_hora,:prioridad,:confidencialidad,:texto)";
    $sth = $db->prepare($sql);
    $sth->bindParam(':id', $_POST['id']);
    $sth->bindParam(':categoria_id', $_POST['categoria_id']);
    $sth->bindParam(':vereda_id', $_POST['vereda_id']);
    $sth->bindParam(':adjunto', $_POST['adjunto']);
    $sth->bindParam(':veredas_id', $_POST['veredas_id']);
    $sth->bindParam(':asunto', $_POST['asunto']);
    $sth->bindParam(':departamento', $_POST['departamento']);
    $sth->bindParam(':municipio', $_POST['municipio']);
    $sth->bindParam(':vereda', $_POST['vereda']);
    $sth->bindParam(':fecha_hora', $_POST['fecha_hora']);
    $sth->bindParam(':prioridad', $_POST['prioridad']);
    $sth->bindParam(':confidencialidad', $_POST['confidencialidad']);
    $sth->bindParam(':texto', $_POST['texto']);
    if ($sth->execute()) {
        echo "successfully";
    }
} catch (PDOException $e) {

    echo "error" . $e->getMessage();
}
