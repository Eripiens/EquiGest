<?php
if (isset($_POST['nomCourant'])
    && isset($_POST['nom'])
    && isset($_POST['sire'])
    && isset($_POST['robe'])
    && isset($_POST['sexe'])
    && isset($_POST['dob'])
    && isset($_POST['race'])
    && isset($_POST['studbook'])
    && isset($_POST['pere'])
    && isset($_POST['mere'])
    && isset($_POST['pereMere'])
    && isset($_POST['ecurie'])){
        $nomCourant = $_POST['nomCourant'];
        $nom = $_POST['nom'];
        $sire = $_POST['sire'];
        $robe = $_POST['robe'];
        $sexe = $_POST['sexe'];
        $dob = $_POST['dob'];
        $race = $_POST['race'];
        $studbook = $_POST['studbook'];
        $pere = $_POST['pere'];
        $mere = $_POST['mere'];
        $pereMere = $_POST['pereMere'];
        $ecurie = $_POST['ecurie'];
        $idProprietaire = $_SESSION['id'];

        $req = $pdo -> prepare('INSERT INTO cheval (nomCourant,nom,sire,robe,sexe,dob,race,studbook,pere,mere,pereMere,idEcurie) VALUE (?,?,?,?,?,?,?,?,?,?,?,?)');
        $req -> execute(array($nomCourant,$nom,$sire,$robe,$sexe,$dob,$race,$studbook,$pere,$mere,$pereMere,$ecurie));
        
        header('location: ../equigest/index.php?action=gestion-cheptel');
        exit();
    }