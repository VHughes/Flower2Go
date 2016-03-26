<?php
include("ShoppingCartManager.php");
//require_once('init.php');
//loadScripts();

if(isset($_POST['action'])) {
    LoadAdminShoppingCart();
}

function LoadAdminShoppingCart() {
    $scm = new ShoppingCartManager();
    if($_POST['action'] == "added"){
        
        $scm->adminAddItemsToCart(); 
    } else {
        //failed to add
    }
}

if(isset($_POST['method'])) {
    viewAllAdminProducts();
}

function viewAllAdminProducts() {
    $scm = new ShoppingCartManager();
    if($_POST['method'] == "view"){
        
        $response = $scm->viewAllProducts();
        echo json_encode($response);
    }
}


if(isset($_POST['thing'])) {
    updateAdminProducts();
}

function updateAdminProducts() {
    $scm = new ShoppingCartManager();
    if($_POST['thing'] == "update"){
        
        $response = $scm->updateAdminProducts();
        echo json_encode($response);
    }
}


if(isset($_POST['delete'])) {
    deleteAdminProducts();
}

function deleteAdminProducts() {
    $scm = new ShoppingCartManager();
    if($_POST['delete'] == "delete"){
        
        $response = $scm->deleteAdminProducts();
        echo json_encode($response);
    }
}



?>
