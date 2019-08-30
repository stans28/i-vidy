<?php
require("controller/controller.php");

try{
    if(isset($_GET["action"])){
        $action = htmlspecialchars($_GET["action"]);
        if($action == "reservation" and isset($_POST["valider_reservation"])){
            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            $mail = htmlspecialchars($_POST["mail"]);
            $telephone = htmlspecialchars($_POST["telephone"]);
            $nombre_personne = htmlspecialchars($_POST["nombre_personne"]);
            $heure = htmlspecialchars($_POST["heure"]);
            $date = htmlspecialchars($_POST["date"]);
            reservation($nom, $prenom, $mail, $telephone, $nombre_personne, $heure, $date);
        }

        elseif($action == "menu"){
            afficher_menu();
        }

        elseif($action == "commander" and isset($_GET["id_repas"])){
            $id_repas = htmlspecialchars($_GET["id_repas"]);
            commander($id_repas);
        }

        elseif($action == "commande" and isset($_GET["id_repas"]) and isset($_POST["valider_commande"])){
            $id_repas = htmlspecialchars($_GET["id_repas"]);
            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            $mail = htmlspecialchars($_POST["mail"]);
            $telephone = htmlspecialchars($_POST["telephone"]);
            $date = htmlspecialchars($_POST["date_commande"]);
            $heure = htmlspecialchars($_POST["heure_commande"]);
            commande($id_repas, $nom, $prenom, $mail, $telephone, $date, $heure);
        }

        elseif($action == "livrer" and isset($_GET["id_repas"])){
            $id_repas = htmlspecialchars($_GET["id_repas"]);
            livrer($id_repas);
        }

        elseif($action == "livraison" and isset($_GET["id_repas"])){
            $id_repas = htmlspecialchars($_GET["id_repas"]);
            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            $mail = htmlspecialchars($_POST["mail"]);
            $telephone = htmlspecialchars($_POST["telephone"]);
            $adresse = htmlspecialchars($_POST["adresse"]);
            livraison($id_repas, $nom, $prenom, $mail, $telephone,$adresse);
        }
        
    }

    else{
        page_acceuil();
    }

}
catch(Exception $e){
    echo "Erreur :".$e->getMessage();
}