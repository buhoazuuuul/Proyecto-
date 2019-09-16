<?php

    //Conexiona  la BD
    define('DBHost', '127.0.0.1');
    define('DBPort', 3306);
    define('DBName', 'innexu');
    define('DBUser', 'root');
    define('DBPassword','');
    require(__DIR__ . "/PDO-Class/PDO.class.php");
    $DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);

    //Datos a insertar
    $fecha_hora_actual = date('Y-m-d H:i:s');
    $fecha = (string) $fecha_hora_actual;
    $prioridad = $_POST['prioridad'];
    $confidencialidad = $_POST['confidencialidad'];
    $asunto =  (string) $_POST['asunto'];
    //Ejecucion de la query
    $columns = $DB->query("INSERT INTO `reporte`(`categoria`, `vereda_id`, `adjunto`, `asunto`, `departamento`, `municipio`, `fecha_hora`, `prioridad`, `confidencialidad`, `texto`) VALUES(?,?,?,?,?,?,?,?,?,?)", array( $_POST['categoria'],$_POST['id_vereda'],$_POST['adjunto'], $asunto, $_POST['departamento'],$_POST['municipio'], $fecha,$prioridad, $confidencialidad,$_POST['texto']));

    if ($columns) {
        echo "successfully";
    }
    else{
    echo "error";

    }

