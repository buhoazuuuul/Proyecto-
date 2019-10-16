<?php

require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo = new DbPDO();

//Datos del inicio de sesion
$pass = $_POST['passUsuario'];
$username = $_POST['nomUsuario'];
$type_user = $_POST['isSecretary'];


if ($type_user == "true") {
  $query = $mipdo->query("SELECT * FROM secretario WHERE usuario = :usuario", array("usuario" => $username));

  if (count($query) > 0) {
   if($query[0]["pass"] == $pass){
    echo 'Contraseña correcta';
  }else{
    echo "Contraseña incorrecta";
  }
  } else {
   echo "No esta registrado como secretario";
  }
  
} else {

  $query = $mipdo->query("SELECT * FROM usuario WHERE usuario = :usuario", array("usuario" => $username));
  validatePass($pass,$query);
}

function validatePass($password, $data){

if (count($data) > 0) {
  //Verificar contrasenna
  if (password_verify($password, $data[0]["pass"])) {
    //Success!
    $_SESSION['login_user'] = $data[0]["usuario"];
    echo 'Contraseña correcta';
  } else {
    //Invalid credentials
    echo "Contraseña incorrecta";
  }
} else {

  echo "No esta registrado este usuario";
}

}