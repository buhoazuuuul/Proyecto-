<?php
include_once('conexion.php');

try {
    $database = new Connection();
    $db = $database->openConnection();
    $doc = intval($_POST['num_doc']);
    $tel = intval($_POST['telefono']);
    if (isset($_POST['img'])) {

        $sql = "UPDATE `usuario` SET `num_doc` = :num_doc , `tipo_doc`=:tipo_doc, `nombre` = :nombre,`apellido`=:apellido,`telefono` =:telefono,`email`=:email, `residencia` = :residencia, `fecha`=:fecha,`usuario`=:usuario, `img`=:img WHERE `num_doc` = :last_doc";
        $sth = $db->prepare($sql);
        $sth->bindParam(':num_doc', $doc);
        $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
        $sth->bindParam(':departamento', $_POST['departamento']);
        $sth->bindParam(':nombre', $_POST['nombre']);
        $sth->bindParam(':apellido', $_POST['apellido']);
        $sth->bindParam(':telefono', $tel);
        $sth->bindParam(':email', $_POST['email']);
        $sth->bindParam(':residencia', $_POST['residencia']);
        $sth->bindParam(':fecha', $_POST['fecha']);
        $sth->bindParam(':usuario', $_POST['usuario']);
        $sth->bindParam(':last_doc', $_POST['last_doc']);
        $sth->bindParam(':img', $_POST['img']);
    } else {

        $sql = "UPDATE `usuario` SET `num_doc` = :num_doc , `tipo_doc`=:tipo_doc, `nombre` = :nombre,`apellido`=:apellido,`telefono` =:telefono,`email`=:email, `residencia` = :residencia, `fecha`=:fecha,`usuario`=:usuario WHERE `num_doc` = :last_doc";
        $sth = $db->prepare($sql);
        $sth->bindParam(':num_doc', $doc);
        $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
        $sth->bindParam(':nombre', $_POST['nombre']);
        $sth->bindParam(':apellido', $_POST['apellido']);
        $sth->bindParam(':telefono', $tel);
        $sth->bindParam(':email', $_POST['email']);
        $sth->bindParam(':residencia', $_POST['residencia']);
        $sth->bindParam(':fecha', $_POST['fecha']);
        $sth->bindParam(':usuario', $_POST['usuario']);
        $sth->bindParam(':last_doc', $_POST['last_doc']);
    }


    if ($sth->execute()) {
        echo "successfully";
    }
} catch (PDOException $e) {

    echo "error" . $e->getMessage();
}
