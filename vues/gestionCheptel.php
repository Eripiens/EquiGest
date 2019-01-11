<h1>Gestion du Cheptel</h1><br>

<form method="POST" action="../equigest/index.php?action=ajout-cheval" class="ajoutCheval">
    <input type="submit" value="Ajout d'un cheval">
</form><br>

<?php
    $req = $pdo -> prepare('SELECT * FROM ecurie WHERE idProprietaire = ?');
    $req -> execute(array($_SESSION['id']));
    while($ecurie = $req -> fetch()){
        echo ('<h2>'.$ecurie['nom'].'</h2>');
        $reqCheval = $pdo -> prepare('SELECT * FROM cheval WHERE idEcurie = ?');
        $reqCheval -> execute(array($ecurie['id']));
        $nbreData = $reqCheval -> rowCount();
        $rowAll = $reqCheval -> fetchAll();
        ?>

        <table class="liste" width="100%">
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Race</th>
                <th>Retirer</th>
            </tr>
        <?php
        foreach($rowAll as $row){
        ?>
            <tr>
                <td><?php echo '<a href="../equigest/index.php?action=cheval&id='.$row['id'].'">'.$row['nomCourant'].'</a>'; ?></td>
                <td><?php echo $row['sexe']; ?></td>
                <td><?php echo $row['race']; ?></td>
                <td><a href="../equigest/index.php?action=retirer-cheval&id=<?php echo $row['id']; ?>">Retirer</a></td>
            </tr>
        <?php
        }
        ?>
        </table><br>
<?php
    }
?>