<?php

require_once('UserManager.php');
require_once('Session.php');
require_once('Messages.php');
require_once('Utils.php');

// Command
class UserLoginAction {

    private $userManager;
    private $params;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function login() {

        if(Session::get('isLoggedIn')) {
            
            Messages::addMessage("info", "You are already logged in.");

            return null;
            
        } else {

            $user_name = $this->params->getValue('username');
            $user_password = $this->params->getValue('password');
            
            if($user_name != null && $user_password != null) {
          
                
                $usr = $this->userManager->findUser($user_name, $user_password);
               
                
                
                //echo $usr;
                if($usr != null) {
         
                    return $usr;
           
                    Messages::addMessage("info", "You're already logged in");
                    
                    

                } else {
                    Messages::addMessage("info", "Log in user and/or password incorrect.");
                    return null;
                }
            } else {
                Messages::addMessage("warning", "'user_name' and/or 'password' parameters missing.");
                return null;
                //return $usr;
            }
        }

    }


}

?>
