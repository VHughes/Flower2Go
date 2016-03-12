<?php

require_once('UserManager.php');
require_once('Session.php');
require_once('Messages.php');
require_once('Utils.php');

// Command
class UserProfileAction {

    private $userManager;
    private $params;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function display() {

        if(Session::get('isLoggedIn')) {
            
            
            
           $user_name = $this->params->values('username');
           $user_password = $this->params->values('password');
            return $user_name;
            echo $user_name;
            echo json_encode($user_name);
            echo json_encode($user_pass);
            return $user_pass;
            echo $user_pass;
          
          
            //$imp = implode($user_password);
            $imp = implode($user_password);
            $encrypt = md5($imp);
            $exp = explode(" ", $encrypt); 
           
            
            $usr = $this->userManager->getUserProfile($user_name, $user_password);
                //echo $user_password . " " . $user_name;
                echo json_encode($usr);
    
            
            return $this;
            
      
                
            } else {
                Messages::addMessage("warning", "'user_name' and/or 'password' parameters missing.");
                return null;
                return $usr;
            }
        }

    }


   

?>
