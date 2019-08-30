<?php
require("model/Model.php");

function page_acceuil(){
    $query = new Query_bdd;
    $select_repas_tab = $query->select_repas();
    $tab_repas = array();
    $i = 0;
    while($select_repas = $select_repas_tab->fetch()){
        $tab_repas[$i] = $select_repas;
        $i++;
    }

    $nbr_repas = count($tab_repas);
    if($nbr_repas%2==0){
        $half_repas = $nbr_repas/2;
    }
    else{
        $half_repas = round($nbr_repas/2);
    }

    require("view/acceuil.php");
}

function reservation($nom, $prenom, $mail, $telephone, $nombre_personne, $heure, $date){




}

function insertion_select_id($nom, $prenom, $mail, $telephone){
    if(empty($telephone)){
        $telephone = NULL;
    }
    $query = new Query_bdd;
    $id_existe_tab = $query->select_id($nom, $prenom, $mail);
    $id_existe_li = $id_existe_tab->fetch();
    $id_existe = $id_existe_li["id_client"];
    if(empty($id_existe)){
        $insertion_client = $query->insertion_client($nom, $prenom, $mail, $telephone);
        if($insertion_client === false){
            throw new Exception("Erreur insertion_client");
        }
        else{
            $id_existe_tab = $query->select_id($nom, $prenom, $mail);
            $id_existe_li = $id_existe_tab->fetch();
            $id_existe = $id_existe_li["id_client"];
        }
    }
    return $id_existe;
}


function commander($id_repas){
    $query = new Query_bdd;
    $select_repas_tab = $query->select_seul_repas($id_repas);
    $select_repas_li = $select_repas_tab->fetch();
    require("view/commande.php");
}

function commande($id_repas, $nom, $prenom, $mail, $telephone, $date, $heure){
    $id_client = insertion_select_id($nom, $prenom, $mail, $telephone);
    $query = new Query_bdd;
    $insertion_commande = $query->insertion_commande($date, $heure, $id_repas, $id_client);
    if($insertion_commande === false){
        throw new Exception("Erreur insertion_commande");
    }
    else{
        $notification = "Commande bien envoyée";
        $select_repas_tab = $query->select_seul_repas($id_repas);
        $select_repas_li = $select_repas_tab->fetch();
        require("view/commande.php");
    }
}

function livrer($id_repas){
    $query = new Query_bdd;
    $select_repas_tab = $query->select_seul_repas($id_repas);
    $select_repas_li = $select_repas_tab->fetch();
    require("view/livraison.php");
}

function livraison($id_repas, $nom, $prenom, $mail, $telephone,$adresse){
    $id_client = insertion_select_id($nom, $prenom, $mail, $telephone);
    $query = new Query_bdd;
    $frais_livraison = 2000;
    $insertion_livraison = $query->insertion_livraison($id_client, $id_repas, $adresse, $frais_livraison);
    if($insertion_livraison === false){
        throw new Exception("Erreur insertion_livraison");
    }
    else{
        $notification = "Livraison bien envoyée";
        $select_repas_tab = $query->select_seul_repas($id_repas);
        $select_repas_li = $select_repas_tab->fetch();
        require("view/livraison.php");
    }
}