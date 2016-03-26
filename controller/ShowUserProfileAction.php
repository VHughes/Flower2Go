<?php

require_once('UserManager.php');
require_once('Session.php');
require_once('Messages.php');

// Command
class ShowUserProfileAction {

    private $userManager;
    private $params;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function getProfile() {

 
        if(isset($_POST['method'])) {
            

            $profile = $this->userManager->getUserProfile();
        

            if($profile != null) {
                return $profile;
               
            } else {
     
                Messages::addMessage("info", "No user of that name.");
                return null;
            }

        } else {
     
        }

        // otherwise
        return null;
    }

}

?>
