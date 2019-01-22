<?php

if(isset($_POST['libelle'])
    && isset($_POST['type'])
    && isset($_POST['prix'])
    && isset($_POST['poids'])
    && isset($_POST['paye'])
    && isset($_POST['date'])){
        $libelle = $_POST['libelle'];
        $type = $_POST['type'];
        $prix = $_POST['prix'];
        $poids = $_POST['poids'];
        $paye = $_POST['paye'];
        $date = $_POST['date'];
        $idProprietaire = $_SESSION['id'];
        
        $req = $pdo -> prepare("INSERT INTO stock (libelle,type,prix,poids,paiement,date,idProprietaire) VALUE (?,?,?,?,?,?,?)");
        $req -> execute(array($libelle,$type,$prix,$poids,$paye,$date,$idProprietaire));

        header("location:index.php?action=gestion-stocks");
        exit();
    }
?>