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
            //$data = array('status' => 'error', 'msg' => 'You\'re already logged in.');
            //echo json_encode($data, JSON_FORCE_OBJECT);
            //return $data;
            //return $this;
            return null;
            
        } else {
            //Messages::addMessage("info", "You're already logged in");
          // $response = array();

            // params have to be there
            $user_name = $this->params->getValue('username');
            $user_password = $this->params->getValue('password');
            
            if($user_name != null && $user_password != null) {
                // check if user name and password are correct
                
                $usr = $this->userManager->findUser($user_name, $user_password);
                //return $user_password . " " . $user_name;
                
                
                //echo $usr;
                if($usr != null) {
                    // log user in
                    //var_dump($usr);
                    //Session::set("username", $usr['username']);
                    //Session::set("id", $usr['id']);
                    //Session::set("isLoggedIn", true);
                    return $usr;
                   // return $usr['username'];
                    //return $usr['id'];
                    //return $user_password;
                    
                    Messages::addMessage("info", "You're already logged in");
                    //header('Location: localhost/Flower2Go/view/profile.html');
                    

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
