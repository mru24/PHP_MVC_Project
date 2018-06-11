
<div class="card">
  <h5 class="card-header">Add Post</h5>
  <div class="card-body">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Title</label>
        <input name="title" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>Blog Post</label>
        <textarea name="body" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Add Post</button>
      <a href="<?php echo ROOT_URL; ?>blog" class="btn btn-danger">Cancel</a>
    </form>
  </div>
</div>
