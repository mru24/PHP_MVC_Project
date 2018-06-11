<?php
class BlogModel extends Model {
  public function Index() {
    $this->query('SELECT * FROM myblog ORDER BY id DESC');
    $rows = $this->resultSet();
    return $rows;
  }
}
