<?php

require_once(dirname(__DIR__)."/../db/db_config.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){

    $data= json_decode(file_get_contents('php://input'),true);

    //$data=$_POST['email'];
    //$identification = $data=$_POST['email'];
    $identification = $data['email'];

    $db = new DBConfig();
    $dbConnection= $db->connect();
    $query= "SELECT * FROM usuario WHERE email='$identification'";
    $users = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    
    header('Content-Type: application/json');
    echo(json_encode($users[0]));


    //var_dump($data);

   /* $identification = $_GET['identification'];
    $query = "SELECT * FROM users WHERE identification = $identification";
    $users = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    $age = array("Peter"=>"35","Ben"=>"37","joe"=>"43");
    echo(json_encode($users));*/
}else{
    echo "papi paila";

}
?>