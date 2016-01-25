<?php
include("connection.php");

function insert_user(){
    global $db;
    
    $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."')";
    $result = $db->query($query);
    echo $result;
    
}
?>