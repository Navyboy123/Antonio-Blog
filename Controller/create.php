<?php
require_once ("/../model/config.php");

$connection = new mysqli($host,$username,$password);

if($connection->connect_error) {
    die("Error: " . $connection->connect_error);
    
}

    $exsists= $connection->select_db($database);
    
    if ($exsists){
        $query= $connection->query("CREATE DATABASE $database");
        
        if ($query){
            echo "succesfully created database: " . $database; 
        }
        
        else{
            echo "Database already created";
        }
        
    }
        
        $query = $connection->query("CREATE TABLE posts ("
                ." id int (11) NOT NULL INCRIMENT");
    
        
        $connection->close();
    

