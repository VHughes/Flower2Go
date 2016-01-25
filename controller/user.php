<?php
include("../model/userdb.php");

if($_POST['method'] == "insert"){
    insert_user();
}

/*

if(isset($_POST['sub'])){
    //form has been posted
    insert_user();
}
*/
?>