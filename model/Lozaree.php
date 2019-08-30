<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

$noDispoTable = [];

    // SGBD Data

    try {
        // Connect to DB
        $connex = new PDO('mysql:host=localhost;dbname=i_vidy','sserver','sserver') or die('not connect');
        $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connex->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo $e;
        die;
    }

    if (!empty($_POST['nb']) && !empty($_POST['date']) && !empty($_POST['heure'])) {

        $client = intval(htmlspecialchars($_POST['client']));
        $invites = htmlspecialchars($_POST['nb']);
        $date = htmlspecialchars($_POST['date']);
        $heure = htmlspecialchars($_POST['heure']);

        // Date et heure de reservation ainsi que les tables concernées

        $sel = $connex->prepare('SELECT reservation_table.num_reservation as reservation, num_table as tabl,date_reservation as dat, heure_reservation as heure, id_client as client FROM reservation_table,Reservation WHERE reservation_table.num_reservation = Reservation.num_reservation');

        $sel->execute() or exit(print_r($sel->errorInfo()));

        

        

        while ($dt = $sel->fetch()){
            
            if ($client == $dt['client'] && $date == $dt['dat'] && $heure == $dt['heure']) {
                $cannot = True;
            }
            elseif ($date == $dt['dat'] && $heure == $dt['heure']) {

                $notClient = True;

            }

            else{
                $alltableFree = True;
            }
        }

        if ($notClient) {
            // Numero des tables occupées à cette heure
            $dispo = $connex->prepare('SELECT num_table FROM reservation_table,Reservation WHERE (date_reservation = :dat AND heure_reservation = :heure) AND (reservation_table.num_reservation = Reservation.num_reservation)');

            $dispo->bindParam(':dat', $date);
            $dispo->bindParam(':heure', $heure);

            $dispo->execute() or exit(print_r($dispo->errorInfo()));

            while ($rep = $dispo->fetch()){
                array_push($noDispoTable, $rep['num_table']);

            }
        }
        elseif ($alltableFree) {
            $anyTable = True;
        }

    }
?>