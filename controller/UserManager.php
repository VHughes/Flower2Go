<?php

require_once('../model/DBConnector.php');

//$um = new UserManager();

// Facade
class UserManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function getUserProfile($userName = "") {

        $rows = $this->db->query("select * from user where user_name = :name",
            array(':name' => $userName));
        //var_dump($rows[0]);
        if(count($rows) == 1) {
            return $rows[0];
        }
        // otherwise
        return null;
    }

    public function findUser($usr = "", $pwd = "") {
        $params = array(":usr" => $usr, ":pwd" => $pwd);
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

    
    public function addUser($firstName, $lastName, $userName) {

        $sql = "INSERT INTO users (firstname, lastname, username)
            VALUES ('$firstName', '$lastName', '$userName',)";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }

}

?>
