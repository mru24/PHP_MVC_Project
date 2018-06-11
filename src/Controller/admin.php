<?php
class Admin extends Controller {
  protected function Index() {
    $viewmodel = new AdminModel();
    $this->returnView($viewmodel->Index(), true);
  }
}
