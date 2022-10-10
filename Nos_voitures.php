<?php
include("connexion.php");
$requetemarque = $db->query('SELECT * FROM marque');
$recupfetch = $requetemarque->fetchall(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'All - Nos Voitures</title>
    <link rel="stylesheet" href="css/stylesnv.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/ICONE/fav.ico"/>
</head>

<body>
    <nav>
        <ul>
            <a href="index.php">
            <img class="logo" src="img/AUTRE/Logo.svg">
            </a>
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="Nos_voitures.php">NOS VOITURES</a></li>
            <li><a href="a_propos.php">À PROPOS</a></li>
        </ul>
        <a href="recherche.php"> <img class="recherche" src="img/ICONE/Recherche.png"> </a>
    </nav>

    <main>
        <h1 class="separateur">Nos marques disponibles</h1>
        <h2>Étape 1/4 : Choisir la marque du véhicule</h2>
        <ul class="marques">
            <?php foreach ($recupfetch as $m) { ?>
                <li class="marque">
                    <h1 class="txt-marque"><?= $m['nom']; ?></h1>
                    <a href="page_marque.php?nom_marque=<?= $m['nom']; ?>"><img class="img-marque" src="<?= $m['img']; ?>"></a>
                </li>
            <?php } ?>
        </ul>
    </main>

    <footer>
        <div class="listfooter">
            <ul>
                <li><strong>SERVICE CLIENT</strong></li>
                <li><a href="mailto:contactlocall@quelavoine.butmmi.o2switch.site">Nous contacter</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>

            <ul>
                <li><strong>INFORMATIONS PRATIQUES</strong></li>
                <li><a href="a_propos.php#mentions">Mentions Légales</a></li>
                <li><a href="a_propos.php">À propos</a></li>
            </ul>

            <ul>
                <li><strong>NOUS SUIVRE</strong></li>
                <div class="media">
                    <li class="social"><a href="https://twitter.com/loc_allemande"><img src="img/ICONE/Twitter.png"></a></li>
                    <li class="social"><a href="https://www.instagram.com/loc_allemande"><img src="img/ICONE/Instagram.png"></a></li>
                </div>
            </ul>
        </div>
    </footer>
</body>

</html>