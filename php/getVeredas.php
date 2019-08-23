<?php

require_once("DbPDO.class.php");
$mipdo = new DbPDO();
$query = $mipdo->query("SELECT * FROM vereda");
echo json_encode($query);