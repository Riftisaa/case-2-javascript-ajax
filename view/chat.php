<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/chat.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/typing.css">
    <title>Chatbox</title>
    <style>
        

/* CHATBOX
=============== */
.chatbox {
    position: absolute;
    bottom: 30px;
    right: 30px;
}

/* CONTENT IS CLOSE */
.chatbox__support {
    display: flex;
    flex-direction: column;
    background: #eee;
    width: 300px;
    height: 350px;
    z-index: -123456;
    opacity: 0;
    transition: all .5s ease-in-out;
}

/* CONTENT ISOPEN */
.chatbox--active {
    transform: translateY(-40px);
    z-index: 123456;
    opacity: 1;
    
}

/* BUTTON */
.chatbox__button {
    text-align: right;
}


/* HEADER */
.chatbox__header {
    position: sticky;
    top: 0;
}

/* MESSAGES */
.chatbox__messages {
    margin-top: auto;
    display: flex;
    flex-direction: column;
    overflow-y: scroll;
    flex-direction: column-reverse;
}

.messages__item {
    display: flex;
    flex-direction: column;
    max-width: 60.6%;
    width: fit-content;
}

.messages__item--operator {
    margin-left: auto;
}

.messages__item--visitor {
    margin-right: auto;
}

/* FOOTER */
.chatbox__footer {
    position: sticky;
    bottom: 0;
}

.text_content{
    text-align: left;
    margin: 0;
}


.time_content{
    align-self: flex-end;
    margin: 0;
    font-size: 10px;
    align-items: end;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

*, html {
    --primaryGradient: #EDDCD9;
    --light: 300;
    --regular: 400;
    --semiBold: 600;
    --extraLight: 300;
    --italic: 300;
    --primary:#EDDCD9;
}


body {
    font-family: 'Nunito', sans-serif;
    font-weight: 400;
    font-size: 100%;
    background: #E1E1E1;
}

.chatbox__support {
    background: #f9f9f9;
    height: 450px;
    width: 350px;
    box-shadow: 3px 4px 0px 1px #E99F4C !important;
    border: 2px solid #264143;
    border-radius: 20px;

}

/* HEADER */
.chatbox__header {
    background: var(--primaryGradient);
    display: flex;
    align-items: center;
    justify-content: start;
    padding: 15px 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

.chatbox__image--header {
    margin-right: 10px;
}

.chatbox__heading--header {
    font-size: 1.2rem;
    color: #264143;
}

.chatbox__description--header {
    font-size: .9rem;
    color: #264143;
}

/* Messages */
.chatbox__messages {
    padding: 0 20px;
    padding-bottom: 20px;
}

.messages__item_grup {
    margin-top: 30px;
    max-width: 100%;
}
.messages__item{
    padding: 8px 12px;
    max-width: 100%;
}

.form_style {
    outline: none;
    border: 2px solid #264143;
    background: #E0E0E0; 
    box-shadow: 3px 4px 0px 1px #E99F4C;
    width: 290px;
    padding: 12px 10px;
    border-radius: 4px;
    font-size: 15px;
    }

.messages__item--visitor,
.messages__item--typing {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

.messages__item--operator {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    background: var(--primary);
    color: #264143;
}

/* FOOTER */
.chatbox__footer {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 20px;
    background: #DE5499 ;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
}

.chatbox__footer input {
    border: none;
    padding: 10px 10px;
    text-align: start;
}

.chatbox__send--footer {
    color:#264143;
}

.chatbox__button img,
.chatbox__button img:focus,
.chatbox__button img:visited {
    padding: 10px;
    background: white;
    width: 50px;
    height: 50px;
    border: none;
    outline: none;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    border-bottom-left-radius: 50px;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}


.sender-area {
    background-color: #343541;
    width: 100%;
    height: 70px;
    display: flex;
    border-radius: 8px;
}

.input-place {
display: flex;
flex-direction: row;
align-items: center;
justify-content: space-between;
background-color: #E1E1E1;
border-radius: 7px;
height: 50px;
width: 300px;
gap: 5px;
border: 2px solid #264143;
box-shadow: 3px 4px 0px 1px #E99F4C;;
border-radius: 4px;
}


.send-input {
    outline: none;
    display: flex;
    height: 40px;
    width: 230px;
    border-radius: 7px;
    background: none;
    color:#264143;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    margin-left: 5px;
}
  
.send-input::placeholder {
color: #828E9E;
}

.send {
    width: 30px;
    background-color:  #E1E1E1;
    border: none;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.send-icon {
    width: 17px;
  }


/* log out */
.Btn {
    display: flex;
    position: absolute !important;
    align-items: center;
    justify-content: flex-start;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition-duration: .3s;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
    background-color: rgb(255, 65, 65);
    bottom: 32px;
    left: 30px;
  }
  
  /* plus sign */
  .sign {
    width: 100%;
    transition-duration: .3s;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .sign svg {
    width: 17px;
  }
  
  .sign svg path {
    fill: white;
  }
  /* text */
  .text {
    position: absolute;
    right: 0%;
    width: 0%;
    opacity: 0;
    color: white;
    font-size: 1.2em;
    font-weight: 600;
    transition-duration: .3s;
  }
  /* hover effect on button width */
  .Btn:hover {
    width: 125px;
    border-radius: 40px;
    transition-duration: .3s;
  }
  
  .Btn:hover .sign {
    width: 30%;
    transition-duration: .3s;
    padding-left: 20px;
  }
  /* hover effect button's text */
  .Btn:hover .text {
    opacity: 1;
    width: 70%;
    transition-duration: .3s;
    padding-right: 10px;
  }
  /* button click effect*/
  .Btn:active {
    transform: translate(2px ,2px);
  }
    </style>
</head>
<body>

    <?php
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
                        <img src="http://localhost/chat2/case-2-javascript-ajax/view/images/user.png" alt="image">
                    </div>
                    <div class="chatbox__content--header">
                        <h4 class="chatbox__heading--header" id="username"><?php echo $username ?></h4>
                        <p class="chatbox__description--header">Active Now</p>
                    </div>
                </div>
                <div class="chatbox__messages">
                    <div class="chat-box" id="chatBox">

                    //chat muncul di sini
                       
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
                <img src="http://localhost/chat2/case-2-javascript-ajax/view/images/vector2.png" alt="">
            
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

    
    <script src="http://localhost/chat2/case-2-javascript-ajax/view/js/Chat.js"></script>
    <script src="http://localhost/chat2/case-2-javascript-ajax/view/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://localhost/chat2/case-2-javascript-ajax/view/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>