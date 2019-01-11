<?php
    $req = $pdo -> prepare('SELECT * FROM user WHERE id = ?');
    $req -> execute(array($_GET['id']));
    $user = $req -> fetch();
?>

<h1>Votre profil</h1><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <b>Nom de l'utilisateur</b><br>
            <b>Adresse mail</b>
        </div>
        <div class="col-6">
            <?php 
                echo $user['nom']." ";
                echo $user['prenom']."<br>"; 
                echo $user['mail'];
            ?>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-12">
            <h2>Vos ecuries</h2>
        </div>
    </div>
    <?php
                $reqEcurie = $pdo -> prepare('SELECT * FROM ecurie WHERE idProprietaire = ?');
                $reqEcurie -> execute(array($user['id']));
                while($ecurie = $reqEcurie -> fetch()){
            ?>
    <div class="row">
        <h4><?php echo $ecurie['nom']; ?></h4><br>
    </div>
    <div class="row">
        <div class="col-6">
            <b>Adresse</b><br>
        </div>
        <div class="col-6">
            <?php 
                echo $ecurie['adresse']."<br>";
                echo $ecurie['codePostal']." ".$ecurie['ville'];
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <b>Situation</b><br>
            <b>Nombres de chevaux</b>
        </div>
        <div class="col-6">
            <?php 
                echo $ecurie['situation']."<br>";
                $reqNbrChevaux = $pdo -> prepare('SELECT * FROM cheval WHERE idEcurie = ?');
                $reqNbrChevaux -> execute(array($ecurie['id']));
                $row = $reqNbrChevaux -> fetchAll();
                echo count($row);

            ?>
        </div>
    </div><br>
    <?php
                }
    ?>
</div>

<div class="liens"><a href="index.php?action=modifier-profil&id=<?php echo $_GET['id'];?>">Modifier votre profil</a><br>
<a href="index.php?action=ajout-ecurie&id=<?php echo $_GET['id'];?>">Ajouter une ecurie</a></div>
