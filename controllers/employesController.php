<?php

  class employesController{
     
    public function getAllEmployes() {
      $employes = employe::getAll();
      return $employes;
    }

    public function addEmployes() {
      if(isset($_POST['submit'])) {
        $data = array(
          'nom' => $_POST['nom'],
          'prenom' => $_POST['prenom'],
          'matricule' => $_POST['mat'],
          'depart' => $_POST['depart'],
          'poste' => $_POST['poste'],
          'date_emb' => $_POST['date_emb'],
          'statut' => $_POST['statut'],
        );

        $result = employe::add($data);

        if($result === 'ok') {
          header('location:' . BASE_URL);
        } else {
          echo $result;
        }
      }
    }

    public function getOneEmploye(){
      if(isset($_POST['id'])){
        $data = array(
          'id' => $_POST['id']
        );
        $employe = employe::getEmploye($data);
        return $employe;
        
      }
    }

    public function updateEmployes() {
      if(isset($_POST['submit'])) {
        $data = array(
          'id' => $_POST['id'],
          'nom' => $_POST['nom'],
          'prenom' => $_POST['prenom'],
          'matricule' => $_POST['mat'],
          'depart' => $_POST['depart'],
          'poste' => $_POST['poste'],
          'date_emb' => $_POST['date_emb'],
          'statut' => $_POST['statut'],
        );

        $result = employe::update($data);
        if($result === 'ok') {
          header('location:' . BASE_URL);
        } else {
          echo $result;
        }
      }
    }
  }


?>