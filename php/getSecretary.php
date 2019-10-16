<?php

//Conexiona  la BD
define('DBHost', '127.0.0.1');
define('DBPort', 3306);
define('DBName', 'innexu');
define('DBUser', 'root');
define('DBPassword','');
require(__DIR__ . "/PDO-Class/PDO.class.php");
$DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);
$user = $_POST['user'];
$result = $DB->query("SELECT * FROM secretario WHERE usuario = :usuario", array("usuario"=>$user));
$DB->closeConnection();
echo json_encode($result);

?>

