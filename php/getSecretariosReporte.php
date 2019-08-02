<?php

require_once("DbPDO.class.php");

$mipdo = new DbPDO();

$query = $mipdo->query("SELECT * FROM secretario");

echo json_encode($query);
