<?php

// Business Delegate

// load all scripts into memory
require_once('Parameters.php');
require_once('NewUserAction.php');
//require_once('init.php');
//loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {

        if(Utils::isAJAX()) {

            $parameters = new Parameters("POST");

            $userNewAction = new NewUserAction();
            $userNewAction->setParameters($parameters);

            $response = $userNewAction->register();

            if($response) {

                $data = array("status" => "success", "user" => $response, "msgs" => Messages::getMessages());

            } else {
                // error message
                $data = array("status" => "error", "msg" => Messages::getMessages());
            }
        } else {

            $data = array("status" => "error", "msg" => "AJAX Required.");
        }
    } else {
        $data = array("status" => "error", "msg" => "Only POST allowed.");
    }

    // lastly send JSON response
    echo json_encode($data, JSON_FORCE_OBJECT);

    // for objects do this:
    // json_encode(get_object_vars($your_object));

?>
