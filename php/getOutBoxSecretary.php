<?php

  //Conexiona  la BD
  define('DBHost', '127.0.0.1');
  define('DBPort', 3306);
  define('DBName', 'innexu');
  define('DBUser', 'root');
  define('DBPassword','');
  require(__DIR__ . "/PDO-Class/PDO.class.php");
  $DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);

  //Inner join tables
  $data = $DB->query("SELECT respuesta_mens.id AS idRespuesta, reporte.prioridad, usuario.nombre, usuario.apellido, reporte.asunto AS asunto_reporte , respuesta_mens.asunto AS asunto_respuesta, respuesta_mens.fecha_hora  FROM `respuesta_mens`
                     INNER JOIN reportes_x_respuestas ON respuesta_mens.id = reportes_x_respuestas.respuesta_mens_id 
                     INNER JOIN reporte ON reporte.id = reportes_x_respuestas.reporte_id INNER JOIN usuario ON usuario.id = reportes_x_respuestas.usuario_id  WHERE reportes_x_respuestas.secretario_id = ?", array( $_POST['id_secretario']));
  $DB->closeConnection();

  if ($data) {
      echo json_encode($data);
  }
  else{
  echo "Query error";
  }
