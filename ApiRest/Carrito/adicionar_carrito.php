<?php

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");

$users= "";

if(isset($_POST['id'])){

$id =$_POST['id'];
$nombre =$_POST['nombre'];
$descripcion =$_POST['descripcion'];
$precio =$_POST['precio'];
$imagen =$_POST['imagen'];

    
 $query="INSERT INTO carrito (id,nombre,precio,descripcion,imagen) values
 ('$id','$nombre','$precio','$descripcion','$imagen')";

    $users = mysqli_query($connection,$query);

}

if ($users) {
    echo "registro correctamente";
}else{
    echo "error";
}