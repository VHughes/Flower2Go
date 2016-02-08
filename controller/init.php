<?php


function loadScripts() {

require_once('UserManager.php');
require_once('Messages.php');
require_once('Parameters.php');
require_once('Session.php');
require_once('ShowUserProfileAction.php');
require_once('UserLoginAction.php');
require_once('UserLogoutAction.php');
require_once('Utils.php');
require_once('../model/DBConnector.php');

    
    /*
$scripts = array('DBconnector.php',
                 'Messages.php',
                 'Parameters.php',
                 'Session.php',
                 'ShowUserProfileAction.php',
                 'UserLoginAction.php',
                 'UserLogoutAction.php',
                 'UserManager.php',
                 'Utils.php');
/*
    $subDir = "/";

    foreach($scripts as $script) {
        require_once($subDir . DIRECTORY_SEPARATOR. $script);
    }

}

*/

}
?>
