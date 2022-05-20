<?php

require_once(dirname(__DIR__)."/../../db/db_config.php");


$product= "";

$db = new DBConfig();
$dbConnection= $db->connect();
$query= "SELECT * FROM products";
$product = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo(json_encode($product));