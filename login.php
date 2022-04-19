<?php 
// 192.168.1.7

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");


$email =$_GET['email'];
$password =$_GET['password'];



$query="SELECT * FROM usuario WHERE email='$email' AND password='$password'";
//$query="SELECT email, password from usuarios where email='$email' AND password='$password'";

$resultado=mysqli_query($connection,$query);

var_dump($resultado);


if ($resultado->num_rows>0) {
    echo "ingreso correctamente" ;
}else{
    echo "error";
}

