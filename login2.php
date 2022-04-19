<?php


$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");


//$email = $_POST['email'];
//$password = $_POST['password'];

$email="elvive@cien.com";
$password="123456";

$sentencia = $connection->prepare("SELECT * FROM usuario WHERE email=? AND password=?");
$sentencia->bind_param('ss',$email,$password);
$sentencia->execute();

$resultado = $sentencia->get_result();




if($fila = $resultado->fetch_assoc()){
   // var_dump($fila);
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
   // echo json_encode($fila["email"],JSON_UNESCAPED_UNICODE);
    //echo json_encode($fila["password"],JSON_UNESCAPED_UNICODE);
}else{
    echo"error";
}
$sentencia->close();
$connection->close();

?>