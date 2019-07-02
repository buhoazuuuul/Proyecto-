<?php
require 'conexion.php';
if (!empty($_POST['cedula'])) {
  $tem=$conn->prepare('INSERT INTO user (nombres,apellidos,cedula,celular,direccion,user,pass) VALUES
  (:nombres,:apellidos,:cedula,:celular,:direccion,:user,:pass)');
  $tem->bindParam(':nombres',$_POST['nombres']);
  $tem->bindParam(':apellidos',$_POST['apellidos']);
  $tem->bindParam(':cedula',$_POST['cedula']);
  $tem->bindParam(':celular',$_POST['celular']);
  $tem->bindParam(':direccion',$_POST['direccion']);
  $tem->bindParam(':user',$_POST['user']);
  $password=password_hash($_POST['pass'], PASSWORD_BCRYPT);
  $tem->bindParam(':pass',$password);

if ($tem->execute()) {
  echo "Creado";
} else {
  echo "No creado";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<script type="text/javascript">
function linkar(link){
  location.href=link;
}
</script>
</head>
<body>
  <h1>Registro de cliente</h1>
  <form action="insertaradm.php" method="post" enctype="multipart/form-data">
    Nombres:</br>
    <input type="text" name="nombres" value="" required="">
    <br>
    Apellidos:</br>
    <input type="text" name="apellidos" value="" required="">
    <br>
    Cedula:</br>
    <input type="number" name="cedula" value="" required="">
    <br>
    Celular:</br>
    <input type="number" name="celular" value="" required="">
    <br>
    Direccion:</br>
    <input type="text" name="direccion" value="" required="">
    </br>
    User:</br>
    <input type="text" name="user" value="" required="">
    </br>
    Contraseña:</br>
    <input type="password" name="pass" value="" required="">
    </br>
    <br><br>
    <input type="submit" name="Guardar">
    <input type="button" onclick="linkar('index.php')" value="Regresar">
  </form>
</body>
</html>
