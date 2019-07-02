<?php 
session_start();
if(isset($_SESSION['user_id']))  {
header('Location: mostrar.php');
}
require 'conexion.php';
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
  $search=$conn->prepare('SELECT * FROM user WHERE user=:user');
  $search->bindParam(':user',$_POST['user']);
  $search->execute();
  $result=$search->fetch(PDO::FETCH_ASSOC);
  $message='Error en la consulta';

  if(count($result)>0 && password_verify($_POST['pass'], $result['pass'])) {
    $_SESSION['user_id']=$result['id'];
    header('Location: mostrar.php');
  }else {
    $message='Sorry, usuario o contraseña incorrecta';
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
  <h1>Sistema de Usuarios</h1>
  <?php 
   if (!empty($message)): ?> 
    <h2><?=$message?></h2>
<?php endif;?>
  <form action="index.php" method="post" enctype="multipart/form-data">
Usuario</br>
    <input type="text" name="user"></br>
Contraseña</br>
 <input type="password" name="pass" > </br>
    <input type="submit" value="Ingresar">
    <input type="button" onclick="linkar('mostrar.php')" value="Mostrar">
    <br>
  </form>
</body>