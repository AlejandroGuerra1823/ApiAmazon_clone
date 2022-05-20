<?php


require_once(dirname(__DIR__)."../db/db_config.php");

$db = new DBConfig();
$dbConnection= $db->connect();

$product= "";

$query= "SELECT * FROM carrito";
    $product = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
    echo(json_encode($product));