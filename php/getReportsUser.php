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

  //Inner join tables
  $data = $DB->query("SELECT reporte.id, reporte.prioridad, reporte.asunto,reporte.fecha_hora, secretario.nombre , reporte.adjunto FROM reporte INNER JOIN reportes_x_respuestas ON reporte.id = reportes_x_respuestas.reporte_id 
                                    INNER JOIN secretario ON reportes_x_respuestas.secretario_id = secretario.id
                                    WHERE reportes_x_respuestas.usuario_id = ? ORDER BY reporte.fecha_hora DESC", array( $_POST['id_usuario']));
  
  $DB->closeConnection();

  if ($data) {
      echo json_encode($data);
  }
  else{
  echo "Query error";
  }
