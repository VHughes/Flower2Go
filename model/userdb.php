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
function login_user(){
    global $db;
    if(isset($_POST['username']) && !empty($_POST['username'])){
            $query = "SELECT username FROM users WHERE username = '".$_POST['username']."' ";
            $result = $db->query($query);
            echo json_encode($result->fetchAll());
            
    }
}


?>