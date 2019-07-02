<?php
include_once('conexion.php');

try {
    $database = new Connection();
    $db = $database->openConnection();
    $doc = intval($_POST['num_doc']);
    $tel = intval($_POST['telefono']);
    $sql = "UPDATE `usuario` SET `num_doc` = :num_doc , `tipo_doc`=:tipo_doc, `nombre` = :nombre,`apellido`=:apellido,`telefono` =:telefono,`email`=:email, `residencia` = :residencia, `fecha`=:fecha,`usuario`=:usuario WHERE `num_doc` = :num_doc";
    $sth = $db->prepare($sql);
    $affectedrows  = $db->exec($sql);
    if (isset($affectedrows)) {
        echo "Record has been successfully updated";
    }
} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
}


// Instancia de la clase DbPDO
// $mipdo = new DbPDO();
// $doc = intval($_POST['num_doc']);
// $tel = intval($_POST['telefono']);

// $updateUser = $mipdo->query("UPDATE `usuario` SET `num_doc` = :num_doc , `tipo_doc`=:tipo_doc, `nombre` = :nombre,`apellido`=:apellido,`telefono` =:telefono,`email=:email, `residencia` = :residencia, `fecha`=:fecha,`usuario`=:usuario WHERE `num_doc` = :num_doc");
// $updateUser = $mipdo->query("UPDATE usuario SET apellido = 'Rosas' WHERE num_doc = 12345678");

// echo $updateUser;
