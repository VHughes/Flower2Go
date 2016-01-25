<?php

try{
    $db = new PDO("mysql:dbname=bcit;host=localhost", "root", "password");
} catch (PDOException $e) {
    echo "FAIL";
    echo $e;
    
}


?>