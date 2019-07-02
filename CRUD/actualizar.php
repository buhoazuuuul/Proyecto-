<?php
require 'conexion.php';
if (!empty($_POST['cedula'])) {
  $records=$conn->prepare('UPDATE cliente SET nombres=:nombres,apellidos=:apellidos,edad=:edad,celular=:celular,direccion=:direccion,imagen=:imagen WHERE cedula=:cedula');
  $records->bindParam(':cedula',$_POST['cedula']);
  $records->bindParam(':nombres',$_POST['nombres']);
  $records->bindParam(':apellidos',$_POST['apellidos']);
  $records->bindParam(':edad',$_POST['edad']);
  $records->bindParam(':celular',$_POST['celular']);
  $records->bindParam(':direccion',$_POST['direccion']);
  /*------------------Actualizar imagen--------------------*/
$records->bindParam(':imagen',$ruta);
$nombreimg =$_FILES['imagen']['name'];
$archivo =$_FILES['imagen']['tmp_name'];
$ruta='img/'.$nombreimg;
move_uploaded_file($archivo,$ruta);
/*----------------------------------------------------*/
if ($records->execute()) {
  echo "Cliente actualizado";
} else {
  echo "Error";
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
  <h1>Actualizar cliente</h1>
  <?php
  if (isset($_GET['cedula'])) {
    $record=$conn->prepare('SELECT * FROM cliente WHERE cedula=:cedula');
    $record->bindParam('cedula',$_GET['cedula']);
    $record->execute();

    if ($record->rowCount()>=1) {
      $views=$record->fetch(PDO::FETCH_ASSOC);
    }

  }
   ?>
  <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="cedula" value="<?php echo $views['cedula']; ?>" required=>
    Cedula:</br>
    <input type="number" name="cedula" value="<?php echo $views['cedula']; ?>" required="" disabled>
    <br>
    Nombres:</br>
    <input type="text" name="nombres" value="<?php echo $views['nombres']; ?>" required="">
    <br>
    Apellidos:</br>
    <input type="text" name="apellidos" value="<?php echo $views['apellidos']; ?>" required="">
    <br>
    Edad:</br>
    <input type="number" name="edad" value="<?php echo $views['edad']; ?>" required="">
    <br>
    Celular:</br>
    <input type="number" name="celular" value="<?php echo $views['celular']; ?>" required="">
    <br>
    Direccion:</br>
    <input type="text" name="direccion" value="<?php echo $views['direccion']; ?>" required="">
    <br>
    Imagen:</br>
    <img src="<?php echo $views['imagen']; ?>" height="100">
    <input type="file" name="imagen" value="<?php echo $views['imagen']; ?>" required="">
    <br>
    <br><br>
    <input type="submit" name="Actualizar" value="Actualizar">
    <input type="button" onclick="linkar('index.php')" value="Regresar">
  </form>
</body>
</html>
