<?php

require_once('../model/DBConnector.php');

//$um = new UserManager();

// Facade
class UserManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function getUserProfile($name) {
        $params = array(":name" => $name);
        $sql = "SELECT * FROM users WHERE username = :name";
        $rows = $this->db->query($sql, $params);
           
        //var_dump($rows[0]);
        if(count($rows) == 1) {
            return $rows[0];
        }
        // otherwise
        return null;
    }

    public function findUser($usr, $pwd) {
        
        $params = array(":usr" => $usr, ":pwd" => $pwd);
        
        //return $params;
        
        $sql = "SELECT * FROM users WHERE username = :usr AND password = :pwd";

        $rows = $this->db->query($sql, $params);
        if(count($rows) > 0) {
            return $rows[0];
            
            //return $sql;
            //echo $sql;
            //echo $rows;
            
        }
        
        return null;
    }
    
    
     public function listUsers() {
        $sql = "SELECT username, firstname, lastname FROM users";
        $rows = $this->db->query($sql);
        return $rows;
    }

    
    public function addUser($fname, $lname, $usr, $encrypt, $email) {
        //$params = array(":fname" => $fname, ":lname" => $lname, ":usr" => $usr, ":pwd" => $pwd, ":email" => $email);
        $sql = "INSERT INTO users (firstname, lastname, username, password, email)
            VALUES ('$fname', '$lname', '$usr', '$encrypt', '$email')";
        //echo $sql;
        $rows = $this->db->affectRows($sql);
        return $rows;
        //return $sql;
        
        
        
        //$affectedRows = $this->db->affectRows($sql);
        //$rows = $this->db->query($sql, $params);
       // return $affectedRows;
       // return $rows;
       // return $rows;
    }

}

?>
