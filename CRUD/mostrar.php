<?php
session_start();//sesiones
require'conexion.php';
$result=$conn->prepare('SELECT * FROM cliente');
$result->execute();

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
 ?>
<DOCTYPE html>
<html>
<head>
   <title>CRUD</title>
   <script type="text/javascript">
function linkar(link){
  location.href=link;
}
</script>
<!-- DataTables Responsive CSS-->
<link type="text/css" rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/datatables-responsive/dataTables.responsive.css">
</head>
<body>             
	<?php 
	if (!empty($user)) {
		echo 'Bienvenido'.$user['user'];
	 ?>
 <h1>CRUD</h1>
  <input type="button" onclick="linkar('logout.php')" value="Salir">
<input type="button" name="" value="Ingresar" onclick="linkar('insertar.php')">
<h2>MOSTRAR CLIENTES</h2>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		    <div class="panel panel-default">
			     <div class="panel-body">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
					     <tr>
						    <th>Cedula</th>
						    <th>Nombres</th>
						    <th>Apellidos</th>
						    <th>Edad</th>
						    <th>Celular</th>
						    <th>Direccion</th>
						    <th>Imagen</th>
						    <th>Actualizar</th>
						    <th>Eliminar</th>
						 </tr>
						 </thead>
						  <?php
						while($view=$result->fetch(PDO::FETCH_ASSOC)){
						   ?>
						   <tr>
						     <td><?php echo $view['cedula']; ?></td>
						     <td><?php echo $view['nombres']; ?></td>
						     <td><?php echo $view['apellidos']; ?></td>
						     <td><?php echo $view['edad']; ?></td>
						     <td><?php echo $view['celular']; ?></td>
						     <td><?php echo $view['direccion']; ?></td>
						    <td><img src="<?php echo $view['imagen']; ?>" height="100"></td>
						     <td><a href="actualizar.php?cedula=<?php echo $view['cedula']; ?>">Actualizar</a></td>
						     <td><a href="eliminar.php?cedula=<?php echo $view['cedula']; ?>">Eliminar</a></td>
						   </tr>
			              <?php } ?>
			          </table>
			     </div>
		</div>
		</div>
	</div>
</div>
<!--jQuery y Bootstrap js-->
<script src="vendor/bootstrap/js/bootstrap.js"></script>
<script src="vendor/jquery/jquery.js"></script>
<!--DataTables JavaScript Traducir-->
<script src="vendor/datatables/js/jquery.dataTables.js"></script>
<script src="vendor/datatables-plugins/dataTables.bootstrap.js"></script>
<script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
<!--Page Level Demi Scrips- Tables- Use for reference-->
<script>
	$(document).ready(function(){
		$('#dataTables-example').DataTable({
			responsive:true
		});
	});
</script>
</body>
</html>
<?php 
}else{
	header('location:index.php');
}
 ?>