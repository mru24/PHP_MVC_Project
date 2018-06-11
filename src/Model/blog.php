<?php
class BlogModel extends Model {
  public function Index() {
    $this->query('SELECT * FROM myblog ORDER BY id DESC');
    $rows = $this->resultSet();
    return $rows;
  }

  public function addPost() {
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if(isset($_POST['submit'])) {
      $title = $post['title'];
      $body = $post['body'];

      $this->query('INSERT INTO myblog(title, body) VALUES (:title, :body)');
      $this->bind(':title', $post['title']);
      $this->bind(':body', $post['body']);
      $this->execute();
      if($this->lastInsertId()) {
          header('Location: '.ROOT_URL.'blog');
      }
    }
    return;
  }

  public function deletePost() {
    if(isset($_POST['delete'])) {
      echo 'Deleted';
    }
  }
}
