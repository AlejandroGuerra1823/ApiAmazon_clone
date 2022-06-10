<?php
require_once(dirname(__DIR__)."../db/db_config.php");


$product= "";

$db = new DBConfig();
$dbConnection= $db->connect();
$query= "DELETE FROM carrito";
$product = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
