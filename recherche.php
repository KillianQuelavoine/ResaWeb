<?php
include("connexion.php");
$message = ' ';
if (isset($_GET["recherche"]) and !empty($_GET["recherche"])) {
    $recherche = $_GET["recherche"];
    $requete = " SELECT * FROM voiture WHERE nom LIKE '%" . $recherche . "%'";
    $requetevoiture = $db->query($requete);
    if ($requetevoiture->rowCount() == 0) {
        $requete = " SELECT * FROM voiture WHERE nom_marque LIKE '%" . $recherche . "%'";
        $requetevoiture = $db->query($requete);
    }
    if ($requetevoiture->rowCount() == 0) {
        $message = '<li> Aucun véhicule trouvé </li>';
    }
    $recupfetch = $requetevoiture->fetchall(PDO::FETCH_ASSOC);
} else {
    $requete = " SELECT * FROM voiture ";
    $requetevoiture = $db->query($requete);
    $recupfetch = $requetevoiture->fetchall(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'All - Recherche</title>
    <link rel="stylesheet" href="css/stylessearch.css">
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
        <a href=""> <img class="recherche" src="img/ICONE/Recherche.png"> </a>
    </nav>

    <div class="container_recherche">
        <form action="" method="get">
            <input class="barre" type="search" name="recherche" id="">
            <input class="envoyer" type="submit" value="Rechercher">
            <a href="recherche.php" class="croix">&times;</a>
        </form>
        <ul class="vehicules">
            <?php foreach ($recupfetch as $v) { ?>

                <li class="liste">

                    <div class="produits">

                        <div style="background-image:url('<?= $v['imgfront']; ?>')" class="img">
                        </div>
                        <div class="nom">
                            <?= $v['nom_marque']; ?> <?= $v['nom']; ?>
                        </div>
                        <div class="prix">
                            à partir de <?= $v['prix']; ?> €
                        </div>
                        <a href="product.php?id_voiture=<?= $v['id_voiture']; ?>" class="page"> Clique pour accéder à la page </a>
                    </div>

                </li>

            <?php } ?>
            <div class="rien"><?= $message ?></div>
        </ul>
    </div>
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