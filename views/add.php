<?php 
  if(isset($_POST['submit'])) {
    $newEmploye = new employesController();
    $newEmploye->addEmployes();
  }

?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header bg-secondary">Ajouter un employé</div>
        <div class="card-body bg-light">
          <a href="<?php echo BASE_URL; ?>?page=home" class="btn btn-sm btn-secondary ms-2 mb-2">
            <i class="fas fa-home"></i>
          </a>
            <form action="" method="post">
              <div class="form-group mb-2">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom">
              </div>

              <div class="form-group mb-2">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" class="form-control" placeholder="Prenom">
              </div>

              <div class="form-group mb-2">
                <label for="mat">Matricule</label>
                <input type="text" name="mat" class="form-control" placeholder="Matricule">
              </div>

              <div class="form-group mb-2">
                <label for="depart">Département</label>
                <input type="text" name="depart" class="form-control" placeholder="Departement">
              </div>

              <div class="form-group mb-2">
                <label for="poste">Poste</label>
                <input type="text" name="poste" class="form-control" placeholder="Poste">
              </div>

              <div class="form-group mb-2">
                <label for="date_emb">Date Embauche</label>
                <input type="date" name="date_emb" class="form-control" placeholder="Date Embauche">
              </div>

              <div class="form-group mb-2">
                <select class="form-control" name="statut" id="">
                  <option value="1">Active</option>
                  <option value="0">Résilié</option>
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