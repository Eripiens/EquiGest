<?php
include("config/bdd.php");
include("config/actions.php");
session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées
?>

<html>
    <head>
        <title>EquiGest</title>
        <meta charset ="UTF-8">
        <link href="config/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <a href="index.php?action=acceuil"><img src="img/logo.png" width="300 px"></a>

                </div>
                <div class="col-6">
                    <?php
                    // Quelle est l'action à faire ?
                    if (isset($_GET["action"])) {
                        $action = $_GET["action"];
                    } else {
                        $action = "accueil";
                    }
        
                    // Est ce que cette action existe dans la liste des actions
                    if (array_key_exists($action, $listeDesActions) == false) {
                        include("vues/404.php"); // NON : page 404
                    } else {
                        include($listeDesActions[$action]); // Oui, on la charge
                    }
        
                    ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
                    ?>
                </div>
                <div class="col-3">
                    <div id="login">
                    <?php
                        if (isset($_SESSION['id'])) {
                            echo "Bonjour " . $_SESSION['username'] . " <br><a href='index.php?action=deconnexion'>Deconnexion</a>";
                        } else {
                            echo '<a href="index.php?action=connexion">Connexion</a><br>
                            <a href="index.php?action=inscription">Inscription</a>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>