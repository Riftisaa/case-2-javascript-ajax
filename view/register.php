<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>

    <style>
        * {
  margin: 0;
  padding: 0;
}

.mathNavbar{
  width: 100%;
  height: 5.25rem;
  position: sticky !important;
  padding: 0 !important;
  background-color: var(--primary) !important;
  box-shadow: 0px 2px 4px #00000040;
}

nav,
.nav-links {
  display: flex !important;
  justify-content: space-evenly !important;
}

.nav-links {
  gap: 10%;
  list-style: none;
  font-size: 1.5rem;
}

.btnRegion2{

  width: 10rem;
  height: 2.6875rem;
  flex-shrink: 0;
  border-radius: 0.75rem;
  background: white !important;
  margin-top: 1.69rem;
  border-color: none !important;
}

.logo {
  font-size: 2.5rem;
}

.logo:hover {
  cursor: default;
}


.containerx {
    width: 100%;
    height: 100%;
    padding-top: 15% ;
    padding-bottom: 15%;
    --color: #E1E1E1;
    background-color: #F3F3F3;
    background-image: linear-gradient(0deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent),
        linear-gradient(90deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent);
    background-size: 55px 55px;
  }

  .containery {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
  }
  
  .form_area {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #EDDCD9;
    height: auto;
    width: auto;
    border: 2px solid #264143;
    border-radius: 20px;
    box-shadow: 3px 4px 0px 1px #E99F4C !important;
  }
  
  .title {
    color: #264143;
    font-weight: 900;
    font-size: 1.5em;
    margin-top: 20px;
  }
  
  .sub_title {
    font-weight: 600;
    margin: 5px 0;
  }
  
  .form_group {
    display: flex;
    flex-direction: column;
    align-items: baseline;
    margin: 10px;
  }
  
  .form_style {
    outline: none;
    border: 2px solid #264143;
    box-shadow: 3px 4px 0px 1px #E99F4C;
    width: 290px;
    padding: 12px 10px;
    border-radius: 4px;
    font-size: 15px;
  }
  
  .form_style:focus, .btn:focus {
    transform: translateY(4px);
    box-shadow: 1px 2px 0px 0px #E99F4C;
  }
  
  .btn {
    padding: 15px !important;
    margin: 25px 0px;
    width: 290px;
    font-size: 15px !important;
    background: #DE5499 !important ;
    border-radius: 10px !important;
    font-weight: 800 !important;
    box-shadow: 3px 3px 0px 0px #E99F4C !important;
  }
  
  .btn:hover {
    opacity: .9;
  }
  
  

  .footer{
    display: grid;
    place-items: center;
    height: 5.6875rem;
    border-top: 2px solid black !important;
  }
    </style>
</head>
<body>

    <nav class="navbar mathNavbar">
    <?php include 'header.php' ?>
   </nav>
    <div class="container-fluid containerx">
        <div class="containery">
            <div class="form_area">
                <p class="title">Register</p>
                <form action="http://localhost/chat2/case-2-javascript-ajax/index.php/controller/register" method="post">
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
            <p class="text-center">Have an account? <a href="login"><span class="span">Login</span></a></p>
        </div></div>
    </div>


<footer>
    <?php include 'footer.php' ?>
    </footer>


      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>