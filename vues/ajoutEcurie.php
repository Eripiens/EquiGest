<h1>Ajout d'une ecurie</h1><br>

<form method="POST" action="../equigest/index.php?action=trait-ecurie">
    <table class="formulaire">
        <tr>
            <td>Nom de votre ecurie</td> <td><input type="text" name="ecurie" placeholder="Ecurie"><br></td></tr><tr>
            <td>Adresse</td> <td><input type="text" name="adresse" placeholder="Adresse"><br></td></tr><tr>
            <td>Code postal</td> <td><input type="text" name="codePostal" placeholder="Code postal"><br></td></tr><tr>
            <td>Ville</td> <td><input type="text" name="ville" placeholder="Ville"><br></td></tr><tr>
            <td>Situation de l'ecurie</td> <td><select name="situation">
                <option value="Particulier">Particulier</option>
                <option value="Professionel">Professionel</option>
            </select></td></tr>
            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
    </table>
    <br><br>

    <input type="submit" value="Ajouter">
    <input type="reset">
</form>