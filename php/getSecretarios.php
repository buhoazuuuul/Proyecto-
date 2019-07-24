<?php
require('ssp.class.php');

$table = 'secretario';

$primaryKey = 'num_doc';

$columns = array(
    array('db' => 'num_doc', 'dt' => 0),
    array('db' => 'tipo_doc',  'dt' => 1),
    array('db' => 'nombre',   'dt' => 2),
    array('db' => 'apellido',     'dt' => 3),
    array('db' => 'dependencia',     'dt' => 4),
    array('db' => 'telefono',     'dt' => 5),
    array('db' => 'email',     'dt' => 6),
    array('db' => 'usuario',     'dt' =>  7),
    array('db' => 'pass',     'dt' =>  8)
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'innexu',
    'host' => '127.0.0.1'
);


echo json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));
