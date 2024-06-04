<?php

class Database{
    private $dbhostname = 'localhost';
    private $dbusername = 'root';
    private $dbpassword = 'rahasia';
    private $dbname = 'case2';
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            $this->dbhostname,
            $this->dbusername,
            $this->dbpassword,
            $this->dbname
        );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

   


}