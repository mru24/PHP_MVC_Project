<?php
class Blog extends Controller {
  protected function Index() {
    $viewmodel = new BlogModel();
    $this->returnView($viewmodel->Index(), true);
  }

  protected function addPost() {
    $viewmodel = new BlogModel();
    $this->returnView($viewmodel->addPost(), true);
  }
}
