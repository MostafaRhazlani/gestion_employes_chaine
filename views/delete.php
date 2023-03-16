<?php 

  if(isset($_POST['id'])) {
    $existEmploye = new employesController();
    $existEmploye->deleteEmploye();
  }

?>
