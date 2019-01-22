<h1>Bienvenue sur Equigest !</h1><br>

</p>Equigest est une plateforme de gestion de votre écurie en ligne. Elle vous permettra de surveiller votre stock, vos vaccins, ou vos frais de marechalerie par exemple !</p><br>

<h2>Rappel des factures non payés</h2><br>

<h3>Stocks</h3><br>
    <?php
    $req = $pdo -> prepare("SELECT * FROM stock WHERE idProprietaire = ? AND paiement = ?");
    $req -> execute(array($_SESSION['id'],"A payer"));
    while($rowAll = $req -> fetchAll()){
        $nbreData = $req -> rowCount();
        ?>

        <table class="liste" width="100%">
            <tr>
                <th>Libellé</th>
                <th>Type</th>
                <th>Poids</th>
                <th>Prix</th>
            </tr>
        <?php
        foreach($rowAll as $row){
        ?>
            <tr>
                <td><?php echo $row['libelle'] ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['poids']; ?> kg</td>
                <td><?php echo $row['prix']; ?> €</td>
            </th>
        <?php
        }
        ?>
        </table><br>
<?php
    }
?>

<h3>Veterinaire & Marechalerie</h3>
