<?php

require_once("DbPDO.class.php");

// Instancia de la clase DbPDO
$mipdo=new DbPDO();

//Datos del inicio de sesion

$pass = $_POST['passususario'];
$username = $_POST['nomusuario'];

$query = $mipdo->query("SELECT * FROM usuario WHERE usuario = :usuario",array("usuario"=>$username));

if(count($query>0)){

    echo json_encode($query);
    //Verificar contrasenna
     if (password_verify($pass, $query['pass'])) {
     // Success!
     echo 'Password Matches';
     } else {
    // // Invalid credentials
     echo 'Password Mismatch';
     }

}else{
    
  echo "No registered";

}


?>
