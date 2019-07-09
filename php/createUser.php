<?php

include_once('conexion.php');

try {
    $database = new Connection();
    $db = $database->openConnection();
    //Datos a insertar
    $mipdosword = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    //Ejecucion de la query
    $sql = "INSERT INTO usuario (num_doc,tipo_doc,nombre,apellido,telefono,email,residencia,fecha,usuario,pass) VALUES (:num_doc,:tipo_doc,:nombre,:apellido,:telefono,:email,:residencia,:fecha,:usuario,:pass)";
    $sth = $db->prepare($sql);
    $sth->bindParam(':num_doc', $_POST['num_doc']);
    $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
    $sth->bindParam(':nombre', $_POST['nombre']);
    $sth->bindParam(':apellido', $_POST['apellido']);
    $sth->bindParam(':telefono', $_POST['telefono']);
    $sth->bindParam(':email', $_POST['email']);
    $sth->bindParam(':residencia', $_POST['residencia']);
    $sth->bindParam(':fecha', $_POST['fecha']);
    $sth->bindParam(':usuario', $_POST['usuario']);
    $sth->bindParam(':pass', $mipdosword);

    if ($sth->execute()) {
        echo "successfully";
    }
} catch (PDOException $e) {

    echo "error" . $e->getMessage();
}
