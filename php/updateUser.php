<?php
include_once('conexion.php');

try {
    $database = new Connection();
    $db = $database->openConnection();
    $doc = intval($_POST['num_doc']);
    $tel = intval($_POST['telefono']);
    if (isset($_POST['img'])) {

        $sql = "UPDATE `usuario` SET `id` = :id , `vereda_id`=:vereda_id, `num_doc` = :num_doc,`nombre`=:nombre, `apellido`=:apellido,`telefono` =:telefono,`email`=:email, `departamento` = :departamento, `municipio` = :municipio, `fecha`=:fecha,`usuario`=:usuario, `pass`=:pass, `sexo`=:sexo, `img`=:img WHERE `num_doc` = :last_doc";
        $sth = $db->prepare($sql);
        $sth->bindParam(':id', $_POST['id']);
        $sth->bindParam(':vereda_id', $_POST['vereda_id']);
        $sth->bindParam(':num_doc', $doc);
        $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
        $sth->bindParam(':nombre', $_POST['nombre']);
        $sth->bindParam(':apellido', $_POST['apellido']);
        $sth->bindParam(':telefono', $tel);
        $sth->bindParam(':email', $_POST['email']);
        $sth->bindParam(':departamento', $_POST['departamento']);
        $sth->bindParam(':municipio', $_POST['municipio']);
        $sth->bindParam(':fecha', $_POST['fecha']);
        $sth->bindParam(':usuario', $_POST['usuario']);
        $sth->bindParam(':pass', $_POST['pass']);
        $sth->bindParam(':sexo', $_POST['sexo']);
        $sth->bindParam(':last_doc', $_POST['last_doc']);
        $sth->bindParam(':img', $_POST['img']);
    } else {

        $sql = "UPDATE `usuario` SET `id` = :id , `vereda_id`=:vereda_id, `num_doc` = :num_doc,`nombre`=:nombre, `apellido`=:apellido,`telefono` =:telefono,`email`=:email, `departamento` = :departamento, `municipio` = :municipio, `fecha`=:fecha,`usuario`=:usuario, `pass`=:pass, `sexo`=:sexo, `img`=:img WHERE `num_doc` = :last_doc";
        $sth = $db->prepare($sql);
        $sth->bindParam(':id', $_POST['id']);
        $sth->bindParam(':vereda_id', $_POST['vereda_id']);
        $sth->bindParam(':num_doc', $doc);
        $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
        $sth->bindParam(':nombre', $_POST['nombre']);
        $sth->bindParam(':apellido', $_POST['apellido']);
        $sth->bindParam(':telefono', $tel);
        $sth->bindParam(':email', $_POST['email']);
        $sth->bindParam(':departamento', $_POST['departamento']);
        $sth->bindParam(':municipio', $_POST['municipio']);
        $sth->bindParam(':fecha', $_POST['fecha']);
        $sth->bindParam(':usuario', $_POST['usuario']);
        $sth->bindParam(':pass', $_POST['pass']);
        $sth->bindParam(':sexo', $_POST['sexo']);
        $sth->bindParam(':last_doc', $_POST['last_doc']);
        $sth->bindParam(':img', $_POST['img']);
    }


    if ($sth->execute()) {
        echo "successfully";
    }
} catch (PDOException $e) {

    echo "error" . $e->getMessage();
}
