<?php
session_start();
// Include config
require('config.php');

require('Classes/Bootstrap.php');
require('Classes/Controller.php');
require('Classes/Model.php');

require('Controller/home.php');
require('Controller/users.php');
require('Controller/admin.php');
require('Controller/blog.php');


require('Model/home.php');
require('Model/admin.php');
require('Model/user.php');
require('Model/blog.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller) {
  $controller->executeAction();
}
?>
