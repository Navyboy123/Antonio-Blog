<?php
require_once(__DIR__ . "/../model/Config.php");
//verifies that that the user name and password confirmed//
function authenticateUser() {
    if(!isset($_SESSION["authenticated"])) {
        return false;
    }
    else {
        if($_SESSION["authenticated"] != true) {
            return false;
        }
        else {
            return true;
        }
    }
}
