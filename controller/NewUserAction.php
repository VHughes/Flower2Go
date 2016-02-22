<?php

require_once('UserManager.php');
require_once('Session.php');
require_once('Messages.php');
require_once('Utils.php');

// Command
class NewUserAction {

    private $userManager;
    private $params;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function register() {

        if(Session::get('isLoggedIn')) {
            
            Messages::addMessage("info", "You are already logged in.");
            
            return $this;
            
        } else {
             $response = array();

            // params have to be there
            $usr = $this->params->getValue('username');
            $pwd = $this->params->getValue('password');
            $fname = $this->params->getValue('firstname');
            $lname = $this->params->getValue('lastname');
            $email = $this->params->getValue('email');
            if($usr != null && $pwd != null && $fname != null && $lname != null && $email != null) {
                // check if user name and password are correct
                $user = $this->userManager->addUser($fname, $lname, $usr, $pwd, $email);
      
                if($user != null) {
                    // log user in
                    Session::set("username", $user['username']);
                    Session::set("id", $user['ID']);
                    Session::set("isLoggedIn", true);
                    return $user;
                    return $user['ID'];
                    

            } else{
                    Messages::addMessage("info", "Log in user and/or password incorrect.");
                    return null;
            
                }
                
            } else {
                Messages::addMessage("warning", "'user_name' and/or 'password' parameters missing.");
                return null;
                return $usr;
            }
        }

    }


}
   

?>
