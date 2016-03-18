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


if(isset($_POST['update'])) {
    viewAllAdminProducts();
}

function updateAdminProducts() {
    $scm = new ShoppingCartManager();
    if($_POST['update'] == "update"){
        
        $response = $scm->updateAdminProducts();
        echo json_encode($response);
    }
}





/*
    $data = array("status" => "not set!");

    if(Utils::isPOST()) {
        $scm = new ShoppingCartManager();

        $parameters = new Parameters("POST");

        //$action = $parameters->getValue('action');

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

                // start the cart, so start session, create cart table in DB
                if(isset($_SESSION['started'])) {
                    $data = array("status" => "fail", "msg" => "Something went wrong - BOOM.");
                    echo json_encode($data, JSON_FORCE_OBJECT);
                    return;
                }
      /*          
                $items = array("title" => $_POST['items']['title'], "qty" => $_POST['items']['qty'], "desc" => $_POST['items']['desc'], "price" => $_POST['items']['price'], "sku" => $_POST['items']['sku']);
                
             */ //  $memcachedConfig = array("host" => "127.0.0.1","port" => "11211");
                //print_r ($memcachedConfig['host']);
                
   /*
                
                $id = $scm->adminAddItemsToCart($items);
        
                /*if(!empty($id)) {

                    $_SESSION['started'] = "true";
                    $_SESSION['id'] = $id;
                   
                 
                    //$data = array("status" => "success", "s_id", => session_id(),
                    //    "cart_id" => $id, "msg" => "Cart started.");
                    $data = array("status" => "success", "cart_id" => $id, "msg" => "Cart started.");


                } else {
                    $data = array("status" => "fail", "msg" => "Cart NOT started.");
                    
                    
                }

               /* break;
            case "cancelcart":
                // cancel the cart, end session, set cart row to 'cancelled'

                if(!isset($_SESSION['started'])) {
                    $data = array("status" => "fail", "msg" => "There is no cart to cancel.");
                    echo json_encode($data, JSON_FORCE_OBJECT);
                    return;
                }
                $affectedRows = $scm->cancelCart($_SESSION['id']);

                if($affectedRows > 0) {

                    session_unset();
                    session_destroy();
                    $data = array("status" => "success", "msg" => "Cart cancelled.");

                } else {
                    $data = array("status" => "fail", "msg" => "Cart NOT cancelled.");
                }

                break;
            case "checkoutcart":
                // check out the cart

                if(!isset($_SESSION['started'])) {
                    $data = array("status" => "fail", "msg" => "There is no cart to check out.");
                    echo json_encode($data, JSON_FORCE_OBJECT);
                    return;
                }

                // turn the JSON into an array of arrays (true means arrays and not objects)
                $items = json_decode($_POST['items'], true);
                $scm->addItemsToCart($items, $_SESSION['id']);

                $affectedRows = $scm->checkoutCart($_SESSION['id']);

                if($affectedRows > 0) {

                    session_unset();
                    session_destroy();
                    $data = array("status" => "success", "msg" => "Cart successfully checked out.");

                } else {
                    $data = array("status" => "fail", "msg" => "Cart was NOT checked out.");
                }
                break;
*/

       
/*
    } else {
        $data = array("status" => "error", "msg" => "Only POST allowed.");

    }
 echo json_encode($data, JSON_FORCE_OBJECT);
}
*/

?>
