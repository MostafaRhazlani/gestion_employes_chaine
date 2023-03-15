<?php
require_once './views/includes/header.php';
  require_once './autoload.php';
  require_once './controllers/homeController.php';

  $home = new homeController();

  $pages = ['add', 'delete', 'home', 'update'];

  if(isset($_GET['page'])) {
    if(in_array($_GET['page'], $pages)) {
      $page = $_GET['page'];
      $home->index($page);
    } else {
      include('views/includes/404.php');
    }
  } else {
    $home->index('home');
  }
?>

<?php

require_once './views/includes/footer.php';

?>