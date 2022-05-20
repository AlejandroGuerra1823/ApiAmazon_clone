<?php 

require_once(dirname(__DIR__)."../db/db_config.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){

   $data=file_get_contents('php://input');

    $db = new DBConfig();
    $dbConnection= $db->connect();
    $query="INSERT INTO compras (compra) values ('$data')";
    $resultado= $dbConnection->query($query);

     if($resultado){
         echo "compra exitosa";

     }else{
         
         echo "compra rechazada";
     }

}else{
    echo "papi paila";

}
?>