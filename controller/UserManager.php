<?php

require_once('../model/DBConnector.php');

//$um = new UserManager();

// Facade
class UserManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function getUserProfile() {
       // $params = array(":name" => $name);
        $id = $_POST['id'];
        $sql = "SELECT * FROM users WHERE username = $id";
        $rows = $this->db->query($sql);
           

        if(count($rows) == 1) {
            return $rows[0];
        }
        // otherwise
        return "error";
    }

    public function findUser($usr, $pwd) {
        
        $params = array(":usr" => $usr, ":pwd" => $pwd);
        
        //return $params;
        
        $sql = "SELECT * FROM users WHERE username = :usr AND password = :pwd";

        $rows = $this->db->query($sql, $params);
        if(count($rows) > 0) {
            return $rows[0];

        }
        
        return null;
    }
    
    
     public function listUsers() {
        $sql = "SELECT username, firstname, lastname FROM users";
        $rows = $this->db->query($sql);
        return $rows;
    }

    
    public function addUser($fname, $lname, $usr, $encrypt, $email) {
 
        $sql = "INSERT INTO users (firstname, lastname, username, password, email)
            VALUES ('$fname', '$lname', '$usr', '$encrypt', '$email')";
   
        $rows = $this->db->affectRows($sql);
        return $rows;

    }

}

?>
