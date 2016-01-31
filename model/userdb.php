<?php
include("connection.php");
session_start();
$id = session_id();
print_r ($id);

function insert_user(){
    global $db;
    
    $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."')";
    $result = $db->query($query);
    echo $result;
    
}
function get_user(){
    global $db;
    $query = "SELECT * FROM users WHERE username = ".$_POST['username']." AND password = ".$_POST['password']."";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
    
}


?>