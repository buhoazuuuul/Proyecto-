<?php

$table = 'secretario';

$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'num_doc', 'dt' => 1),
    array('db' => 'tipo_doc', 'dt' => 2),
    array('db' => 'nombre', 'dt' => 3),
    array('db' => 'apellido', 'dt' => 4),
    array('db' => 'cargo', 'dt' => 5),
    array('db' => 'dependencia', 'dt' => 6),
    array('db' => 'departamento', 'dt' => 7),
    array('db' => 'municipio', 'dt' => 8),
    array('db' => 'telefono', 'dt' => 9),
    array('db' => 'email', 'dt' => 10),
    array('db' => 'usuario', 'dt' =>  11),
    array('db' => 'pass', 'dt' =>  12),
    array('db' => 'sexo', 'dt' =>  13),
    array('db' => 'img', 'dt' =>  14)
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'innexu',
    'host' => '127.0.0.1'
);
require('ssp.class.php');

echo json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));
