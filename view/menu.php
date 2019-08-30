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
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Reservation</a></li>
                    <li><a href="index.php?action=menu">Menu</a></li>
                </ul>
            </div>
        </nav>

        <?php
            while($select_repas = $select_repas_tab->fetch()){
        ?>
        <div class="row">
            <div class="col s12 m7">
            <div class="card">
                <div class="card-image">
                    <img src="public/images/<?= $select_repas["image"] ?>">
                    <span class="card-title"><?= $select_repas["nom"] ?></span>
                </div>
                <div class="card-content">
                    <p>
                        <?= $select_repas["description"] ?> <br>
                        Prix : <?= $select_repas["prix"] ?> Ar
                    </p>
                </div>
                <div class="card-action">
                    <a href="index.php?action=commander&amp;id_repas=<?= $select_repas["id_repas"] ?>">Commander</a>
                    <a href="index.php?action=livrer&amp;id_repas=<?= $select_repas["id_repas"] ?>">Livrer</a>
                </div>
            </div>
            </div>
        </div>
        <?php
            }
        ?>
          

    </div>

    <script src="public/js/jquery.js"></script>
    <script src="public/materialize/js/materialize.js"></script>

    <script src="public/js/global.js"></script>
    <script src="public/icon/fontawesome/js/all.js" rel="stylesheet"></script>
</body>
</html>