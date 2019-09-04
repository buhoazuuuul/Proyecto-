<?php
//Revisar para actualizar  el documento y el pass
define('DBHost', '127.0.0.1');
define('DBPort', 3306);
define('DBName', 'innexu');
define('DBUser', 'root');
define('DBPassword','');
require(__DIR__ . "/PDO-Class/PDO.class.php");
$DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);
$doc = intval($_POST['num_doc']);
$tel = intval($_POST['telefono']);
$id_vereda = intval($_POST['vereda_id']);
echo $DB->query("UPDATE usuario SET vereda_id=:vereda_id, tipo_doc = :tipo_doc, nombre = :nombre, apellido=:apellido, telefono=:telefono,email =:email, departamento=:departamento, municipio = :municipio, fecha=:fecha, usuario=:usuario, sexo=:sexo, img=:img WHERE num_doc = :num_doc", array("vereda_id"=>$id_vereda,"num_doc"=>$doc,"tipo_doc"=> $_POST['tipo_doc'],"nombre"=>$_POST['nombre'],"apellido"=>$_POST['apellido'],"telefono"=> $tel,"email"=>$_POST['email'],"departamento"=>$_POST['departamento'],"municipio"=>$_POST['municipio'],"fecha"=>$_POST['fecha'],"usuario"=>$_POST['usuario'],"sexo"=>$_POST['sexo'],"img"=>$_POST['img']));
