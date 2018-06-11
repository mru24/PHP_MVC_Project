<?php
abstract class Controller {
  protected $request;
  protected $action;

  public function __construct($action, $request) {
    $this->action = $action;
    $this->request = $request;
  }

  public function executeAction() {
    return $this->{$this->action}();
  }

  protected function returnView($viewmodel, $fullview) {
    $view = 'View/' . get_class($this) . '/' . $this->action . '.php';
    // Check if it is Full View
    if($fullview) {
      require('view/main.php');
    } else {
      require($view);
    }
  }
}
