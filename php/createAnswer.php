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
  $fecha_hora_actual = date('Y-m-d H:i:s');
  $columns_reporte = $DB->query("INSERT INTO `respuesta_mens`(`mensaje`, `asunto`, `adjunto`,`fecha_hora`) VALUES(?,?,?,?)", array($_POST['mensaje'],$_POST['asunto'],$_POST['adjunto'],$fecha_hora_actual));
  $last_id = $DB->lastInsertId();
  $columns_reporte_x_respuesta = $DB->query("UPDATE `reportes_x_respuestas` SET `respuesta_mens_id`=? WHERE `reporte_id` = ?", array($last_id,$_POST['reporte_id']));
  $DB->closeConnection();
  if ($columns_reporte&&$columns_reporte_x_respuesta) {
      echo "successfully";
  }
  else{
      echo "error";
  }
