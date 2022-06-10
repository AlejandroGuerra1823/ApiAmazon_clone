<?php 

require_once(dirname(__DIR__)."../db/db_config.php");
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");

$Ncompra; 
$data;
$product= "";

$query="SELECT MAX(codigo) codigo FROM factura";

$users = mysqli_query($connection,$query);

$obj = $users->fetch_object();

$numero = $obj->codigo + 1;

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"amazon_clone");
$query="INSERT INTO numero_compra (Ncompra) values ('$numero')";

$Ncompra = mysqli_query($connection,$query);


echo $numero;

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $data=file_get_contents('php://input');


    echo "que lo que 3 de 20 timon dañao";
    $milista= json_decode($data, true);

    foreach ($milista as $producto ) {
       
        $lista1 = $producto['id'];
        $lista2 = $producto['nombre'];
        $lista3 = $producto['precio'];
        $lista4 = $producto['descripcion'];
        $lista5 = $producto['imagen'];
      //  $lista6 = $producto['categoria'];

        $connection = mysqli_connect("localhost","root","");
        mysqli_select_db($connection,"amazon_clone");

        $query="INSERT INTO factura (codigo,id,nombre,precio,descripcion,imagen) values
        ('$numero','$lista1','$lista2','$lista3','$lista4','$lista5')";

        $users = mysqli_query($connection,$query);

        if($users){
            echo "registro correcto";
        }

       
    }



}
 

/*
header('Content-Type: application/json');
echo(json_encode($product));

*/




?>