<h1>Gestion des stocks</h1><br>


<form method="POST" action="index.php?action=entree-stock" class="ajoutcheval">
    <input type="submit" value="Entrée de stock">
</form>

<h2>Total des stocks achetés ce mois</h2><br>

<?php
    $req = $pdo -> prepare('SELECT * FROM stock WHERE idProprietaire = ? AND MONTH(date) = MONTH(NOW()) ORDER BY date DESC');
    $req -> execute(array($_SESSION['id']));
    while($rowAll = $req -> fetchAll()){
        $nbreData = $req -> rowCount();
        ?>

        <table class="stock" width="100%">
            <tr>
                <th>Date</th>
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
                <td><?php echo $row['date'] ?></td>
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

    $fourrage = 0;
    $paille = 0;
    $concentre = 0;
    $autre = 0;
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND MONTH(date) = MONTH(NOW())');
    $req -> execute(array($_SESSION['id'],'Fourrage'));
    while($prix = $req -> fetch()){
        $fourrage += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND MONTH(date) = MONTH(NOW())');
    $req -> execute(array($_SESSION['id'],'Paille'));
    while($prix = $req -> fetch()){
        $paille += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND MONTH(date) = MONTH(NOW())');
    $req -> execute(array($_SESSION['id'],'Concentre'));
    while($prix = $req -> fetch()){
        $concentre += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND MONTH(date) = MONTH(NOW())');
    $req -> execute(array($_SESSION['id'],'Autre'));
    while($prix = $req -> fetch()){
        $autre += $prix['prix'];
    }
    
    $total = $fourrage + $paille + $concentre + $autre;
?>
<h4>Total des depenses par stocks</h4><br>
<table width="100%">
    <tr>
        <td><b>Fourrage</b></td>
        <td><?php echo $fourrage;?>€</td>
        <td><b>Paille</b></td>
        <td><?php echo $paille;?>€</td>
        <td><b>Concentré</b></td>
        <td><?php echo $concentre;?>€</td>
        <td><b>Autre</b></td>
        <td><?php echo $autre;?>€</td>
    </tr><tr>
        <td><b>Total</b></td>
        <td><?php echo $total;?>€</td>
    
</table><br>

<h2>Total des stocks achetés sur l'année</h2><br>

<?php
    $req = $pdo -> prepare('SELECT * FROM stock WHERE idProprietaire = ? AND YEAR(date) = YEAR(NOW()) ORDER BY date DESC');
    $req -> execute(array($_SESSION['id']));
    while($rowAll = $req -> fetchAll()){
        $nbreData = $req -> rowCount();
        ?>

        <table class="stock" width="100%">
            <tr>
                <th>Date</th>
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
                <td><?php echo $row['date'] ?></td>
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

    $fourrage = 0;
    $paille = 0;
    $concentre = 0;
    $autre = 0;
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND YEAR(date) = YEAR(NOW())');
    $req -> execute(array($_SESSION['id'],'Fourrage'));
    while($prix = $req -> fetch()){
        $fourrage += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND YEAR(date) = YEAR(NOW())');
    $req -> execute(array($_SESSION['id'],'Paille'));
    while($prix = $req -> fetch()){
        $paille += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND YEAR(date) = YEAR(NOW())');
    $req -> execute(array($_SESSION['id'],'Concentre'));
    while($prix = $req -> fetch()){
        $concentre += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ? AND YEAR(date) = YEAR(NOW())');
    $req -> execute(array($_SESSION['id'],'Autre'));
    while($prix = $req -> fetch()){
        $autre += $prix['prix'];
    }
    
    $total = $fourrage + $paille + $concentre + $autre;
?>

<h4>Total des depenses par stocks</h4><br>
<table width="100%">
    <tr>
        <td><b>Fourrage</b></td>
        <td><?php echo $fourrage;?>€</td>
        <td><b>Paille</b></td>
        <td><?php echo $paille;?>€</td>
        <td><b>Concentré</b></td>
        <td><?php echo $concentre;?>€</td>
        <td><b>Autre</b></td>
        <td><?php echo $autre;?>€</td>
    </tr><tr>
        <td><b>Total</b></td>
        <td><?php echo $total;?>€</td>
    
</table><br>

<h2>Total des stocks achetés</h2><br>

<?php
    $req = $pdo -> prepare('SELECT * FROM stock WHERE idProprietaire = ? ORDER BY date DESC');
    $req -> execute(array($_SESSION['id']));
    while($rowAll = $req -> fetchAll()){
        $nbreData = $req -> rowCount();
        ?>

        <table class="stock" width="100%">
            <tr>
                <th>Date</th>
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
                <td><?php echo $row['date'] ?></td>
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

    $fourrage = 0;
    $paille = 0;
    $concentre = 0;
    $autre = 0;
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ?');
    $req -> execute(array($_SESSION['id'],'Fourrage'));
    while($prix = $req -> fetch()){
        $fourrage += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ?');
    $req -> execute(array($_SESSION['id'],'Paille'));
    while($prix = $req -> fetch()){
        $paille += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ?');
    $req -> execute(array($_SESSION['id'],'Concentre'));
    while($prix = $req -> fetch()){
        $concentre += $prix['prix'];
    }
    
    $req = $pdo -> prepare('SELECT prix FROM stock WHERE idProprietaire = ? AND type = ?');
    $req -> execute(array($_SESSION['id'],'Autre'));
    while($prix = $req -> fetch()){
        $autre += $prix['prix'];
    }
    
    $total = $fourrage + $paille + $concentre + $autre;
?>

<h4>Total des depenses par stocks</h4><br>
<table width="100%">
    <tr>
        <td><b>Fourrage</b></td>
        <td><?php echo $fourrage;?>€</td>
        <td><b>Paille</b></td>
        <td><?php echo $paille;?>€</td>
        <td><b>Concentré</b></td>
        <td><?php echo $concentre;?>€</td>
        <td><b>Autre</b></td>
        <td><?php echo $autre;?>€</td>
    </tr><tr>
        <td><b>Total</b></td>
        <td><?php echo $total;?>€</td>
    
</table><br>
