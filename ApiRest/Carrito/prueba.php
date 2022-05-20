<?php
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");

$data=file_get_contents('php://input');
if (!$connection) {
    echo "error de conexion";
}

$nombre =$_GET['nombre1'];
//$email =$_POST['email'];
//$password =$_POST['password'];
echo $nombre;
//$query="INSERT INTO usuario (nombre,email,password)values ('$nombre','$email','$password')";

//$resultado=mysqli_query($connection,$query);

?>