<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <nav class="navbar mathNavbar">
    <?php include 'header.php' ?>
   </nav>
    <div class="container-fluid containerx">
        <div class="containery">
            <div class="form_area">
                <p class="title">Register</p>
                <form action="../model/backRegister.php" method="post">
                    <div class="form_group">
                        <label class="sub_title" for="username">username</label>
                        <input placeholder="input your username" id="username" name="username" class="form_style" type="text" required>
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="Password">Email</label>
                        <input placeholder="Input Your Email" id="email" name="email" class="form_style" type="email" required>
                    </div>
                    <div></div>
                    <div class="form_group">
                        <label class="sub_title" for="Password">Password</label>
                        <input placeholder="Input Your Password" id="password" name="password" class="form_style" type="Password" required>
                    </div>
                    <div>
                        <button  type="submit" class="btn" name="submit">SUBMIT</button>
                    </div>
                    <div>
          
                    </div>
                
            </form>
            <p class="text-center">Have an account? <a href="login.php"><span class="span">Login</span></a></p>
        </div></div>
    </div>


<footer>
    <?php include 'footer.php' ?>
    </footer>


      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>