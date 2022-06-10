<?php 

require_once(dirname(__DIR__)."../db/db_config.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){

$data=json_decode(file_get_contents('php://input'), true);

$nombre="";

$nombre=$data['Ncompra'];

$product= "";

$texto="";

    $db = new DBConfig();
    $dbConnection= $db->connect();
    $query= "SELECT * FROM factura WHERE codigo='$nombre'";
    $product = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo(json_encode($product));

}else{
    echo "negativo";
}
?>