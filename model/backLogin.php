<?php

session_start();
    include  'koneksi.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $sqlcheck = "SELECT * FROM user";
        $result = $conn->query($sql);
        $resultcheck = $conn->query($sqlcheck);

        if ($result->num_rows > 0) {
            $_SESSION["login"]=true;
            $_SESSION["username"]= $username;
            header("Location: ../view/index.php");
            exit();
        }
        else if($resultcheck->num_rows > 0){
                echo '<script> alert("Username atau password salah.");</script>';
        } else {
                echo '<script> alert("Belum ada akun yang terdaftar. Silakan daftar terlebih dahulu.");</script>';
            }
    
    // Menutup koneksi database
    $conn->close();