<?php
include("connexion.php");
if (isset($_GET["id_voiture"])) {
    $idvoiture = $_GET["id_voiture"];
    $requetevoiture = $db->query('SELECT * FROM voiture WHERE id_voiture = ' . $idvoiture);
    $recupfetch = $requetevoiture->fetchall(PDO::FETCH_ASSOC);
    foreach ($recupfetch as $v) {
        $nomvoiture = $v['nom_marque'] . " " . $v['nom'];
        $prix = $v['prix'];
    }

    if (isset($_POST["validation"])) {
        if (isset($_POST["nom"]) and isset($_POST["mail"]) and isset($_POST["adresse"]) and isset($_POST["ville"]) and isset($_POST["cp"]) and isset($_POST["date1"]) and isset($_POST["date2"])) {
            if (!empty($_POST["nom"]) and !empty($_POST["mail"]) and !empty($_POST["adresse"]) and !empty($_POST["ville"]) and !empty($_POST["cp"]) and !empty($_POST["date1"]) and !empty($_POST["date2"])) {
                $nom = $_POST["nom"];
                $mail = $_POST["mail"];
                $adresse = $_POST["adresse"];
                $ville = $_POST["ville"];
                $cp = $_POST["cp"];
                $date1 = $_POST["date1"];
                $date2 = $_POST["date2"];
                $header = "MIME-Version: 1.0\r\n";
                $header .= 'From:"Loc\'All"<contact@LocAll.com>' . "\n";
                $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
                $header .= 'Content-Transfer-Encoding: 8bit';
                $message = '
                <html>

                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                </head>

                <body>    
                <h1> Bonjour ' . $nom . ', nous vous remercions d\'avoir fait confiance à Loc\'All pour votre réservation. </h1>
                <h2> Vous avez choisi de réserver le véhicule : ' . $nomvoiture . ' au prix de ' . $prix . ' € par jour. 
                <br>
                Votre réservation aura lieu du ' . $date1 . ' au ' . $date2 . '. </h2>
                <p> Merci de ne pas répondre à ce mail </p> 
                <p> Pour toute question ou information, n\'hésitez pas à nous contacter à l\'adresse suivante : contactlocall@quelavoine.butmmi.o2switch.site</p>
                    
                </body>

                </html>';
                $insertionbdd = $db->query("INSERT INTO reservation (id_voiture, nom_complet, mail, adresse, ville, cp, datedebut, datefin) VALUES (".$v["id_voiture"] .",'".$nom."','".$mail."','".$adresse."','".$ville."','".$cp."','".$date1."','".$date2."')");
                mail($mail.", contactlocall@quelavoine.butmmi.o2switch.site", "Confirmation de votre réservation pour votre " . $nomvoiture . " !", $message, $header);
                $reservationtermine = "Merci d'avoir réservé sur Loc'All, vous avez reçu un mail de confirmation.";

            }
        }
    }
} else {
    header("location: recherche.php");
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'All - Réservation</title>
    <link rel="stylesheet" href="css/stylesform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/ICONE/fav.ico"/>
    <script type="text/javascript" src="js/scriptform.js"></script>
</head>

<html>

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
    <div class="titre">
        <h1>FINALISATION DE VOTRE RÉSERVATION</h1>
    </div>
    <main>
        <form action="" method="post">
            <div class="Information">
                <h2>Vos informations</h2>
                <label for="nom">Nom Complet :</label>
                <input type="text" name="nom" id="nom" placeholder="Nom Complet" value="" required>
                <label for="email">Adresse email :</label>
                <input type="email" name="mail" id="mail" placeholder="Adresse email" value="" required>
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse" placeholder="Adresse de facturation" value="" required>
                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville" placeholder="Ville" value="" required>
                <label for="postale">Code postal :</label>
                <input type="number" name="cp" id="cp" placeholder="Code Postal" value="" required>
                <div class="datelab">
                    <label for="date1">Séjour allant de :</label>
                </div>
                <div class="date">
                    <input type="date" name="date1" id="date1" required>
                    <input type="date" name="date2" id="date2" required>
                </div>
            </div>
            <div class="Vehicule">
                <h1>Modèle réservé : <?= $nomvoiture; ?></h1>
                <h2>Prix : <span id="prix"><?= $prix; ?></span> €</h2>
                <button class="reserver" name="validation" id="reserver" type="submit">FINALISER LA RESERVATION</button>
                <h3><?php if (isset($reservationtermine)){ echo $reservationtermine; } ?></h3>
            </div>

        </form>
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