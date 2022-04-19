<?php 
class DBConfig{

    private $user = "root";
    private $password = "";
    private $dbname = "amazon_Clone";
    private $host ="localhost";

    public function connect(){
        try{
        $dsn= "mysql:hots=$this->host;dbname=$this->dbname";
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