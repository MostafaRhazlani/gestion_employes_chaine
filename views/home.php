<?php 
  // echo "page home";
  $data = new employesController();
  $employes = $data->getAllEmployes();
  // print_r($employes);

?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-body bg-light">
          <a href="<?php echo BASE_URL; ?>?page=add" class="btn btn-sm btn-primary ms-2 mb-2">
            <i class="fas fa-plus"></i>
          </a>
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
                    <form action="?page=delete" method="post" class="mr-1">
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