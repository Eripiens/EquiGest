<h1>Gestion des stocks</h1><br>

<h2>Total des stocks achetés ce mois</h2><br>

<?php
    $req = $pdo -> prepare('SELECT * FROM stock WHERE idProprietaire = ?');
    $req -> execute(array($_SESSION['id']));
    while($rowAll = $req -> fetchAll()){
        $nbreData = $req -> rowCount();
        ?>

        <table class="liste" width="100%">
            <tr>
                <th>Libellé</th>
                <th>Type</th>
                <th>Poids</th>
                <th>Prix</th>
                <th>Paiement</th>
            </tr>
        <?php
        foreach($rowAll as $row){
        ?>
            <tr>
                <td><?php echo $row['libelle'] ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['poids']; ?> kg</td>
                <td><?php echo $row['prix']; ?> €</td>
                <td><?php echo $row['paiement']; ?></td>
            </th>
        <?php
        }
        ?>
        </table><br>
<?php
    }
?>

<form method="POST" action="index.php?action=entree-stock" class="ajoutcheval">
    <input type="submit" value="Entrée de stock">
</form>