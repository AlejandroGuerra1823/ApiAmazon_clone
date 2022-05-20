<?php

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");

$users= "";

if(isset($_POST['id'])){

$id =$_POST['id'];


    
 $query="DELETE FROM carrito WHERE id='$id'";

    $users = mysqli_query($connection,$query);

}

if ($users) {
    echo "Producto eliminado";
}else{
    echo "error";
}