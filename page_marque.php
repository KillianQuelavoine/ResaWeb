<?php
include("connexion.php");
if (isset($_GET["nom_marque"])) {
    $nommarque = $_GET["nom_marque"];
    $requete = " SELECT * FROM voiture WHERE nom_marque = '" . $nommarque . "'";
    $requete2 = " SELECT * FROM marque WHERE nom = '" . $nommarque . "'";
    $requetevoiture = $db->query($requete);
    $recupfetch = $requetevoiture->fetchall(PDO::FETCH_ASSOC);
    $requetemarque = $db->query($requete2);
    $recupfetch2 = $requetemarque->fetchall(PDO::FETCH_ASSOC);
} else {
    header("location: Nos_voitures.php");
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'All - <?= $v['nom_marque']; ?></title>
    <link rel="stylesheet" href="css/stylespm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/ICONE/fav.ico"/>
    <script type="text/javascript" src="js/scriptpm.js"></script>
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
    <main>
        <h1 class="separateur">BMW</h1>
        <h2>Étape 2/4 : Choix du modèle</h2>
        <img class="boutongaelle" src="https://dabuttonfactory.com/button.png?t=Retourner+%C3%A0+l%27%C3%A9tape+pr%C3%A9c%C3%A9dente&f=Open+Sans-Bold&ts=20&tc=fff&hp=45&vp=20&c=round&bgt=unicolored&bgc=fca311">
        <div class="contour">
            <?php foreach ($recupfetch2 as $m) { ?>
                <div style="background-image: url('<?= $m['img']; ?>')" class="logo_marque"></div>
            <?php } ?>
            <div class="menu">
                <ul class="menu_liste">
                    <?php foreach ($recupfetch as $v) { ?>
                        <li style="background-image: url('<?= $v['imgfront']; ?>');" class="menu_produit">
                            <span class="menu_produit_titre"> <?= $v['nom_marque']; ?> <?= $v['nom']; ?></span>
                            <div class="menu_produit_contour">
                                <a href="product.php?id_voiture=<?= $v['id_voiture']; ?>" class="menu_lien">Accéder à la page produit</a>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
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