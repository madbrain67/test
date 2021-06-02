<?php
/**
 * Créer une bdd mugs_party et importe le fichier mugs.sql qui ce trouve dans le dossier sql.
 * Créer ton fichier db.php avec les infos de connexion.
 *
 * Tu dois déclaré une variable qui porte le nom du site: Mugs Party.
 * Le titre du site Mugs Party, est placé a 5 endroits diffèrents de la page. (10 points, 2 points par emplacement)
 * (réference image: exemple-titre-site.jpg).
 *
 * Tu dois déclarer une variable qui contiens un tableau des couleurs disponibles pour les mugs: (Noir Blanc Violet Marron Rose Vert Jaune)
 * Tu dois déclarer une variable qui contiens un tableau des tailles disponibles pour les mugs:  (S M XL XXL)
 */
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title></title>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="manifest" href="images/favicon/site.webmanifest">
        <link rel="stylesheet" href="css/bootstrap-v4.6.0.css">
        <link rel="stylesheet" href="css/font-awesome-4.7.0.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo" class="mr-2"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <button type="button" id="toggle-sorting-bar" class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid pb-5">
            <div class="container">
                <h1 class="display-4">Mugs & Tasses</h1>
                <p class="lead"><a href="#">Découvrez notre sélection.</a> <small><em>Commande simple et livraison rapide.</em></small></p>
                <div class="new"><a href="#" class="btn btn-outline-secondary"><i class="fa fa-plus mr-2"></i>Ajouter un Mugs</a></div>
            </div>
        </div>
        <?php
        /**
         * (50 points).
         *
         * (réference image: shorting-bar-1.jpg)
         * (réference image: shorting-bar-2.jpg)
         * (réference image: shorting-bar-3.jpg)
         * (réference image: shorting-bar-4.jpg)
         * (réference image: shorting-bar-5.jpg)
         *
         * Tu dois créer une barre de recherche (via l'url) qui permet d'affichés les mugs choisis selon ses critères:
         *  - en stock
         *  - par prix
         *  - par couleur
         *  - par taille
         *  - par nouveautés
         *  - par tendances.
         *
         * Exemple: Ta barre de recherche permet d'affichée tous les mugs qui sont en stock avec un prix supèrieure a 32€ de couleur rose et de taille S qui sont nouveaux mais pas tendances.
         *
         * Tu dois utiliser dans ton code le tableau PHP déclaré pour afficher les couleurs disponibles.
         * Tu dois utiliser dans ton code le tableau PHP déclaré pour afficher les tailles disponibles.
         *
         * Ta barre de barre de recherche dois contenir un boutton RESET pour re initialiser la barre de recherche.
         *
         * Pour la logique du tri:
         *  - Dans le dossier form tu créera le fichier sortingForm.php
         *  - Dans ce fichier tu mettra ta logique pour la barre de tri.
         *
         * Pour afficher la barre de recherche tu dois cliquer sur le bouton "loupe" en haut a droite du site.
         * Pour des tests tu peu laisser la barre de recherche visible en enlevant la class none ci-dessous.
         */
        ?>

        <div id="sorting-bar" class="container-fluid none sorting-bar">
            <!-- ton code html et php de la sorting-bar -->
        </div>

        <?php
        /**
         * (30 points).
         *
         * Tu dois afficher tous les mugs présents en base de données si aucun tri est faits SINON afficher ceux triés par la barre de recherche.
         *
         * Pour les écrans: (réference image: exemple.jpg)
         *  - écran < 600px = 1 carte par ligne
         *  - écran > 600px and < 768px = 2 carte par ligne
         *  - écran > 768px and < 1024px = 3 carte par ligne
         *  - écran > 1024px = 4 carte par ligne.
         *
         * Les titres des mugs doivent être en majuscules via le CSS
         * Pour le dégradé des titres les couleurs sont: rgba(3, 102, 3, 1) et rgba(0, 0, 0, 1)
         *
         * Toutes les cartes doivent avoir la même hauteur.
         * Au passage de la souris sur la carte et uniquement au passage de la souris sur la carte:
         *  - la couleur de la carte dois être: rgba(240, 255, 255, 1)
         *  - le curseur de la souris de la carte dois devenir la main. (réference image: exemple-curseur.jpg)
         *  - les couleurs du dégradé des titres changent en: rgba(129, 25, 124, 1) et rgba(0, 0, 0, 1)
         *
         * Url pour trouver les icones: https://fontawesome.com/v4.7/
         * Pour les stock et icones: (réference image: exemple-stock.jpg)
         *  - la couleur de l'icone pour la disponibilité en stock: rgba(0, 128, 0, 1)
         *  - la couleur de l'icone pour la non disponibilité en stock: rgba(206, 14, 14, 1)
         *  - les informations des stocks doivent être en bas de carte et toutes alignées a la même hauteur
         *  - le mot pièce dois contenir le S (pièces) si il y a plus de une pièce en stock
         */
        ?>

        <div class="container mt-40">
            <!-- ici ton code PHP pour afficher les mugs trouvés. -->
        </div>

        <div class="spacer spacer-md"></div>
        <footer role="contentinfo" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 footer-box">
                        <p style="padding-right:80px;"><h4>.</h4>On y trouve de tout et surtout du n'importe quoi !!</p>
                        <h3 class="footer-heading">Nous suivre</h3>
                        <ul class="social-icons">
                            <li><a href="#" target="_blank"><i class="rounded-circle fa fa-google"></i></a></li>
                            <li><a href="#" target="_blank"><i class="rounded-circle fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="rounded-circle fa fa-facebook"></i></a></li>	
                            <li><a href="#" target="_blank"><i class="rounded-circle fa fa-rss"></i></a></li>
                        </ul>
                        <h3 class="footer-heading">Contact</h3>
                        <ul class="contact-info">
                            <li><span class="icon fa fa-home"></span>, 67000 Strasbourg</li>
                            <li><span class="icon fa fa-phone"></span>03.99.98.97.96</li>
                            <li><span class="icon fa fa-envelope"></span>contact@mugsparty.fr</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-box">
                        <h3 class="footer-heading">Liens</h3>
                        <ul class="footer-links">
                            <li><a href="#" target="_blank">Home</a></li>
                            <li><a href="#" target="_blank">About us</a></li>
                            <li><a href="#" target="_blank">Contact</a></li>
                            <li><a href="#" target="_blank">Legal mentions</a></li>
                        </ul>
                        <h3 class="footer-heading">Catégories</h3>
                        <ul class="footer-links">
                            <li><a href="#" target="_blank">Mugs</a></li>
                            <li><a href="#" target="_blank">Tasses</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 footer-box">
                        <h3 class="footer-heading">Nous contacter</h3>

                        <?php
                        /**
                         * (10 points).
                         *
                         * Tu dois créer la page contact.
                         * Sur la page contact tu dois faire un dump des informations envoyées via le formulaire de contact.
                         * La function _dump() est disponible dans le fichier configuration.php qui ce trouve dans le dossier config.
                         */
                        ?>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Votre email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="username@yahoo.fr">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label">Votre message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="message" rows="3" placeholder="..."></textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-send mr-2"></i>Envoyer</button>
                        </div>
                    </div>
                    <div class="col-md-12 footer-box">
                        <div class="copyright">
                        <p>&copy; <?= date('Y'); ?>. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>