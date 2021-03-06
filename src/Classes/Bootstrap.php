<?php
class Bootstrap {
  private $controller;
  private $action;
  private $request;

  public function __construct($request) {
    $this->request = $request;
    if($this->request['controller'] == "") {
      $this->controller = 'home';
    } else {
      $this->controller = $this->request['controller'];
    }
    if($this->request['action'] == "") {
      $this->action = 'index';
    } else {
      $this->action = $this->request['action'];
    }
  }
  public function createController() {
    //Check for Class
    if(class_exists($this->controller)) {
      $parents = class_parents($this->controller);
      // Check Extend
      if(in_array('Controller', $parents)) {
        if(method_exists($this->controller, $this->action)) {
          return new $this->controller($this->action, $this->request);
        } else {
          // Method does not exist
          echo '<h1>Method Does Not Exist</h1>';
          return;
        }
      } else {
        // Base Controller Doesn't exist
        echo '<h1>Base Controller Does Not Exist</h1>';
        return;
      }
    } else {
      // Controller Class doesn't exist
      echo '<h1>Controller Class Does Not Exist';
      return;
    }
  }
}
