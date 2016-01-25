<?php

include("connection1.php");


function insert_password(){
    global $db;
    $query = "INSERT INTO passwords(password) VALUES ('".$_POST['password']."')";
    $result = $db->query($query);
}

function view_passwords(){
    global $db;
    $query = "SELECT * FROM passwords";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function enter_info(){
    global $db;
    $query = "INSERT INTO passwords(images, name, password, comments) VALUES ('".$_POST['image']."', '".$_POST['name']."', '".$_POST['comment']."', '".$_POST['password']."')";
    //echo $result->fetchAll();
    $result = $db->query($query);
    echo json_encode("updated!");
    
}

function update_password(){
    global $db;
    $query = "UPDATE passwords SET password = '".$_POST['password']."' WHERE id = ".$_POST['id']."";
    $result = $db->query($query);
    echo json_encode("updated!");
}

function delete_password(){
    global $db;
    $query = "DELETE FROM passwords WHERE id = ".$_POST['id']."";
    $result = $db->query($query);
    echo json_encode("deleted");
}

?>