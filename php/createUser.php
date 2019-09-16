<?php

include_once('conexion.php');

try {
    $database = new Connection();
    $db = $database->openConnection();
    //Datos a insertar
    $mipdosword = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    //Ejecucion de la query
    $sql = "INSERT INTO usuario (id, vereda_id, num_doc, tipo_doc, nombre, apellido, telefono, email, departamento, municipio, fecha, usuario, pass, tipo_usuario, sexo, img) VALUES (NULL,:vereda_id,:num_doc,:tipo_doc,:nombre,:apellido,:telefono,:email,:departamento,:municipio,:fecha,:usuario,:pass,:tipo_usuario,:sexo,:img)";
    $sth = $db->prepare($sql);
    $sth->bindParam(':vereda_id', $_POST['vereda_id']);
    $sth->bindParam(':num_doc', $_POST['num_doc']);
    $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
    $sth->bindParam(':nombre', $_POST['nombre']);
    $sth->bindParam(':apellido', $_POST['apellido']);
    $sth->bindParam(':telefono', $_POST['telefono']);
    $sth->bindParam(':email', $_POST['email']);
    $sth->bindParam(':departamento', $_POST['departamento']);
    $sth->bindParam(':municipio', $_POST['municipio']);
    $sth->bindParam(':fecha', $_POST['fecha']);
    $sth->bindParam(':usuario', $_POST['usuario']);
    $sth->bindParam(':pass', $mipdosword);
    $sth->bindParam(':tipo_usuario', $_POST['tipo_usuario']);
    $sth->bindParam(':sexo', $_POST['sexo']);
    $sth->bindParam(':img', $_POST['img']);

    if ($sth->execute()) {
        echo "successfully";
    }
} catch (PDOException $e) {

    echo "error" . $e->getMessage();
}
