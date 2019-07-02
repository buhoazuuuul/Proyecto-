<?php
session_start();//sesiones
require 'conexion.php';
if (!empty($_POST['cedula'])) {
  $tem=$conn->prepare('INSERT INTO cliente (cedula,nombres,apellidos,edad,celular,direccion,imagen) VALUES
  (:cedula,:nombres,:apellidos,:edad,:celular,:direccion,:imagen)');
  $tem->bindParam(':cedula',$_POST['cedula']);
  $tem->bindParam(':nombres',$_POST['nombres']);
  $tem->bindParam(':apellidos',$_POST['apellidos']);
  $tem->bindParam(':edad',$_POST['edad']);
  $tem->bindParam(':celular',$_POST['celular']);
  $tem->bindParam(':direccion',$_POST['direccion']);
    /*------------------Subir imagen--------------------*/
  $tem->bindParam(':imagen',$ruta);
  $nombreimg =$_FILES['imagen']['name'];
  $archivo =$_FILES['imagen']['tmp_name'];
  $ruta='img/'.$nombreimg;
  move_uploaded_file($archivo,$ruta);
  /*----------------------------------------------------*/
if ($tem->execute()) {
  echo "Creado";
} else {
  echo "No creado";
}
}
//Algoritmo para proteger
if (isset($_SESSION['user_id'])) {//sesiones
  $search=$conn->prepare('SELECT id,user,pass FROM user WHERE id=:id');
  $search->bindParam(':id',$_SESSION['user_id']);
  $search->execute();
  $results=$search->fetch(PDO::FETCH_ASSOC);
  $user= null;

  if (count($results)>0) {
    $user=$results;
  }
}
//Algoritmo para proteger
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
  <?php 
  if (!empty($user)) {
    echo 'Bienvenido'.$user['user'];
   ?>

  <h1>Registro de cliente</h1>
  <form action="insertar.php" method="post" enctype="multipart/form-data">
    Cedula:</br>
    <input type="number" name="cedula" value="" required="">
    <br>
    Nombres:</br>
    <input type="text" name="nombres" value="" required="">
    <br>
    Apellidos:</br>
    <input type="text" name="apellidos" value="" required="">
    <br>
    Edad:</br>
    <input type="number" name="edad" value="" required="">
    <br>
    Celular:</br>
    <input type="number" name="celular" value="" required="">
    <br>
    Direccion:</br>
    <input type="text" name="direccion" value="" required="">
    </br>
    Imagen:</br>
    <input type="file" name="imagen" value="" required="">
    <br>
    <br><br>
    <input type="submit" name="Guardar">
    <input type="button" onclick="linkar('mostrar.php')" value="Regresar">
  </form>
</body>
</html>
<?php 
}else{
  header('location:index.php');
}
 ?>