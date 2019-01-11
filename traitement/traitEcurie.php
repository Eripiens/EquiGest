<?php
if(isset($_POST['ecurie'])
&& isset($_POST['adresse'])
&& isset($_POST['codePostal'])
&& isset($_POST['ville'])
&& isset($_POST['situation'])
&& isset($_POST['id'])){
    $ecurie = $_POST['ecurie'];
    $adresse = $_POST['adresse'];
    $codePostal = $_POST['codePostal'];
    $ville = $_POST['ville'];
    $situation = $_POST['situation'];
    $idProprietaire = $_POST['id'];

    $req = $pdo -> prepare("INSERT INTO ecurie (nom,adresse,codePostal,ville,situation,idProprietaire) VALUE (?,?,?,?,?,?)");
    $req -> execute(array($ecurie,$adresse,$codePostal,$ville,$situation,$idProprietaire));

    header('location:index.php?action=profil&id='.$idProprietaire);
    exit();
}
?>