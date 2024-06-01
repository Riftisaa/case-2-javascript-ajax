<?php

include 'koneksi.php';

$sql = "SELECT m.message, u.username, m.sent_time 
    FROM message m
    JOIN user u ON m.user_id = u.user_id";

$messages = $conn->query($sql);

if($messages->num_rows > 0){

    foreach($messages as $message){
        $message_content = $message['message'];
        $username = $message['username'];
        $timestamp = $message['sent_time'];


        echo '<div class=" messages__item_grup "> <label class="sub_title">' . $username . '</label> <div class="messages__item form_style"> <p class="text_content">' . $message_content . '</p>
        <p class="time_content">' . $timestamp . '</p></div> </div>  ' ;
    }
    


}
else{ 
    echo "message not found";
}

$conn->close();



