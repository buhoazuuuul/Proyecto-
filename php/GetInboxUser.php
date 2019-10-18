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
  $data = $DB->query("SELECT reporte.id AS report_id, reporte.adjunto AS report_adjunto, reporte.asunto AS report_asunto, reporte.departamento AS report_departement , reporte.municipio AS report_municipio, reporte.fecha_hora AS report_fecha, reporte.confidencialidad, reporte.prioridad , secretario.nombre, reporte.texto AS report_text, respuesta_mens.id AS reponse_id , secretario.id AS secretary_id, respuesta_mens.mensaje AS response_text , respuesta_mens.asunto AS reponse_asunto , respuesta_mens.adjunto AS reponse_adjunto, respuesta_mens.fecha_hora AS reponse_fecha FROM reporte INNER JOIN reportes_x_respuestas on reporte.id = reportes_x_respuestas.reporte_id INNER JOIN respuesta_mens ON respuesta_mens.id = reportes_x_respuestas.respuesta_mens_id INNER JOIN secretario on secretario.id=reportes_x_respuestas.usuario_id Where reportes_x_respuestas.usuario_id = ? AND reportes_x_respuestas.respuesta_mens_id IS NOT NULL ORDER BY respuesta_mens.fecha_hora DESC", array( $_POST['id_usuario']));
  $DB->closeConnection();

  if ($data) {
      echo json_encode($data);
  }
  else{
  echo "Query error";
  }
