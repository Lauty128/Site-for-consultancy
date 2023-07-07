<?php 

// $password = '12052003';
class Database{
    
    private $server = 'localhost';
    private $dbname = 'consultora';
    private $user = 'root';
    private $password = '';
    
    function connect_to_database(){
        
        try{
            $conection = "mysql:host=".$this->server.";dbname=".$this->dbname;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false, 
            ];
    
            $PDO = new PDO($conection, $this->user, $this->password, $options);
            return $PDO;
        }
        catch(PDOException $error){
            //echo 'Ocurrio un error';
            //var_dump($error->getMessage());
            return $error;
            //return null;
        }
    
    }
}
