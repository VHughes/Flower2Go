<?php

try{
    $db = new PDO("mysql:dbname=admin;host=localhost", "root", "root");
} catch (PDOException $e) {
    echo "FAIL";
    echo $e;
    
}


?>