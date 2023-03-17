<?php 
  if(isset($_POST['submit'])) {
    $createUser = new usersController();
    $createUser->register();
  }
?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <?php include('./views/includes/alerts.php'); ?>
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Inscription</h3>
        </div>
        <div class="card-body bg-light">
          <form method="post" class="mr-1">
            <div class="form-group">
              <input type="text" name="fullname" placeholder="nom & prénom" class="form-control mb-4">
            </div>
            <div class="form-group">
              <input type="text" name="username" placeholder="Pseudo" class="form-control mb-4">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Mot de passe" class="form-control mb-2">
            </div>
            <button name="submit" type="submit" class="btn btn-sm btn-primary mb-2">
              Inscription
            </button>
          </form>
        </div>
        <div class="card-footer">
          <a href="<?php echo BASE_URL; ?>?page=login" class="btn btn-link">Connexion </a>
        </div>
      </div>
    </div>
  </div>
</div>