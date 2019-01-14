<?php
    $req = $pdo -> prepare('SELECT * FROM cheval WHERE id = ?');
    $req -> execute(array($_GET['id']));
    $cheval = $req -> fetch();
?>

<form method="POST" action="index.php?action=trait-modifier&id=<?php echo $_GET['id'];?>">
    <h2>Informations generales</h2><br>
        <table class="formulaire">
            <tr>
                <td>Nom courant</td> <td><input type="text" name="nomCourant" value="<?php echo $cheval['nomCourant'];?>"><br></td></tr><tr>
                <td>Nom complet</td> <td><input type="text" name="nom" value="<?php echo $cheval['nom'];?>"><br></td></tr><tr>
                <td>Numero SIRE</td> <td><input type="text" name="sire" value="<?php echo $cheval['sire'];?>"><br></td></tr><tr>
                <td>Robe</td> <td><input type="text" name="robe" value="<?php echo $cheval['robe'];?>"><br></td></tr><tr>
                <td>Sexe</td> <td><select name="sexe">
                    <option value="Jument">Jument</option>
                    <option value="Entier">Entier</option>
                    <option value="Hongre">Hongre</option>
                </select><br></td></tr><tr>
                <td>Date de naissance</td> <td><input type="date" name="dob" value="<?php echo $cheval['dob'];?>"><br></td>
                <td>Ecurie</td> <td><select name="ecurie">
                    <?php
                        $req = $pdo -> prepare('SELECT * FROM ecurie WHERE idProprietaire = ?');
                        $req -> execute(array($_SESSION['id']));
                        while($line = $req->fetch()){
                            echo '<option value="'.$line['id'].'">'.$line['nom'].'</option>';
                        }
                    ?>
                </select>
            </tr>
        </table><br>

    <h2>Genetique</h2><br>
        <table class="formulaire">
            <tr>
                <td>Race</td> <td><input type="text" name="race" value="<?php echo $cheval['race'];?>"><br></td></tr>
                <td>Studbook</td> <td><input type="text" name="studbook" value="<?php echo $cheval['studbook'];?>"><br></td></tr>
                <td>Pere</td> <td><input type="text" name="pere" value="<?php echo $cheval['pere'];?>"><br></td></tr>
                <td>Mere</td> <td><input type="text" name="mere" value="<?php echo $cheval['mere'];?>"><br></td></tr>
                <td>Pere de mere</td> <td><input type="text" name="pereMere" value="<?php echo $cheval['pereMere'];?>"><br></td></tr>
            </tr>
        </table><br>
    <input type="submit" value="Modifier"><input type="reset">
</form>