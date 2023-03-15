<?php 
  if(isset($_POST['id'])) {
    $existEmploye = new employesController();
    $employe = $existEmploye->getOneEmploye();
  }

  if(isset($_POST['submit'])) {
    $existEmploye = new employesController();
    $existEmploye->updateEmployes();
  }

?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header bg-secondary text-light">Modifier un employé</div>
        <div class="card-body bg-light">
          <a href="<?php echo BASE_URL; ?>?page=home" class="btn btn-sm btn-secondary ms-2 mb-2">
            <i class="fas fa-home"></i>
          </a>
            <form action="" method="post">
              <div class="form-group mb-2">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom" value="<?php echo $employe->nom;?>">
                <input type="hidden" name="id" value="<?php echo $employe->id;?>">
              </div>

              <div class="form-group mb-2">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="<?php echo $employe->prenom;?>">
              </div>

              <div class="form-group mb-2">
                <label for="mat">Matricule</label>
                <input type="text" name="mat" class="form-control" placeholder="Matricule" value="<?php echo $employe->matricule;?>">
              </div>

              <div class="form-group mb-2">
                <label for="depart">Département</label>
                <input type="text" name="depart" class="form-control" placeholder="Departement" value="<?php echo $employe->depart;?>">
              </div>

              <div class="form-group mb-2">
                <label for="poste">Poste</label>
                <input type="text" name="poste" class="form-control" placeholder="Poste" value="<?php echo $employe->poste;?>">
              </div>

              <div class="form-group mb-2">
                <label for="date_emb">Date Embauche</label>
                <input type="date" name="date_emb" class="form-control" placeholder="Date Embauche">
              </div>

              <div class="form-group mb-2">
                <select class="form-control" name="statut">

                  <option value="1" <?php echo $employe->statut ? 'selected' : ''; ?>>Active</option>
                  <option value="0" <?php echo !$employe->statut ? 'selected' : ''; ?>>Résilié</option>
                </select>
              </div>

              <div class="form-group mb-2">
                <button type="submit" class="btn btn-primary" name="submit">Valider</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>