<?php
session_start();
require 'config/Database.php';
class Model {

    protected $dbconn;

    public function __construct(){
        $database = new Database;
        $this->dbconn = $database->conn;
    }

    public function register($username, $email, $password) {
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email', '$password')";
        $stmt = $this->dbconn->prepare($sql);
        
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function login($username, $password) {
        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }

      
    }

    public function userExists() {
        $sql = "SELECT * FROM user";
        $result = $this->dbconn->query($sql);
        return $result->num_rows > 0;
    }

    public function read(){
        $sql = "SELECT m.message, u.username, m.sent_time 
        FROM message m
        JOIN user u ON m.user_id = u.user_id";
        $messages = $this->dbconn->query($sql);

        if($messages->num_rows > 0){

            return $messages;

        }else{
            return false;
        }
    }

    public function getUser($nama){
        $sql = "SELECT user_id FROM user WHERE username = '$nama'";
        $result=$this->dbconn->query($sql);
        if($result->num_rows > 0){

            return $result;

        }else{
            return false;
        }


    }

    public function write($user_id, $message, $timestamp){
        $sqlInsert = "INSERT INTO message (user_id, message, sent_time) VALUES ('$user_id', '$message', '$timestamp')";
        if ($this->dbconn->query($sqlInsert) === TRUE) {
            return true;
        } else {
            echo 'Error sending message: ' . $this->dbconn->error;
        }
    }





    
}