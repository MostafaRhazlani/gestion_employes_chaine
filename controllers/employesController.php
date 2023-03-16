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
          session::set('success', 'Employé Ajouté');
          redirect::to('?page=home');
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
          session::set('success', 'Employé Modifié');
          redirect::to('?page=home');
        } else {
          echo $result;
        }
      }
    }

    public function deleteEmploye() {
      if(isset($_POST['id']))
      $data['id'] = $_POST['id'];

      $result = employe::delete($data);
      if($result === 'ok') {
        session::set('success', 'Employé Supprimé');
        redirect::to('?page=home');
      } else {
        echo $result;
      }
    }

    public function findEmployes() {
      if(isset($_POST['search'])) {
        $data = array('search' => $_POST['search']);
        $employes = employe::searchEmployes($data);
        // die(print_r($employes));
        return $employes;
      }
    }
  }


?>