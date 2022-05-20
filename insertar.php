<?php 
// 192.168.1.7

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");

if (!$connection) {
    echo "error de conexion";
}

$nombre =$_POST['nombre'];
$email =$_POST['email'];
$password =$_POST['password'];

$query="INSERT INTO usuario (nombre,email,password)values ('$nombre','$email','$password')";

$resultado=mysqli_query($connection,$query);

if ($resultado) {
    echo json_encode("registro correctamente");
}else{
    echo json_encode("error");
}
