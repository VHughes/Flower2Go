<?php
include("../ModelTest/password1.php");

if($_POST['method'] == "insert"){
    insert_password();
}

if($_POST['method'] == "view"){
    view_passwords();
}

if($_POST['method'] == "enter"){
    enter_info();
    show_info();
}

if($_POST['method'] == "update"){
    update_password();
}

if($_POST['method'] == "delete"){
    delete_password();
}
?>