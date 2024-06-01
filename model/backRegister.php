<?php 
session_start();
include 'koneksi.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user (username ,email, password) VALUES ('$username','$email', '$password')";
    if ($conn->query($sql)) {
        header("Location: ../view/login.php");
    } else {
        echo '<script>alert("Username sudah digunakan oleh akun lain!");</script>';
    }
        
// Menutup koneksi database
$dbconn = null;;