<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "innexu";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>alert('Se hizo la conexion')</script>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

  $tem = $conn->prepare("INSERT INTO usuario (num_doc,tipo_doc,nombre,apellido,telefono,email,residencia,fecha,usuario,pass) VALUES
  (:num_doc,:tipo_doc,:nombre,:apellido,:telefono,:email,:residencia,:fecha,:usuario,:pass)");

  $tem->bindParam(':num_doc',$_POST['num_doc']);
  $tem->bindParam(':tipo_doc',$_POST['tipo_doc']);
  $tem->bindParam(':nombre',$_POST['nombre']);
  $tem->bindParam(':apellido',$_POST['apellido']);
  $tem->bindParam(':telefono',$_POST['telefono']);
  $tem->bindParam(':email',$_POST['email']);
  $tem->bindParam(':residencia',$_POST['residencia']);
  $tem->bindParam(':fecha',$_POST['fecha']);
  $tem->bindParam(':usuario',$_POST['usuario']);
  //$password=password_hash($_POST['pass'], PASSWORD_BCRYPT);
  $tem->bindParam(':pass',$_POST['pass']);

   if ($tem->execute()) { 		
     echo "<script>alert('Se guardo')</script>";
	} 
	else {
 		echo "<script>alert('No se guardo')</script>";
	}
  $conn = null;

?>
