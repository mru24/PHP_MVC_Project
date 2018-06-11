<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My page</title>
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
  <script src="<?php echo ROOT_URL; ?>assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
</head>
<body>
  <script src="<?php echo ROOT_URL; ?>assets/js/fade.js" charset="utf-8"></script>
  <div class="navContainer">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">WW Project Studio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>blog">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['userLogged'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container pt-5">
      <?php require($view); ?>
  </div>

  <script src="<?php echo ROOT_URL; ?>assets/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="<?php echo ROOT_URL; ?>assets/js/jquery.scrollTo.min.js" charset="utf-8"></script>
  <script src="<?php echo ROOT_URL; ?>assets/js/main.js" charset="utf-8"></script>

</body>
</html>
