<?php 

$req = $pdo -> prepare('SELECT * FROM cheval WHERE id = ?');
$req -> execute(array($_GET['id']));
$cheval = $req -> fetch();

?>

<h1><?php echo $cheval['nom'];?></h1><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3>Informations generales</h3>
        </div>
        <div class="col-6">
            <h3>Genetique</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-3">
            <b>Nom courant</b><br>
            <b>Numero SIRE</b><br>
            <b>Sexe</b><br>
            <b>Robe</b><br>
            <b>Date de naissance</b><br>
        </div>
        <div class="col-3">
            <?php
                echo $cheval['nomCourant']."<br>";
                echo $cheval['sire']."<br>";
                echo $cheval['sexe']."<br>";
                echo $cheval['robe']."<br>";
                echo $cheval['dob']."<br>";
            ?>
        </div>
        <div class="col-3">
            <b>Race</b><br>
            <b>Studbook</b><br>
            <b>Pere</b><br>
            <b>Mere</b><br>
            <b>Pere de mére</b><br>
        </div>
        <div class="col-3">
            <?php
                echo $cheval['race']."<br>";
                echo $cheval['studbook']."<br>";
                echo $cheval['pere']."<br>";
                echo $cheval['mere']."<br>";
                echo $cheval['pereMere']."<br>";
            ?>
        </div>
    </div>
</div><br><br>

<form method="POST" action="../equigest/index.php?action=modifier-cheval&id=<?php echo $cheval['id'];?>" class="ajoutCheval">
    <input type="submit" value="Modifier">
</form>