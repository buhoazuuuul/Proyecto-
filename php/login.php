<?php

require_once("DbPDO.class.php");


// Instancia de la clase DbPDO
$mipdo = new DbPDO();

//Datos del inicio de sesion

$pass = $_POST['passUsuario'];
$username = $_POST['nomUsuario'];

$query = $mipdo->query("SELECT * FROM usuario WHERE usuario = :usuario", array("usuario" => $username));

if (count($query) > 0) {

  //Verificar contrasenna
  if (password_verify($pass, $query[0]["pass"])) {
    //Success!
    $_SESSION['login_user'] = $query[0]["usuario"];
    echo 'Password Matches';
  } else {
    //Invalid credentials
    echo "Contraseña incorrecta";
  }
} else {

  echo "No esta registrado ese usuario";
}
