<?php
session_start();
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    $nama = $_POST['username'];

  

    $sql = "SELECT user_id FROM user WHERE username = '$nama'";
    $result=$conn->query($sql);


    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['user_id'];

        if (!empty($message)) {
            $timestamp = date('Y-m-d H:i:s');
            $sqlInsert = "INSERT INTO message (user_id, message, sent_time) VALUES ('$user_id', '$message', '$timestamp')";
            
            if ($conn->query($sqlInsert) === TRUE) {
                echo 'Message sent successfully';
            } else {
                echo 'Error sending message: ' . $conn->error;
            }
        } else {
            echo 'Message is empty';
        }
    } else {
        echo 'User not found';
    }

    $conn->close();
}

?>
