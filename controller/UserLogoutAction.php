<?php

require_once('UserManager.php');
require_once('Session.php');
require_once('Messages.php');
require_once('Utils.php');

// Command
class UserLogoutAction {

    private $userManager;
    private $params;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function logout() {

        if(Session::get('isLoggedIn')) {
            Session::closeSession();
            Messages::addMessage("info", "Successfully logged out.");
            return true;
    } else {
            Messages::addMessage("warning", "'isLoggedIn' parameter not found.");
            return false;
        }

    }


}

?>
