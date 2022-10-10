<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'All - Accueil</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/ICONE/fav.ico"/>
    <script type="text/javascript" src="js/script.js"></script>
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
    <header>
        <h1>LOC'ALL</h1>

    </header>
    <main>
        <h1 class="separateur">Nos voitures favorites</h1>
        <section class="slider">
            <div class="buttons">
                <button class="DecaleGauche" type="button" value="BOUTON GAUCHE">⇒</button>
                <button class="Pause" type="button" value="BOUTON PAUSE">⏸</button>
                <button class="Play" type="button" value="BOUTON PLAY">▶️</button>
                <button class="DecaleDroite" type="button" value="BOUTON DROITE">⇐</button>
                
            </div>
            <div class="js-slider">
                <div class="imgs-slider clone">
                    <div class="img-slider">
                        <h1 class="text-slider">Golf GTI</h1>
                        <a href="product.php?id_voiture=22"><img class="img-voiture" src="img/VOLKSWAGEN/GTi/image-1.jpg"></a>
                    </div>
                    <div class="img-slider">
                        <h1 class="text-slider">Porsche Panamera</h1>
                        <a href="product.php?id_voiture=20"><img class="img-voiture" src="img/PORSCHE/Panamera/image-1.jpg"></a>
                    </div>
                    <div class="img-slider">
                        <h1 class="text-slider">Audi Q8</h1>
                        <a href="product.php?id_voiture=5"><img class="img-voiture" src="img/AUDI/Q8/image-1.jpg"></a>
                    </div>
                    <div class="img-slider">
                        <h1 class="text-slider">Golf GTI</h1>
                        <a href="product.php?id_voiture=22"><img class="img-voiture" src="img/VOLKSWAGEN/GTi/image-1.jpg"></a>
                    </div>
                    <div class="img-slider clone">
                        <h1 class="text-slider">Porsche Panamera</h1>
                        <a href="product.php?id_voiture=20"><img class="img-voiture" src="img/PORSCHE/Panamera/image-1.jpg"></a>
                    </div>
                </div>
            </div>
        </section>
        <h1 class="separateur2">Les retours de nos clients</h1>
        <div class="avis">
            <div class="carte">
                <div class="image-avatar">
                    <img src="img/AVIS/Driss.jpg" alt="">
                </div>
                <p><strong>Driss | 2 avril 2022</strong></p>
                <div class="commentaire">
                    <p>J'avais besoin d'une belle voiture pour un mariage, j'ai donc décidé de venir sur ce site recommandé par mon ami. Je n'ai eu aucun soucis et j'ai pu rouler dans une belle BMW i8 afin d'être classe pour le mariage de mon ami Ricardo.</p>
                </div>
            </div>

            <div class="carte">
                <div class="image-avatar">
                    <img src="img/AVIS/Nathalie.jpg" alt="">
                </div>
                <p><strong>Nathalie | 28 octobre 2021</strong></p>
                <div class="commentaire">
                    <p>J'ai loué un véhicule pour la première fois de ma vie, avec un petit peu d'appréhension au début. Mais j'ai pu trouver ma voiture de rêve et la louer sans difficulté sur Loc'All. De plus, le service client est incroyable.</p>
                </div>
            </div>

            <div class="carte">
                <div class="image-avatar">
                    <img src="img/AVIS/Ricardo.jpg" alt="">
                </div>
                <p><strong>Ricardo | 15 avril 2022</strong></p>
                <div class="commentaire">
                    <p>J'ai testé Loc'All avec mon ami Driss pour mon mariage en louant une belle Porsche 911. Le service était efficace, j'ai pu la réserver sur les dates que je souhaitais sans soucis, le formulaire ne m'a pas posé problème et j'ai pu aller chercher ma voiture le lendemain sans soucis.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="listfooter">
            <ul class="service">
                <li><strong>SERVICE CLIENT</strong></li>
                <li><a href="mailto:contactlocall@quelavoine.butmmi.o2switch.site">Nous contacter</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>

            <ul class="info">
                <li><strong>INFORMATIONS PRATIQUES</strong></li>
                <li><a href="a_propos.php#mentions">Mentions Légales</a></li>
                <li><a href="a_propos.php">À propos</a></li>
            </ul>

            <ul class="follow">
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