<?php

  class usersController {

    public function auth() {
      if(isset($_POST['submit'])) {
          $data['username'] = $_POST['username'];
          
          $result = user::login($data);

          if($result->username === $_POST['username'] && password_verify($_POST['password'], $result->password)) {
            $_SESSION['logged'] = true;
            $_SESSION['username'] = $result->username;
            redirect::to('?page=home');
          } else {
            session::set('danger', 'Pseudo ou mot de passe est incorrect');
            redirect::to('?page=login');
        }

      }
    }

    public function register() {
      if(isset($_POST['submit'])) {
        $options = ['cost' => 12];

        $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
        
        $data = array(
          'fullname' => $_POST['fullname'],
          'username'  => $_POST['username'],
          'password'  => $password,
        );

        $result = user::createUser($data);
  
          if($result === 'ok') {
            session::set('success', 'Compte crée');
            redirect::to('?page=login');
          } else {
            echo $result;
          }
      }

    }

    static public function logout() {
      session_destroy();
    }
  }

?>