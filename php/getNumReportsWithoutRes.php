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
  $data = $DB->query("SELECT  COUNT(reporte.id) as number_reports, reporte.id, reporte.fecha_hora, reporte.asunto, usuario.nombre, usuario.img FROM reporte INNER JOIN reportes_x_respuestas on reporte.id = reportes_x_respuestas.reporte_id INNER JOIN usuario on usuario.id=reportes_x_respuestas.usuario_id Where reportes_x_respuestas.secretario_id = ? AND reportes_x_respuestas.respuesta_mens_id IS NULL GROUP BY reporte.id ", array( $_POST['id_secretario']));
  $DB->closeConnection();

  if ($data) {
      echo json_encode($data);
  }
  else{
  echo "Query error";
  }
