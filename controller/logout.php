<?php

// load all scripts into memory
require_once('init.php');
loadScripts();


    // Business Delegate

    $data = array();

    if(Utils::isPOST()) {

        if(Utils::isAJAX()) {

            $parameters = new Parameters("POST");

            $userLogoutAction = new UserLogOutAction();
            $userLogoutAction->setParameters($parameters);

            $response = $userLogoutAction->logout();

            if($response) {

                //Utils::goToPage("index.php");
                $data = array("status" => "success");

            } else {
                // error message
                $data = array("4status" => "errors", "msg" => Messages::getMessages());
            }

        } else {

            $data = array("5status" => "error", "msg" => "AJAX Required.");

        }


    } else {
        $data = array("6status" => "error", "msg" => "Only POST allowed.");
    }


    echo json_encode($data, JSON_FORCE_OBJECT);

?>
