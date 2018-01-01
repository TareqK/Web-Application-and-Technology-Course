<?php

class Database{
 
    // specify your own database credentials
    public $host = "localhost";
    public $db_name = "api_db";
    public $username = "root";
    public $password = "pass1234";
    public $conn = NULL; 
    
    public function __construct(){
    $connection = new mysqli($this->host, $this->username, $this->password, $this->db_name);
    if ($connection->connect_error) {
    die("" . $connection->connect_error);
    }
    $this->conn = $connection;
    $this->conn->autocommit(true);
    
    }
 
    // get the database connection
}
?> 
