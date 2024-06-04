<?php
class Controller{
    private $model;
  private $content;

  public function __construct()
  {
    require 'model/Model.php';
    $this->model = new Model;
  }

  public function view($viewname, $data = []) {
    extract($data);
    include "view/$viewname" . '.php';
}

function register() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        if ($this->model->register($username, $email, $password)) {
            $this->view('login');
        } else {
            echo '<script>alert("Username sudah digunakan oleh akun lain!");</script>';
        }
    } else {
        $this->view('register');
    }
}

public function login() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($this->model->login($username, $password)) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            $this->view('chat');
        } else {
            if ($this->model->userExists()) {
                echo '<script>alert("Username atau password salah.");</script>';
            } else {
                echo '<script>alert("Belum ada akun yang terdaftar. Silakan daftar terlebih dahulu.");</script>';
            }
        }
    } else {
        $this->view('login');
    }
}

public function read(){
    $this->content = $this->model->read();
    foreach($this->content as $message){
        $message_content = $message['message'];
        $username = $message['username'];
        $timestamp = $message['sent_time'];


        echo '<div class=" messages__item_grup "> <label class="sub_title">' . $username . '</label> <div class="messages__item form_style"> <p class="text_content">' . $message_content . '</p>
        <p class="time_content">' . $timestamp . '</p></div> </div>  ' ;
    }
}


public function write(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $message = $_POST['message'];
        $nama = $_POST['username'];

        $result =$this->model->getUser($nama);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_id = $row['user_id'];

            if (!empty($message)) {
                $timestamp = date('Y-m-d H:i:s');
                if($this->model->write($user_id, $message, $timestamp)){
                    echo 'Message sent successfully';
                }else{
                    echo 'Error sending message: ';

                }
                


            }else{
                echo 'Message is empty';
            }


        }else{
            echo 'User not found';
        }





    }
    
}



}