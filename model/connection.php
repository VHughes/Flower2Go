<?php
/*
try{
    $db = new PDO("mysql:dbname=admin;host=localhost", "root", "password");
} catch (PDOException $e) {
    echo "FAIL";
    echo $e;
    
}
*/

class DBConnector {

    private $dbName = null;
    private $dbHost = null;
    private $dbPass = null;
    private $dbUser = null;
    private $conn = null;

    // static AKA class variable - belongs to the class not the object
    private static $instance = null;

    private function __construct($dbDetails = array()) {

        $this->dbName = $dbDetails['admin'];
        $this->dbHost = $dbDetails['localhost'];
        $this->dbUser = $dbDetails['root'];
        $this->dbPass = $dbDetails['password'];
        
         try {

            $this->conn = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName, $this->dbUser, $this->dbPass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            //echo $e->getMessage();
            Messages::addMessage("error", "DBConnector contructor: " . $e->getMessage());
            echo $e;
        }
         
     }
    
    public static function getInstance($dbDetails = null) {

        if($dbDetails == null) {
            $dbDetails = array(
                'db_name' => 'admin',
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_pass' => 'password'
            );

        }

        if(self::$instance == null) {
            self::$instance = new DBConnector($dbDetails);
        }
            return self::$instance;

    }
    
    
    public function getTransactionID($sql) {
        try {
            if($this->conn != null) {

                $this->conn->beginTransaction();
                $this->conn->exec($sql);
                // the id of the last inserted row into a table
                $lastID = $this->conn->lastInsertId();
                $this->conn->commit();
                return $lastID;

            } else {
                // connection failed, add that to the messages
                Messages::addMessage("error", "DBConnector 'getTransactionID' failure, PDO Connection was null.");
                return -1;
            }
                return -1;

        } catch(PDOException $e) {
            $this->conn->rollBack();
            Messages::addMessage("error", "DBConnector 'getTransactionID' failure, " . $e->getMessage());
        }
    }
    
}

?>