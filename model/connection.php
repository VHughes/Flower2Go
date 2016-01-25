<?php

try{
    $db = new PDO("mysql:dbname=admin;host=localhost", "root", "password");
} catch (PDOException $e) {
    echo "FAIL";
    echo $e;
    
}


?>