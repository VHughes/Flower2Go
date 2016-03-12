<?php

// Business Delegate

// load all scripts into memory
require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {

        if(Utils::isAJAX()) {

            $parameters = new Parameters("POST");

            $userLoginAction = new UserLoginAction();
            $userLoginAction->setParameters($parameters);

            $response = $userLoginAction->login();

            if($response) {
//var_dump($response);
                $data = array("user" => $response);
                
                echo json_encode($data, JSON_FORCE_OBJECT);
                return;
                //return;

            } else {
                // error message
                $data = array("1status" => "error", "msg" => Messages::getMessages());
                echo json_encode($data, JSON_FORCE_OBJECT);
                return;
            }
        } else {

            $data = array("2status" => "error", "msg" => "AJAX Required.");
            echo json_encode($data, JSON_FORCE_OBJECT);
                return;
        }
    } else {
        $data = array("3status" => "error", "msg" => "Only POST allowed.");
        echo json_encode($data, JSON_FORCE_OBJECT);
                return;
    }

    // lastly send JSON response
    //echo json_encode($data, JSON_FORCE_OBJECT);

    // for objects do this:
    // json_encode(get_object_vars($your_object));

?>
