<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid containerx">
        <div class="containery">
            <div class="form_area">
                <p class="title">LOG IN</p>
                <form action="" method="post">
                    <div class="form_group">
                        <label class="sub_title" for="username">username</label>
                        <input placeholder="input your username" id="username" name="username" class="form_style" type="text">
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="email">Email</label>
                        <input placeholder="input your email" id="email" name="email" class="form_style" type="email">
                    </div>
                    <div>
                        <button  type="submit" class="btn" name="submit">SUBMIT</button>
                    </div>
                    <div>
          
                    </div>
                
            </form></div></div>
    </div>

    <?php
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = filter_input(INPUT_POST,'email');
            $username =filter_input(INPUT_POST,'username');

            if($email != null && $username != null){
                $_SESSION["login"] = true;
                $_SESSION["email"] = $email;
                $_SESSION["username"] = $username;
                header("Location: index.php");
            }else{
                $message = "email atau username tidak boleh kosong";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

        }
    ?>


    <footer>
    </footer>


      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>