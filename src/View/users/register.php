<div class="card">
  <h5 class="card-header">Register New User</h5>
  <?php if(isset($_GET['signup'])) {
    echo $_GET['signup'];
  } ?>
  <div class="card-body">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Name</label>
        <input name="name" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input name="email" type="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input name="pass1" type="pass" class="form-control">
      </div>
      <!-- <div class="form-group">
        <label>Repeat password</label>
        <input name="pass2" type="pass" class="form-control">
      </div> -->
      <button type="submit" class="btn btn-primary" name="submit">Add User</button>
      <a href="<?php echo ROOT_URL; ?>" class="btn btn-danger">Cancel</a>
    </form>
  </div>
</div>
