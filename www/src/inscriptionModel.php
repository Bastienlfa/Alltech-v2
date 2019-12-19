<?php

include 'inscriptionControl.php';

class client {

private $nom;
private $prenom;
private $societe;
private $mail;
private $adresse;
private $pays;


    public function getNom($id){
        echo $this->nom;
    }

    public function getPrenom($id){
        echo $this->Prenom;
    }

    public function getSociete($id){
        echo $this->societe;
    }

    public function getmail($id){
        echo $this->mail;
    }

    public function getAdresse($id){
        echo $this->adresse;
    }

    public function getPays($id){
        echo $this->pays;
    }


}
    
class admin extends client {
    private $statut="admin";
        
    public function getStatut($id){
        echo $this->statut;
    }

}

class user extends client {
    private $statut="na";

    public function getStatut($id){
        echo $this->statut;
    }
}


try {
    $insc= "INSERT INTO user (nom,prenom,societe,mail,adresse,pays) VALUE ('$nom','$prenom','$societe','$mail','$adresse','$pays')"; //manque statut 
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=tech2','root','');
    $req = $bdd->query($insc);
    
}

catch (PDOException $e) {
     echo 'Connexion échouée : ' . $e->getMessage();
    }

