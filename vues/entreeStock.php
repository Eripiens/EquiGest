<h1>Entrée de stock</h1><br>

<form method="POST" action="index.php?action=trait-stock">
    <table class="formulaire">
            <tr>
                <td>Libellé</td> <td><input type="text" name="libelle"><br></td></tr><tr>
                <td>Date</td> <td><input type="date" name="date"><br></td></tr><tr>
                <td>Type de l'entrée</td> <td><select name="type">
                    <option value="Fourrage">Fourrage</option>
                    <option value="Paille">Paille</option>
                    <option value="Concentre">Concentré</option>
                    <option value="Autre">Autre</option>
                </select></td><br></tr><tr>
                <td>Prix</td> <td><input type="number" name="prix"> €<br></td></tr><tr>
                <td>Poids</td> <td><input type="number" name="poids"> kg<br></td></tr><tr>
                <td>Paiement</td> <td><select name="paye">
                    <option value="Payé">Payé</option>
                    <option value="A payer">A payer</option>
                </select></td>
            </tr>
        </table><br>
    
    <input type="submit" value="Envoyer"><input type="reset">
</form>