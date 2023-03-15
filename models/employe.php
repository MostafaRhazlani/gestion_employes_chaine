<?php

  class employe {
    static public function getAll(){
      $stmt = DB::connect()->prepare('SELECT * FROM employes');
      $stmt->execute();
      return $stmt->fetchAll();
      // $stmt->close();
      $stmt = null;
    }

    static public function add($data) {
      $stmt = DB::connect()->prepare('INSERT INTO employes(nom,prenom,matricule,depart,poste,date_emb,statut) VALUES
        (:nom,:prenom,:matricule,:depart,:poste,:date_emb,:statut)');
      $stmt->bindParam(':nom',$data['nom']);
      $stmt->bindParam(':prenom',$data['prenom']);
      $stmt->bindParam(':matricule',$data['matricule']);
      $stmt->bindParam(':depart',$data['depart']);
      $stmt->bindParam(':date_emb',$data['date_emb']);
      $stmt->bindParam(':statut',$data['statut']);

      if($stmt->execute($data)){
        return 'ok';
      } else {
        return 'error';
      }
      // $stmt->close();
      $stmt = null;
    }
  }

?>