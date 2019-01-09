<h1>Rejoignez Equigest !</h1><br>

<form method="POST" action="../equigest/index.php?action=traitement-inscription">
    <table class="formulaire">
        <tr>
            <td>Nom</td> <td><input type="text" name="nom" placeholder="Nom"><br></td></tr><tr>
            <td>Prenom</td> <td><input type="text" name="prenom" placeholder="Prenom"><br></td></tr><tr>
            <td>Nom d'utilisateur</td> <td><input type="text" name="username" placeholder="Nom d'utilisateur"><br></td></tr><tr>
            <td>Mot de passe</td> <td><input type="password" name="password" placeholder="Mot de passe"><br></td></tr><tr>
            <td>Confirmez le mot de passe</td> <td><input type="password" name="confirmPassword" placeholder="Confirmation"><br></td></tr><tr>
            <td>Adresse mail</td> <td><input type="mail" name="mail" placeholder="Adresse mail"><br></td></tr><tr>
            <td>Confirmez le mail</td> <td><input type="mail" name="confirmMail" placeholder="Confirmation"><br></td></tr>

            <td>Nom de votre ecurie</td> <td><input type="text" name="ecurie" placeholder="Ecurie"><br></td></tr><tr>
            <td>Adresse</td> <td><input type="text" name="adresse" placeholder="Adresse"><br></td></tr><tr>
            <td>Code postal</td> <td><input type="text" name="codePostal" placeholder="Code postal"><br></td></tr><tr>
            <td>Ville</td> <td><input type="text" name="ville" placeholder="Ville"><br></td></tr><tr>
            <td>Situation de l'ecurie</td> <td><select name="situation">
                <option value="particulier">Particulier</option>
                <option value="professionel">Professionel</option>
            </select></td></tr>
    </table>
    <br><br>

    <input type="submit" value="Inscription">
    <input type="reset">
</form>