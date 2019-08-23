<?php

$hostdb = 'localhost';
$namedb = 'innexu';
$userdb = 'root';
$passdb = '';

try {
  // Connect and create the PDO object
  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

  // changes data in "name" si "link" colummns, where id=3
   
  $doc = intval($_POST['num_doc']);
  $tel = intval($_POST['telefono']);
  $sql = "UPDATE usuario SET vereda_id=:vereda_id, num_doc = :num_doc,tipo_doc = :tipo_doc,departamento = :departamento,nombre=:nombre, apellido=:apellido,telefono =:telefono,email=:email, municipio = :municipio, fecha=:fecha,usuario=:usuario, pass=:pass, sexo=:sexo, img=:img WHERE num_doc = :last_doc";
  $count = $conn->exec($sql);
  $sth = $pdo->prepare($sql);
  $sth->bindParam(':vereda_id', $_POST['vereda_id']);
  $sth->bindParam(':num_doc', $doc);
  $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
  $sth->bindParam(':departamento', $_POST['departamento']);
  $sth->bindParam(':nombre', $_POST['nombre']);
  $sth->bindParam(':apellido', $_POST['apellido']);
  $sth->bindParam(':telefono', $tel);
  $sth->bindParam(':email', $_POST['email']);
  $sth->bindParam(':departamento', $_POST['departamento']);
  $sth->bindParam(':municipio', $_POST['municipio']);
  $sth->bindParam(':fecha', $_POST['fecha']);
  $sth->bindParam(':usuario', $_POST['usuario']);
  $sth->bindParam(':pass', $_POST['pass']);
  $sth->bindParam(':sexo', $_POST['sexo']);
  $sth->bindParam(':last_doc', $_POST['last_doc']);
  $sth->bindParam(':img', $_POST['img']);
  $conn = null;        // Disconnect
}
catch(PDOException $e) {
  echo $e->getMessage();
}

// If the query is succesfully performed ($count not false)
if($count !== false) echo 'Affected rows : '. $count;       // Shows the number of affected rows









// try {
//     $database = new Connection();
//     $db = $database->openConnection();
    
//     $doc = intval($_POST['num_doc']);
//     $tel = intval($_POST['telefono']);
//     $sql = "UPDATE usuario SET vereda_id=:vereda_id, num_doc = :num_doc,tipo_doc = :tipo_doc,departamento = :departamento,nombre=:nombre, apellido=:apellido,telefono =:telefono,email=:email, municipio = :municipio, fecha=:fecha,usuario=:usuario, pass=:pass, sexo=:sexo, img=:img WHERE num_doc = :last_doc";
//     $sth = $db->prepare($sql);
//     $sth->bindParam(':vereda_id', $_POST['vereda_id']);
//     $sth->bindParam(':num_doc', $doc);
//     $sth->bindParam(':tipo_doc', $_POST['tipo_doc']);
//     $sth->bindParam(':departamento', $_POST['departamento']);
//     $sth->bindParam(':nombre', $_POST['nombre']);
//     $sth->bindParam(':apellido', $_POST['apellido']);
//     $sth->bindParam(':telefono', $tel);
//     $sth->bindParam(':email', $_POST['email']);
//     $sth->bindParam(':departamento', $_POST['departamento']);
//     $sth->bindParam(':municipio', $_POST['municipio']);
//     $sth->bindParam(':fecha', $_POST['fecha']);
//     $sth->bindParam(':usuario', $_POST['usuario']);
//     $sth->bindParam(':pass', $_POST['pass']);
//     $sth->bindParam(':sexo', $_POST['sexo']);
//     $sth->bindParam(':last_doc', $_POST['last_doc']);
//     $sth->bindParam(':img', $_POST['img']);


//     if ($sth->execute()) {
//         echo "successfully";
//     }
// } catch (PDOException $e) {

//     echo "error" . $e->getMessage();
// }


