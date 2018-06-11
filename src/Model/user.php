<?php
class UserModel extends Model {
  public function register() {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if(isset($_POST['submit'])) {

      $name = $post['name'];
      $email = $post['email'];
      $pass = $post['pass1'];

      // Check for empty fields
      if(empty($name) || empty($email) || empty($pass)) {
        header('Location:'.ROOT_URL.'users/register?signup=empty');
        exit();
      } else {
        // Check if input characters are valid
        if(!preg_match("/^[a-zA-Z0-9-_ ]+$/", $name)) {
          header('Location:'.ROOT_URL.'users/register?signup=invalid');
          exit();
        } else {
          // Check if email is valid
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location:'.ROOT_URL.'users/register?signup=email');
            exit();
          } else {
            // Check if username already taken
            $this->query('SELECT * FROM appusers WHERE name = :name');
            $this->bind(':name', $name);
            $result = $this->single();
            if($result > 1) {
              header('Location:'.ROOT_URL.'users/register?signup=usernametaken');
              exit();
            } else {
              // Hashing the password
              $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

              // Insert user into Database
              $this->query('INSERT INTO appusers (name, email, pass) VALUES (:name, :email, :pass)');
              $this->bind(':name', $name);
              $this->bind(':email', $email);
              $this->bind(':pass', $hashed_pass);

              $this->execute();
              if ($this->lastInsertId()) {
                header('Location:'.ROOT_URL.'users/login?signup=success');
                exit();
              }
            }
          }
        }
      }
    }
    return;
  }

  public function login() {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if(isset($_POST['submit'])) {
      $name = $post['name'];
      $pass = $post['pass1'];

      // Check for empty fields
      if(empty($name) || empty($pass)) {
        header('Location:'.ROOT_URL.'users/login?login=empty');
        exit();
      } else {
        $this->query('SELECT * FROM appusers WHERE name=:name');
        $this->bind(':name', $name);
        $result = $this->single();
        if($result < 1) {
          header('Location:'.ROOT_URL.'users/login?login=nouser');
          exit();
        } else {
          // De-hashing password
          $hashed_pass = password_verify($pass, $result['pass']);
          if($hashed_pass == false) {
            header('Location:'.ROOT_URL.'users/login?login=password');
            exit();
          } elseif($hashed_pass == true) {
            // Log in user
            $_SESSION['userLogged'] = true;
            $_SESSION['user-data'] = array(
              'id' => $result['id'],
              'name' => $result['name'],
              'email' => $result['email'],
              'register-date' => $result['register-date']
            );
            header('Location:'.ROOT_URL.'blog');
            exit();
          }
        }
      }


    }
  }
}
// $pass = 'mru240574';
// echo $pass . '<br>';
// echo password_hash($pass, PASSWORD_DEFAULT);
