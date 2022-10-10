<?php
include("connexion.php");
if (isset($_GET["id_voiture"])) {
    $idvoiture = $_GET["id_voiture"];
    $requetevoiture = $db->query('SELECT * FROM voiture WHERE id_voiture = ' . $idvoiture);
    $recupfetch = $requetevoiture->fetchall(PDO::FETCH_ASSOC);
} else {
    header("location: page_marque.php");
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($recupfetch as $v) { ?>
        <title>Loc'All - <?= $v['nom_marque']; ?> <?= $v['nom']; ?></title>
    <?php } ?>
    <link rel="stylesheet" href="css/stylesproduit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/ICONE/fav.ico"/>
    <script type="text/javascript" src="js/scriptproduit.js"></script>
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
        <?php foreach ($recupfetch as $v) { ?>
            <div class="boite-produit">
                <div class="imgs-produit">
                    <div style="background-image:url('<?= $v['imgfront']; ?>')" class="img-produit-active">

                    </div>
                    <div class="petites">
                        <div style="background-image:url('<?= $v['imgfront']; ?>')" class="img-produit1 tout">

                        </div>
                        <div style="background-image:url('<?= $v['imgback']; ?>')" class="img-produit2 tout">

                        </div>
                        <div style="background-image:url('<?= $v['imgin']; ?>')" class="img-produit3 tout">

                        </div>
                    </div>
                </div>

                <div class="txts-produit">
                    <div class="titre-produit">
                        <h1><?= $v['nom_marque']; ?> <?= $v['nom']; ?></h1>
                    </div>

                    <div class="prix-produit">
                        <h2> <?= $v['prix']; ?> € / jour</h2> 

                    </div>

                    <div class="separateur"></div>

                    <div class="desc-produit">
                        <p><?= $v['description']; ?></p>
                    </div>

                    <a href="form.php?id_voiture=<?= $v['id_voiture']; ?>">
                        <h3>Réserver!</h3>
                    </a>
                </div>
            </div>
        <?php } ?>
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