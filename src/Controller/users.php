<?php
class Users extends Controller {
  protected function Index() {
    $viewmodel = new UserModel();
    $this->returnView($viewmodel->Index(), true);
  }

  protected function register() {
    $viewmodel = new UserModel();
    $this->returnView($viewmodel->register(), true);
  }

  protected function login() {
    $viewmodel = new UserModel();
    $this->returnView($viewmodel->login(), true);
  }

  protected function logout() {
    unset($_SESSION['userLogged']);
    unset($_SESSION['user_data']);
    session_destroy();
    header('Location: ' . ROOT_URL);
  }
}
