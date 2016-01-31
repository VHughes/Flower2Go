<?php
include("../model/userdb.php");

if (isset($_POST['username']) && !empty($_POST['username'])){
    insert_user();
}

if(isset($_POST['method']) && !empty($_POST['method'])){
    get_user();

}


?>