<?php 

require_once(dirname(__DIR__)."../db/db_config.php");
//if ($_SERVER['REQUEST_METHOD']=="POST"){

 //$data=json_decode(file_get_contents('php://input'));

$nombre=$_GET['id'];


   // $identification = $data['id'];

$product= "";

$texto="";

    $db = new DBConfig();
    $dbConnection= $db->connect();
    $query= "SELECT * FROM compras WHERE id='$nombre'";
    $product = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
  
   echo var_dump(implode(",",(implode(",", $product))));

   //echo $nombre;
//}

?>