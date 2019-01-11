<h1>Ajouter un cheval a l'écurie</h1><br>

<form method="POST" action="../equigest/index.php?action=traitement-ajout">
    <h2>Informations generales</h2><br>
        <table class="formulaire">
            <tr>
                <td>Nom courant</td> <td><input type="text" name="nomCourant" placeholder="Nom courant"><br></td></tr><tr>
                <td>Nom complet</td> <td><input type="text" name="nom" placeholder="Nom complet"><br></td></tr><tr>
                <td>Numero SIRE</td> <td><input type="text" name="sire" placeholder="Numero SIRE"><br></td></tr><tr>
                <td>Robe</td> <td><input type="text" name="robe" placeholder="Robe"><br></td></tr><tr>
                <td>Sexe</td> <td><select name="sexe">
                    <option value="Jument">Jument</option>
                    <option value="Entier">Entier</option>
                    <option value="Hongre">Hongre</option>
                </select><br></td></tr><tr>
                <td>Date de naissance</td> <td><input type="date" name="dob"><br></td>
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
                <td>Race</td> <td><input type="text" name="race" placeholder="Race"><br></td></tr>
                <td>Studbook</td> <td><input type="text" name="studbook" placeholder="Studbook"><br></td></tr>
                <td>Pere</td> <td><input type="text" name="pere" placeholder="Pere"><br></td></tr>
                <td>Mere</td> <td><input type="text" name="mere" placeholder="Mere"><br></td></tr>
                <td>Pere de mere</td> <td><input type="text" name="pereMere" placeholder="Pere de mere"><br></td></tr>
            </tr>
        </table><br>
    <input type="submit" value="Ajouter"><input type="reset">
</form>