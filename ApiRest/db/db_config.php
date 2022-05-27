<?php 
class DBConfig{

    private $user = "admin";
    private $password = "Moviles2";
    private $dbname = "amazon_clone";
    private $host ="database-1.csycveucbr4k.us-east-1.rds.amazonaws.com";
    private $port ="3306";
   


    public function connect(){
        try{
        $dsn= "mysql:hots=$this->host;port=$this->port;dbname=$this->dbname";
        $connection = new PDO($dsn, $this->user, $this->password);
        $connection-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connection;
        echo "conecction full";

        }
        catch(PDOException $exception){
            echo "Connection failded ".$exception->getMessage();
        }
    }

}

$clase= new DBConfig;

$clase->connect();






?>
