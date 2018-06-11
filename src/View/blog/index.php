<?php if(isset($_SESSION['userLogged'])) { ?>
  <h4 class="text-capitalize">Hello <?php echo $_SESSION['user-data']['name']; ?></h4>
  <h4 class="my-2">Welcome to my</h4>
  <h1 class="display-3 text-center my-4">Blog</h1>

  <!-- <a href="<?php ROOT_PATH; ?>blog/addPost"><button type="button" class="btn btn-primary" name="button">Add Post</button></a> -->
  <?php foreach ($viewmodel as $item) { ?>
  <div class="card my-4">
    <div class="card-header">
      <h4><?php echo $item['title']; ?></h4>
    </div>
    <div class="card-body">
      <p class="card-text">
        <?php echo $item['body']; ?>
      </p>
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-6">
          <!-- <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="" value="<?php echo $item['id']; ?>">
            <input class="btn btn-danger" type="submit" name="delete" value="Delete Post">
          </form> -->
        </div>
        <div class="col-6">
          <p class="text-right">
            <?php echo $item['date']; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
<?php } else { ?>
  <h1 class="text-center mt-5">Please Log In or Register to view the content</h1>
<?php } ?>
