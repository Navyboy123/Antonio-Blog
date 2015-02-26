<?php
    require_once(__DIR__ . "/../model/config.php");
    //comfirms that the user name and password are correct//
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
   
    //if the login and username are correct then the user is able to log in//
    if($query->num_rows == 1) {
        $row = $query->fetch_array();
        
        if($row["password"] === crypt($password, $row["salt"])) {
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>";
        }
        else {
            echo "<p>Invalid username or password</p>";
        }
    }
    else {
        echo "<p>Invalid username or password</p>";
    }
