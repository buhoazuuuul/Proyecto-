<?php

//Conexiona  la BD
define('DBHost', '127.0.0.1');
define('DBPort', 3306);
define('DBName', 'innexu');
define('DBUser', 'root');
define('DBPassword','');
require(__DIR__ . "/PDO-Class/PDO.class.php");
$DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);

//Datos
$doc = intval($_POST['num_doc']);
$id = intval($_POST['id']);
$tel = intval($_POST['telefono']);
$id_vereda = intval($_POST['vereda_id']);
$pass = $_POST['pass'];
$new_pass = password_hash($_POST['new_pass'], PASSWORD_DEFAULT); ;

//Cambiar contrasenna
if (isset($new_pass)) { 
    if (verifyPassword($pass,$id)) {
        echo $DB->query("UPDATE usuario SET vereda_id=:vereda_id, num_doc=:num_doc, tipo_doc = :tipo_doc, nombre = :nombre, apellido=:apellido, telefono=:telefono,email =:email, departamento=:departamento, municipio = :municipio, fecha=:fecha, usuario=:usuario,pass=:pass, sexo=:sexo, img=:img WHERE id = :id", array("pass"=>$new_pass,"id"=>$id,"vereda_id"=>$id_vereda,"num_doc"=>$doc,"tipo_doc"=> $_POST['tipo_doc'],"nombre"=>$_POST['nombre'],"apellido"=>$_POST['apellido'],"telefono"=> $tel,"email"=>$_POST['email'],"departamento"=>$_POST['departamento'],"municipio"=>$_POST['municipio'],"fecha"=>$_POST['fecha'],"usuario"=>$_POST['usuario'],"sexo"=>$_POST['sexo'],"img"=>$_POST['img']));
} else {
    echo "Password wrong";
}
}else{

if (verifyPassword($pass,$id)) {
    echo $DB->query("UPDATE usuario SET vereda_id=:vereda_id, num_doc=:num_doc, tipo_doc = :tipo_doc, nombre = :nombre, apellido=:apellido, telefono=:telefono,email =:email, departamento=:departamento, municipio = :municipio, fecha=:fecha, usuario=:usuario, sexo=:sexo, img=:img WHERE id = :id", array("id"=>$id,"vereda_id"=>$id_vereda,"num_doc"=>$doc,"tipo_doc"=> $_POST['tipo_doc'],"nombre"=>$_POST['nombre'],"apellido"=>$_POST['apellido'],"telefono"=> $tel,"email"=>$_POST['email'],"departamento"=>$_POST['departamento'],"municipio"=>$_POST['municipio'],"fecha"=>$_POST['fecha'],"usuario"=>$_POST['usuario'],"sexo"=>$_POST['sexo'],"img"=>$_POST['img']));
} else {
    echo "Password wrong";
}

}

function verifyPassword($new_pass,$id) {
  $DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);
  $user_data = $DB->query("SELECT pass FROM usuario WHERE id=?", array($id));
  $last_pass = $user_data[0]['pass'];
  //Verificar contrasenna
  if (password_verify($new_pass, $last_pass)) {
    //Success!
    return true;
  } else {
    //Invalid credentials
    return false;
  }
}