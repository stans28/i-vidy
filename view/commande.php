<!-- 4Aout 10 Jours -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="public/materialize/css/materialize.css">

    <link href="public/icon/font/css/open-iconic-foundation.css" rel="stylesheet">
    <link href="public/icon/fontawesome/css/all.css" rel="stylesheet">

    <title>I-vidy</title>
</head>
<body>

    <div class="container">

        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Commander</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Acceuil</a></li>
                </ul>
            </div>
        </nav>

        <?php
            if(isset($notification)){
                echo $notification;
            }
        ?>

        <div class="row">
            <div class="col s12 m7">
            <div class="card">
                <div class="card-image">
                    <img src="public/images/<?= $select_repas_li["image"] ?>">
                    <span class="card-title"><?= $select_repas_li["nom"] ?></span>
                </div>
                <div class="card-content">
                    <p>
                        <?= $select_repas_li["description"] ?><br>
                        Prix : <?= $select_repas_li["prix"] ?> Ar
                    </p>
                </div>
                <div class="card-action">
                    <div class="row">
                        <form class="col s12" action="index.php?action=commande&amp;id_repas=<?=$id_repas?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id='nom' name="nom" type="text" class="validate">
                                    <label for="first_name">Nom</label>
                                </div>

                                <div class="input-field col s6">
                                    <input id="prenom" name="prenom" type="text" id="prenom" class="validate">
                                    <label for="prenom">Prénom</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="mail" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="phone" name="telephone" type="text" class="validate">
                                    <label for="phone">Adresse telephonique</label>
                                </div>
                            </div>

                            <div class="row">

                                <label for="date">Date du commande</label>
                                <div class="input-field col s12">
                                    <input id="date" type="date" name="date_commande" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <label>heure de commande</label>
                                <div class="input-field col s12">
                                    <select class='browser-default' name="heure_commande">
                                        <option selected disabled>Heure</option>
                                        <?php

                                            function foo($numb){
                                                if ($numb < 10) {
                                                    $numb = '0' . strval($numb);
                                                }
                                                return $numb;
                                            }

                                            for ($i= 8; $i <= 20; $i++) { 
                                                $j = 0;
                                                while ($j < 60) {
                                                    echo '<option value="' . foo($i) . ':' . foo($j) . ':00">' . foo($i) . 'H' . foo($j) . '</option>';
                                                    $j += 15;
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <button class="btn waves-effect waves-light" type="submit" name="valider_commande">
                                Envoyer
                            </button>
                        
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
          

    </div>

    <script src="public/js/jquery.js"></script>
    <script src="public/materialize/js/materialize.js"></script>

    <script src="public/js/global.js"></script>
    <script src="public/icon/fontawesome/js/all.js" rel="stylesheet"></script>
</body>
</html>