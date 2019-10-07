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
  $data = $DB->query("SELECT reporte.categoria,vereda.vereda,reporte.fecha_hora,reporte.departamento,reporte.municipio,reporte.prioridad,reporte.confidencialidad,reporte.texto, reporte.adjunto, reporte.asunto, secretario.nombre , secretario.apellido,secretario.img 
                      FROM reporte INNER JOIN reportes_x_respuestas ON reporte.id = reportes_x_respuestas.reporte_id 
                      INNER JOIN secretario ON reportes_x_respuestas.secretario_id = secretario.id 
                      INNER JOIN vereda ON vereda.id = reporte.vereda_id 
                      WHERE reporte.id = ?", array( $_POST['reporte_id']));
  
  $DB->closeConnection();

  if ($data) {
      echo json_encode($data);
  }
  else{
  echo "Query error";
  }