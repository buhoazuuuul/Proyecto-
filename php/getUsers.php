<?php

$table = 'usuario';
$primaryKey = 'id';
$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'vereda_id', 'dt' => 1),
    array('db' => 'num_doc', 'dt' => 2),
    array('db' => 'tipo_doc', 'dt' => 3),
    array('db' => 'nombre', 'dt' => 4),
    array('db' => 'apellido', 'dt' => 5),
    array('db' => 'telefono', 'dt' => 6),
    array('db' => 'email', 'dt' => 7),
    array('db' => 'departamento', 'dt' => 8),
    array('db' => 'municipio', 'dt' => 9),
    array('db' => 'fecha', 'dt' => 10),
    array('db' => 'usuario', 'dt' => 11),
    array('db' => 'pass', 'dt' => 12),
    array('db' => 'tipo_usuario', 'dt' => 13),
    array('db' => 'sexo', 'dt' => 14),
    array('db' => 'img', 'dt' => 15)

);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'innexu',
    'host' => '127.0.0.1'
);
require('ssp.class.php');

echo json_encode(
    SSP::simple($_POST, $sql_details, $table, $primaryKey, $columns)
);
