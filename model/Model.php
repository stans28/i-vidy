<?php
require("Connect_bdd.php");

class Query_bdd extends Connect_bdd{
    public function select_id($nom, $prenom, $mail){
        $bdd = $this->dbconnect();
        $id_existe = $bdd->prepare("SELECT id_client FROM Client WHERE nom=? and prenom=? and mail=?");
        $id_existe->execute(array($nom, $prenom, $mail));
        return $id_existe;
    }

    public function insertion_client($nom, $prenom, $mail, $telephone){
        $bdd = $this->dbconnect();
        $insertion_client = $bdd->prepare("INSERT INTO Client(nom, prenom, mail, telephone) VALUES(?,?,?,?)");
        $insertion_client->execute(array($nom, $prenom, $mail, $telephone));
        return $insertion_client;
    }

    public function select_repas(){
        $bdd = $this->dbconnect();
        $select_repas = $bdd->query("SELECT * FROM Repas");
        return $select_repas;
    }

    public function select_seul_repas($id_repas){
        $bdd = $this->dbconnect();
        $select_repas = $bdd->prepare("SELECT * FROM Repas WHERE id_repas = ?");
        $select_repas->execute(array($id_repas));
        return $select_repas;
    }

    public function insertion_commande($date, $heure, $id_repas, $id_client){
        $bdd = $this->dbconnect();
        $insertion_commande = $bdd->prepare("INSERT INTO Commande(date_commande, heure_commande, id_repas, id_client) VALUES(?,?,?,?)");
        $insertion_commande->execute(array($date, $heure, $id_repas, $id_client));
        return $insertion_commande;
    }

    public function insertion_livraison($id_client, $id_repas, $adresse, $frais_livraison){
        $bdd = $this->dbconnect();
        $insertion_livraison = $bdd->prepare("INSERT INTO Livraison(id_repas, adresse, id_client, prix_livraison) VALUES(?,?,?,?)");
        $insertion_livraison->execute(array($id_repas, $adresse, $id_client, $frais_livraison));
        return $insertion_livraison;
    }
}