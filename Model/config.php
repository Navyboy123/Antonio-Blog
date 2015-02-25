<?php

  require_once(__DIR__ . "/database.php");
    session_start();
    session_regenerate_id(true);
    
$path="/Antonio-blog/";

  $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "database_db"; 
    
       if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username,$password, $database);
        $_SESSION["connection"] = $connection;
        
        
        
       }

