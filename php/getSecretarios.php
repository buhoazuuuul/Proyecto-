<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'secretario';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
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
    array('db' => 'usuario', 'dt' => 11),
    array('db' => 'pass', 'dt' => 12),
    array('db' => 'sexo', 'dt' => 13),
    array('db' => 'img', 'dt' => 14)
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'innexu',
    'host' => '127.0.0.1'
);
require('ssp.class.php');
 
echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);
