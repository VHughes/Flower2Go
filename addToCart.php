<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {
        $scm = new ShoppingCarManager();
        $rows = $scm->startCart();
        
        
        } else {
        $data = array("status" => "error", "msg" => "Something went wrong.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>

    ?>
        