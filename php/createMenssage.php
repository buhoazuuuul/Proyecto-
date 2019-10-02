<?php

  //Conexiona  la BD
  define('DBHost', '127.0.0.1');
  define('DBPort', 3306);
  define('DBName', 'innexu');
  define('DBUser', 'root');
  define('DBPassword','');
  require(__DIR__ . "/PDO-Class/PDO.class.php");
  $DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);
  date_default_timezone_set('America/Bogota');
  //Datos a insertar
  $fecha_hora_actual = date('Y-m-d H:i:s');
  $prioridad = $_POST['prioridad'];
  $confidencialidad = $_POST['confidencialidad'];
  $asunto =  (string) $_POST['asunto'];
  //Datos para la tabla reportes_x_repuesta
  $id_usuario = $_POST['id_usuario'];
  $id_secretario= $_POST['id_secretario'];
  //Insercion de los datos en reporte
  $columns_reporte = $DB->query("INSERT INTO `reporte`(`categoria`, `vereda_id`, `adjunto`, `asunto`, `departamento`, `municipio`, `fecha_hora`, `prioridad`, `confidencialidad`, `texto`) VALUES(?,?,?,?,?,?,?,?,?,?)", array( $_POST['categoria'],$_POST['id_vereda'],$_POST['adjunto'], $asunto, $_POST['departamento'],$_POST['municipio'], $fecha_hora_actual,$prioridad, $confidencialidad,$_POST['texto']));
  $last_id = $DB->lastInsertId();
  $columns_reporte_x_respuesta = $DB->query("UPDATE `reportes_x_respuestas` SET `secretario_id`=?,`usuario_id`=? WHERE `reporte_id` = ?", array( $id_secretario, $id_usuario,$last_id));
  $DB->closeConnection();
  if ($columns_reporte&&$columns_reporte_x_respuesta) {
      echo "successfully";
  }
  else{
  echo "error";
  }
