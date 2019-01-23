<?php

$req = $pdo -> prepare('UPDATE stock SET paiement = "Payé" WHERE id = ?');
$req -> execute(array($_GET['id']));

header('location: index.php?action=acceuil');
exit();

?>