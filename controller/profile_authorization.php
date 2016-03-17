<?php

// Business Delegate

// load all scripts into memory
//require_once('init.php');
require_once('Parameters.php');
require_once('ShowUserProfileAction.php');
require_once('Utils.php');

//loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {

        if(Utils::isAJAX()) {

            $parameters = new Parameters("POST");

            $userProfileAction = new ShowUserProfileAction();
            $userProfileAction->setParameters($parameters);
           

            $response = $userProfileAction->getProfile();
           
            if($response) {

                $data = array("status" => "success", "user" => $response, "msgs" => Messages::getMessages());

            } else {
                // error message
                $data = array("12status" => "error", "msg" => Messages::getMessages());
            }
        } else {

            $data = array("13status" => "error", "msg" => "AJAX Required.", "msg" => Messages::getMessages());
        }
    } else {
        $data = array("status" => "error", "msg" => "Only POST allowed.", "msg" => Messages::getMessages());
    }

    // lastly send JSON response
    echo json_encode($data, JSON_FORCE_OBJECT);

    // for objects do this:
    // json_encode(get_object_vars($your_object));

?>
