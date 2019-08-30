<div class="row">
    <form class="col s12" action="index.php?action=reservation" method="POST" enctype="multipart/form-data">
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
            <label>Nombre de personnes</label>
            <div class="input-field col s12">
                <select class='browser-default' name="nombre_personne">
                    <option value="1" selected>1 personne</option>
                    <?php
                        $a = 2;
                        while ($a <= 10) {
                            echo '<option value="' . $a . '">' . $a . ' personnes</option>';
                            $a++;
                        }

                    ?>
                </select>
            </div>
        </div>

        <div class="row">

            <label for="date">Date du commande</label>
            <div class="input-field col s12">
                <input id="date" name="date" type="date" class="validate">
            </div>
        </div>

        <div class="row">
            <label>heure de commande</label>
            <div class="input-field col s12">
                <select class='browser-default' name="heure">
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
                                echo '<option value="' . $i . 'H' . $j . '">' . foo($i) . 'H' . foo($j) . '</option>';
                                $j += 15;
                            }
                        }
                    ?>
                </select>
            </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="valider_reservation">
            Envoyer
        </button>
    
    </form>
  </div>