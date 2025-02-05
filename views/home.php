<?php 
  if(isset($_POST['search'])) {
    $data = new employesController();
    $employes = $data->findEmployes();
  } else {
    $data = new employesController();
    $employes = $data->getAllEmployes();
  }
?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-10 mx-auto">
      <?php include('./views/includes/alerts.php'); ?>
      <div class="card">
      <div class="card-header bg-primary text-light">Gestion employes</div>
        <div class="card-body bg-light">
            <a href="<?php echo BASE_URL; ?>?page=add" class="btn btn-sm btn-primary ms-2 mb-2">
              <i class="fas fa-plus"></i>
            </a>
            <a href="<?php echo BASE_URL; ?>?page=home" class="btn btn-sm btn-secondary ms-2 mb-2">
              <i class="fas fa-home"></i>
            </a>
            <a href="<?php echo BASE_URL; ?>?page=logout" class="btn btn-link ms-2 mb-2">
              <i class="fas fa-user"> <?php echo $_SESSION['username']; ?></i>
            </a>
            <form method="post" class="float-end mb-2 d-flex flex-row ">
              <input type="text" name="search" placeholder="Recherche" class="form-control">
              <button type="submit" class="btn btn-info btn-sm" name="find">
                <i class="fas fa-search"></i>
              </button>
            </form>
          <table class="table table-hover">  
            <thead>
              <tr>
                <th scope="col">Nom & Prénom</th>
                <th scope="col">Matricule</th>
                <th scope="col">Département</th>
                <th scope="col">Poste</th>
                <th scope="col">Date Embauche</th>
                <th scope="col">Statut</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($employes as $employe) :?>
                <tr>
                  <th scope="row"><?php echo $employe['nom'] . ' ' . $employe['prenom']; ?></th>
                  <td><?php echo $employe['matricule']; ?></td>
                  <td><?php echo $employe['depart']; ?></td>
                  <td><?php echo $employe['poste']; ?></td>
                  <td><?php echo $employe['date_emb'];?></td>
                  <td>
                    <?php echo $employe['statut']
                      ?
                      '<span class="badge text-bg-success">Active</span>'
                      :
                      '<span class="badge text-bg-danger">Resilié</span>';
                    ?>
                  </td>
                  <td class="d-flex flex-tr">
                    <form action="?page=update" method="post" class="mr-1">
                      <input type="hidden" name="id" value="<?php echo $employe['id'];?>">
                      <button class="btn btn-sm btn-danger">
                        <i class="fa fa-edit"></i>
                      </button>
                    </form>
                    <form action="?page=delete" method="post" class="mr-1" onclick="return confirm('are you sure you want delete this')">
                      <input type="hidden" name="id" value="<?php echo $employe['id'];?>">
                      &nbsp;
                      <button class="btn btn-sm btn-warning">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
