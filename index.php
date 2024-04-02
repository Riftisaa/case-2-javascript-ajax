<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/chat.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/css/typing.css">
    <title>Chatbox</title>
</head>
<body>

    <?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : "";

    ?>
    <div class="container">
        <div class="chatbox">
            <div class="chatbox__support">
                <div class="chatbox__header">
                    <div class="chatbox__image--header">
                        <img src="./images/user.png" alt="image">
                    </div>
                    <div class="chatbox__content--header">
                        <h4 class="chatbox__heading--header" id="username"><?php echo $username ?></h4>
                        <p class="chatbox__description--header">Active Now</p>
                    </div>
                </div>
                <div class="chatbox__messages">
                    <div class="chat-box" id="chatBox">
                       
                    </div>
                </div>
                <div class="chatbox__footer">
                   
           
                        <form id="messageForm" class="input-place">
                            <input placeholder="Send a message." id="messageInput" class="send-input" type="text">
                            <button  type="submit" class="send">
                                <svg class="send-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path fill="#6B6C7B" d="M481.508,210.336L68.414,38.926c-17.403-7.222-37.064-4.045-51.309,8.287C2.86,59.547-3.098,78.551,1.558,96.808 L38.327,241h180.026c8.284,0,15.001,6.716,15.001,15.001c0,8.284-6.716,15.001-15.001,15.001H38.327L1.558,415.193 c-4.656,18.258,1.301,37.262,15.547,49.595c14.274,12.357,33.937,15.495,51.31,8.287l413.094-171.409 C500.317,293.862,512,276.364,512,256.001C512,235.638,500.317,218.139,481.508,210.336z"></path></g></g></svg>
                            </button>
                        </form>
                </div>
            </div>
            <div class="chatbox__button">
                <img src="./images/Vector2.png" alt="">
            
            </div>
        </div>
        <form action="" method="post">
            <button class="Btn" type="submit" name="logout">
    
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                
                <div class="text">Logout</div>
            </button>
        </form>

        <?php
            if(isset($_POST['logout']))
            {
               
                func();
            }
            function func()
            {
                // do stuff 
                $_SESSION= [];
                session_unset();
                session_destroy();
                header("Location: login.php");
                exit();  
            }    
        ?>
        



    </div>
    <script src="./assets/js/Chat.js"></script>
    <script src="./app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>
</html>